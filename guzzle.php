<?php
namespace Hello;
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Exception;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://www.w3schools.com/xml/note.xml',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);
$response = $client->request('GET', '');
var_dump($response['headers']);
