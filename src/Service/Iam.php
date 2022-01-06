<?php

namespace Byteplus\Service;

use Byteplus\Base\V4Curl;

class Iam extends V4Curl
{
    protected function getConfig(string $region = '')
    {
        return [
            'host' => 'https://open.byteplusapi.com',
            'config' => [
                'timeout' => 5.0,
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'v4_credentials' => [
                    'region' => 'ap-singapore-1',
                    'service' => 'iam',
                ],
            ],
        ];
    }

    public function listUsers(array $query = [])
    {        
        $response = $this->request('ListUsers', $query);
        return $response->getBody();
    }

    protected $apiList = [
        'CreateUser' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'CreateUser',
                    'Version' => '2018-01-01',
                ],
            ],
        ],
        'ListUsers' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'ListUsers',
                    'Version' => '2018-01-01',
                ],
            ],
        ],
    ];
}
