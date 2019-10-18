<?php

namespace Hello;
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Exception;

class XmlUriChecker
{
    function checkXMLType($r)
    {
        return substr(strtolower(trim($r)), 0, 8) === 'text/xml';
    }

    function getResourceStatus()
    {
        $client = new Client([
            // Base URI is used with relative requests
//            'base_uri' =>'https://pre-prod.boo.ua/upload/iblock/819/8193415a9dc98d89588bd30e9a46320a.jpg',
//        'base_uri' => 'https://jsonplaceholder.typicode.com/todos/1',
//            'base_uri' => 'http://localhost:8001',
//        'base_uri' => 'https://jira.beregit.com/secure/attachment/19552/LikeNew_08.10.19.xml',
//        'base_uri' => 'https://drive.google.com/file/d/1u-5GPsXl7zBiQvXTZTuFtnYUqsU8ifHs/view',
//        'base_uri' => 'https://www.w3schools.com/xml/note.xml',
        'base_uri' => 'http://www.chilkatsoft.com/xml-samples/bookstore.xml',
//            'base_uri' =>'http://producthelp.sdl.com/sdl%20trados%20studio/client_en/sample.xml',
            // You can set any number of default request options.
            'timeout' => 2.0,
        ]);

        $error = 'Error: uri doesn`t respond with 200OK';

        try {
            $response = $client->get('/',
                [
                    'headers' => [
                        'Accept' => 'application/xml'
                    ]
                ]);
        } catch (RequestException $e) {
//        return $e;
            return $error;
        }
//    return $response;

        if ($response->getStatusCode() !== 200) {
            return $error;
        }

        try {
            $contentType = array_key_exists("Content-Type", $response->getHeaders())
                ? $response->getHeaders()["Content-Type"][0]
                : $response->getHeaders()["Content-type"][0];
        } catch (Exception $e) {
            return 'Error: content type can`t be fetched';
        }
        echo "$contentType\n";
        return $this->checkXMLType($contentType) ? '' : 'Error: document has no good yml content type';
    }

}

$x = new XmlUriChecker();

$r = $x->getResourceStatus();
var_dump($r ? $r : 'uri has correct state');

