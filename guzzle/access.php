<?php

require 'vendor/autoload.php';

$http = new GuzzleHttp\Client;

$accessToken = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdhODI0ZGEyNjcwMTQzYWNmNGEzMTBjZTY0MzI3ZDZhNmJhNjZmOTYzY2M3ZTI0MTYzMTdlMmYzZmJmYzY0OWE3YjU4NGQyODVjYThhNDdlIn0.eyJhdWQiOiIzIiwianRpIjoiN2E4MjRkYTI2NzAxNDNhY2Y0YTMxMGNlNjQzMjdkNmE2YmE2NmY5NjNjYzdlMjQxNjMxN2UyZjNmYmZjNjQ5YTdiNTg0ZDI4NWNhOGE0N2UiLCJpYXQiOjE2NTkyNzU5NjAsIm5iZiI6MTY1OTI3NTk2MCwiZXhwIjoxNjkwODExOTYwLCJzdWIiOiIiLCJzY29wZXMiOltdfQ.xfImMm93NyqFLP86yYAn_SRg5N7dKHuX-1HbE6sz_fQ-qYfbHKbThB6cuaQzwPJp7paEkZixJScUVMQJji6I9EEINht1UrCkF5tSpi5-9ACTqGdD8zZkrdoJ_Wi4zwbTIydeWuINE_2z6qlfO32QGxfrWM9WR4m5TAwycw3ielitSOCnlDVObSwuwxhPcSkvBThvWzETl0xsbfumqM_4766iUhJL8aMV6E6aM68BIppxgkTNyaVe5K6_-jjPh2E1dCFE7IsVij1YNl8Ck1G3QtWl7P-UfyCG4OEhaoZ7L-l0mImJhvNLoybfEUgua_61eiCKO0MFwxDAx2tbVi-CNBQsxnOeUirFNT16gNeW9Cwg0d-sn-fblyW3KbswCyAt4YABYaHxZnzdv0aS2OGbbkPYN4bl8atvNi_P5PFx4ConWIOjko2u7pCPLM1OBkaxqDwrUWgCyi-2PwKIz8K4aux0X4F_GYw2wdwTzLGIwfN9J7oj4PzExweI_bKbZzd0Vumx4s6NXf-Vv1S6BYppZIy_dAkW4Y3MOdudrFatxoaSMbfZNqKMQlw0Qby2bDmiV-E3CBrHrMEOcZrm6Ssj3_l6LIyX_uNOBwjEKsqYy1xIOmvG-01pwGfJ-phIg6HBe-mcj2DQAX4mrefXSBh1u9RCYcnqONtJReo9tB2x1Q0";

$response = $http->request('GET', 'http://127.0.0.1:8000/api/ClientC', [
    'headers' => [
        'Accept' => 'application/json',
        'Authorization' => 'Bearer ' . $accessToken,
    ],
]);

var_dump(json_decode((string)$response->getBody(), true));
