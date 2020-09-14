<?php

require __DIR__ . '/vendor/autoload.php';


use PhpXmlRpc\Client;
use PhpXmlRpc\Request;
use PhpXmlRpc\Value;

// prepare serializer


// do request
$client = new Client('http://192.168.44.23:2633/RPC2');
$response = $client->send(new Request('one.userpool.info', array(new Value('authstring'))));

$success = (bool) $response->value()[0]->scalarval();
$result = (string) $response->value()[1]->scalarval();

if($success !== true) {
    die('Error: '.$result);
}

$result = str_replace('<USER_POOL>', "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<USER_POOL xmlns=\"http://opennebula.org/XMLSchema\">", $result);

//echo $result;

// deserialize the XML into object
$object = $serializer->deserialize($result, 'One\UserPool', 'xml');

foreach ($object->getUser() as $user) {
    if ($user->getId() == 2) {
        print_r($user);
    }
}
