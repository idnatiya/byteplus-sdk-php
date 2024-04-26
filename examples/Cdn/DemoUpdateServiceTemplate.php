<?php

use Byteplus\Service\Cdn;

require('../../vendor/autoload.php');
require_once "init.php";

$client = Cdn::getInstance();

$config = new Config();
$client->setAccessKey($config->ak);
$client->setSecretKey($config->sk);

$body = [
    "Title" => "example",
    "Message" => "example",
    "Project" => "default",
    "OriginProtocol" => "http",
    "OriginHost" => "",
    "Origin" => [
        [
            "OriginAction" => [
                "OriginLines" => [
                    [
                        "Address" => "example.com",
                        "HttpPort" => "80",
                        "HttpsPort" => "443",
                        "InstanceType" => "domain",
                        "OriginHost" => "",
                        "OriginType" => "primary",
                        "Weight" => "1"
                    ]
                ]
            ]
        ]
    ],
    "TemplateId" => "tpl-example"
];

$response = $client->updateCipherTemplate($body);
var_dump($response);
