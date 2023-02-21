<?php

namespace One;

use PhpXmlRpc\Client;
use PhpXmlRpc\Request;
use PhpXmlRpc\Value;

/**
 * Class One
 * @package One
 */
class OneBase {

    /**
     * @var Client
     */
    private $client;

    /**
     * @var Client
     */
    private $clientVnctoken;

    /**
     * @var string
     */
    private $authString;

    /**
     * @var \string[][]
     */
    private static $errorCodes = [
        256 => [
            'Authentication',
            'User could not be authenticated.'
        ],
        512 => [
            'Authorization',
            'User is not authorized to perform the requested action.'
        ],
        1024 => [
            'NotFound',
            'The requested resource does not exist.'
        ],
        2048 => [
            'WrongState',
            'Wrong state to perform action.'
        ],
        4096 => [
            'WrongParameters',
            'Wrong parameters, e.g. param should be -1 or -2, but -3 was received.'
        ],
        8192 => [
            'InternalError',
            'Internal error, e.g. the resource could not be loaded from the DB.'
        ],
        16384 => [
            'CannotAllocated',
            'The resource cannot be allocated.'
        ],
        32768 => [
            'ResourceLocked',
            'The resource is locked.'
        ]
    ];

    private static $xmlrpcTypes = [
        "boolean" => "boolean",
        "integer" => "int",
        "double" => "double",
        "string" => "string",
        "array" => "array",
        "object" => "struct",
        "NULL" => "null",
    ];

    /**
     * OneBase constructor.
     * @param $url
     * @param $authString
     * @param  false  $vnctoken enable support for vnctoken service
     */
    public function __construct($url, $authString, $vnctoken = false) {
        $this->client = new Client($url);
        $this->authString = $authString;

        if ($vnctoken) $this->clientVnctoken = new Client($url.'/vnctoken');
    }

    public function __call($name, $args) {
        $name = 'one.'.$this->snakeCaseToDot($name);
        array_unshift($args, $name);
        return call_user_func_array([$this, 'makeCall'], $args);
    }

    /**
     * @return \One\Resource
     */
    protected function makeCall() {
        $args = func_get_args();
        $method = array_shift($args);
        $params = [new Value($this->authString)];

        foreach ($args as $arg) {
            $type = gettype($arg);

            if ($type === 'array') {
                $xmlrpcTypes = self::$xmlrpcTypes;
                array_walk($arg, function (&$value, $key) use ($xmlrpcTypes) {
                    $type = gettype($value);
                    $value = new Value($value, $xmlrpcTypes[$type]);
                });
            }

            $params[] = new Value($arg, self::$xmlrpcTypes[$type]);
        }

        if(in_array($method, ['one.vm.vnctokenonly', 'one.vm.vnctoken', 'one.vm.vnc'])) {
            $response = $this->clientVnctoken->send(new Request($method, $params));
        } else {
            $response = $this->client->send(new Request($method, $params));
        }

        if(!$response->value()) {
            static::raiseException($response->faultCode(), $response->faultString());
        }

        $success = (bool) $response->value()[0]->scalarval();
        $body = (string) $response->value()[1]->scalarval();
        $code = (int) $response->value()[2]->scalarval();

        if($success !== true) {
            static::raiseException($code, $body);
        }

        // parse xml with proper error handling
        libxml_use_internal_errors(true);

        $xml = simplexml_load_string($body);

        // response is not a XML, it can be some sort of ID
        if (!$xml) {
            return new Resource(['ID' => $body]);
        }

        return new Resource(self::simplexmlToArray($xml));
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
     * @param $xml
     * @return array
     * https://hotexamples.com/examples/-/-/simplexml_to_array/php-simplexml_to_array-function-examples.html
     */
    public static function simplexmlToArray($xml): Array
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
            if (!array_key_exists($k, $ar)) {
                $ar[$k] = $child;
            } else {
                if (!is_string($ar[$k]) && isset($ar[$k][0])) {
                    $ar[$k][] = $child;
                } else {
                    $ar[$k] = array($ar[$k]);
                    $ar[$k][] = $child;
                }
            }
        }
        return $ar;
    }

    /**
     * @param  int  $code
     * @param  string  $errorMsg
     * @throws \RuntimeException
     * @throws Exception\Authentication
     * @throws Exception\Authorization
     * @throws Exception\NotFound
     * @throws Exception\WrongState
     * @throws Exception\WrongParameters
     * @throws Exception\InternalError
     * @throws Exception\CannotAllocated
     * @throws Exception\ResourceLocked
     */
    private static function raiseException(int $code, string $errorMsg): void {
        if(!array_key_exists($code, static::$errorCodes)) {
            throw new \RuntimeException(sprintf(
                'XML-RPC API Call ends with error "%s" and code "%s"',
                $errorMsg,
                $code
            ));
        }

        $error = static::$errorCodes[$code];

        $exception = "One\\Exception\\".$error[0];

        throw new $exception($error[1].' '.$errorMsg);
    }
}
