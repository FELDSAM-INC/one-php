<?php

use One\One;

require __DIR__ . '/vendor/autoload.php';

// do request
$client = new One('http://192.168.44.23:2633/RPC2', 'authstring');
$response = $client->vmpoolInfoextended(-1, -1, -1, -1, '');

var_dump($response->get('VM.33')->get('NAME'));
