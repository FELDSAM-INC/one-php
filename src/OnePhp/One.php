<?php

namespace OnePhp;

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;

class One {

    /**
     * @var Serializer
     */
    private $serializer;

    private function prepareSerializer() {
        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->addMetadataDir('./src/OnePhp/metadata', 'One');

        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
            $handler->registerSubscribingHandler(new \OnePhp\AnyTypeHandler());
        });

        $this->serializer = $serializerBuilder->build();
    }
}
