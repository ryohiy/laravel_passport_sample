<?php

require 'vendor/autoload.php';

$http = new GuzzleHttp\Client;

$response = $http->post('http://127.0.0.1:8000/oauth/token', [
    'form_params' => [
        'grant_type' => 'password',
        'client_id' => '2',
        'client_secret' => 'SaAqLWUTHJdTKRASjHMaEcRKR2PmI13MZf2d76qv',
        'username' => 'test@test.com',
        'password' => '45104510',
        'scope' => '',
    ],
]);

var_dump(json_decode((string) $response->getBody(), true));
