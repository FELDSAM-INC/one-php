<?php

namespace OnePhp;

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use PhpXmlRpc\Client;
use PhpXmlRpc\Request;
use PhpXmlRpc\Value;

class One {

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $authString;

    private static $xmlrpcTypes = [
        "boolean" => "boolean",
        "integer" => "int",
        "double" => "double",
        "string" => "string",
        "array" => "array",
        "object" => "struct",
        "NULL" => "null",
    ];

    public function __construct($url, $authString) {
        $this->client = new Client($url);
        $this->authString = $authString;

        $this->prepareSerializer();
    }

    /**
     * Prepare serializer object
     */
    private function prepareSerializer(): void {
        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->addMetadataDir(__DIR__.'/metadata', 'One');

        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
            $handler->registerSubscribingHandler(new AnyTypeHandler());
        });

        $this->serializer = $serializerBuilder->build();
    }

    public function __call($name, $args) {
        $method = 'one.'.$this->snakeCaseToDot($name);
        $params = [new Value($this->authString)];

        foreach ($args as $arg) {
            $type = gettype($arg);
            $params[] = new Value($arg, self::$xmlrpcTypes[$type]);
        }

        $response = $this->client->send(new Request($method, $params));

        $success = (bool) $response->value()[0]->scalarval();
        $result = (string) $response->value()[1]->scalarval();
        $code = (string) $response->value()[2]->scalarval();

        if($success !== true) {
            throw new \RuntimeException(sprintf(
                'XML-RPC API Call ends with error "%s" and code "%s"',
                $result,
                $code
            ));
        }

        // look for root element
        preg_match('/^<([^>]+)>/', $result, $root);

        // add XML header to result
        $result = '<?xml version="1.0" encoding="UTF-8"?>'."\n".$result;
        $result = str_replace($root[0], '<'.$root[1].' xmlns="http://opennebula.org/XMLSchema">', $result);

        // deserialize the XML into object
        return $this->serializer->deserialize($result, 'One\\'.$this->camelCase($root[1]), 'xml');
    }

    /**
     * Converts 'ModelName' to 'model.name'.
     * @param string $word
     * @return string
     */
    private function snakeCaseToDot(string $word) : string
    {
        $tableized = preg_replace('~(?<=\\w)([A-Z])~u', '.$1', $word);

        if ($tableized === null) {
            throw new \RuntimeException(sprintf(
                'preg_replace returned null for value "%s"',
                $word
            ));
        }

        return mb_strtolower($tableized);
    }

    /**
     * 'model_name' to 'ModelName'.
     */
    public function camelCase(string $word) : string
    {
        return str_replace([' ', '_', '-'], '', ucwords(mb_strtolower($word), ' _-'));
    }
}
