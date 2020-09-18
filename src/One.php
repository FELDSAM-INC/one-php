<?php

namespace One;

use PhpXmlRpc\Client;
use PhpXmlRpc\Request;
use PhpXmlRpc\Value;

/**
 * Class One
 * @package One
 *
 * @method Resource vmpoolInfoextended(int $filterFlag, int $rangeStart, int $rangeEnd, int $vmState, string $filter)
 */
class One {

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
        $body = (string) $response->value()[1]->scalarval();
        $code = (string) $response->value()[2]->scalarval();

        if($success !== true) {
            throw new \RuntimeException(sprintf(
                'XML-RPC API Call ends with error "%s" and code "%s"',
                $body,
                $code
            ));
        }

        return new Resource(self::simplexmlToArray(simplexml_load_string($body)));
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

    public static function simplexmlToArray($xml)
    {
        $ar = array();
        foreach ($xml->children() as $k => $v) {
            $child = self::simplexmlToArray($v);
            if (count($child) == 0) {
                $child = (string) $v;
            }
            foreach ($v->attributes() as $ak => $av) {
                if (!is_array($child)) {
                    $child = array("value" => $child);
                }
                $child[$ak] = (string) $av;
            }
            if (!in_array($k, array_keys($ar))) {
                $ar[$k] = $child;
            } else {
                if ($ar[$k][0]) {
                    $ar[$k][] = $child;
                } else {
                    $ar[$k] = array($ar[$k]);
                    $ar[$k][] = $child;
                }
            }
        }
        return $ar;
    }
}