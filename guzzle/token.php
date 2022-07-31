<?php

require 'vendor/autoload.php';

$http = new GuzzleHttp\Client;

$response = $http->post('http://127.0.0.1:8000/oauth/token', [
    'form_params' => [
//        'grant_type' => 'password',
        'grant_type' => 'client_credentials',
        'client_id' => '3',
//        'client_secret' => 'SaAqLWUTHJdTKRASjHMaEcRKR2PmI13MZf2d76qv',
        'client_secret' => 'QDClYvIJBsW4F0MKCe1hqpbjZ6iM4PYKTnIlBwTI',
//        'username' => 'test@test.com',
//        'password' => '45104510',
        'scope' => '',
    ],
]);

var_dump(json_decode((string) $response->getBody(), true));
