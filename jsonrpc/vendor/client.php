<?php

require_once('autoload.php');

use JsonRPC\Client;

$client = new Client('http://aedi.ufpa.br/~williamcss/jsonrpc/vendor/server.php');
$result = $client->execute('addition', [3, 5]);

echo $result;
