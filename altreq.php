<?php
require 'vendor/autoload.php';

$headers = array('Accept' => 'application/xml');
$request = Requests::get('https://www.w3schools.com/xml/note.xml', $headers, []);

var_dump($request->status_code);
// int(200)

var_dump($request->headers['content-type']);