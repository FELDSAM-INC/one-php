<?php

require __DIR__ . '/vendor/autoload.php';

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Handler\HandlerRegistryInterface;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;

$serializerBuilder = SerializerBuilder::create();
$serializerBuilder->addMetadataDir('./src/OnePhp/metadata', 'One');
$serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
    $serializerBuilder->addDefaultHandlers();
    $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
    $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
    $handler->registerSubscribingHandler(new \OnePhp\AnyTypeHandler());
});

$serializer = $serializerBuilder->build();

//$serializer = SerializerBuilder::create()->addMetadataDir('./src/OnePhp/metadata', 'OnePhp\One')->build();

// do request on API
$curl = curl_init();

$requestBody = <<<'EOT'
<?xml version='1.0'?>
<methodCall>
    <methodName>one.userpool.info</methodName>
    <params>
        <param>
            <value>
                <string>authstring</string>
            </value>
        </param>
    </params>
</methodCall>
EOT;


curl_setopt_array($curl, array(
    CURLOPT_URL => "http://192.168.44.23:2633/RPC2",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>$requestBody,
    CURLOPT_HTTPHEADER => array(
        "Content-Type: text/xml"
    ),
));

$response = curl_exec($curl);

curl_close($curl);
$response = simplexml_load_string($response);
$success = (bool) $response->params->param[0]->value->array->data->value[0]->boolean;
$result = (string) $response->params->param[0]->value->array->data->value[1]->string;

if($success !== true) {
    die('Error: '.$result);
}

$result = str_replace('<USER_POOL>', "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<USER_POOL xmlns=\"http://opennebula.org/XMLSchema\">", $result);

//echo $result;

// deserialize the XML into Demo\MyObject object
$object = $serializer->deserialize($result, 'One\UserPool', 'xml');

foreach ($object->getUser() as $user) {
    if ($user->getId() == 2) {
        print_r($user);
    }
}
