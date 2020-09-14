<?php

use OnePhp\One;

require __DIR__ . '/vendor/autoload.php';

// do request
$client = new One('http://192.168.44.23:2633/RPC2', 'authstring');
$response = $client->vmInfo(2040);
