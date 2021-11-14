<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response =  $client->request('POST','/api/student',[
    'json' => [
        'nama' => $_POST['nama'],
        'alamat' => $_POST['alamat']
    ]
]);

$body = $response->getBody();
header('location:index.php')

?>