<?php

namespace OnePhp;

use JMS\Serializer\XmlSerializationVisitor;
use JMS\Serializer\XmlDeserializationVisitor;

use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\VisitorInterface;
use JMS\Serializer\Context;

class AnyTypeHandler implements SubscribingHandlerInterface
{
    public static function getSubscribingMethods()
    {
        return array(
            array(
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => 'OnePhp\\AnyType',
                'method' => 'deserializeAnyType'
            ),
            array(
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'xml',
                'type' => 'OnePhp\\AnyType',
                'method' => 'serializeAnyType'
            )
        );
    }

    public function serializeAnyType(XmlSerializationVisitor $visitor, $data, array $type, Context $context)
    {
        // serialize your object here
    }

    public function deserializeAnyType(XmlDeserializationVisitor $visitor, $data, array $type)
    {
        // deserialize your object here
        return new AnyType($this->simpleXmlToArray($data));
    }

    private function simpleXmlToArray($xmlObject)
    {
        $array = [];
        foreach ($xmlObject->children() as $node) {
            // check if there are children
            if($node->count() > 0) {
                $array[$node->getName()] = $this->simpleXmlToArray($node);
                continue;
            }

            $array[$node->getName()] = is_array($node) ? simplexml_to_array($node) : (string) $node;
        }

        return $array;
    }
}
