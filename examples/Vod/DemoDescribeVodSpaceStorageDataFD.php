// Code generated by protoc-gen-byteplus-sdk
// source: describeVodSpaceStorageDataFD
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Byteplus\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Byteplus\Service\Vod\Models\Request\DescribeVodSpaceStorageDataFDRequest();
$request->setSpaceList("your SpaceList");
$request->setStartTime("your StartTime");
$request->setEndTime("your EndTime");


$response = new Byteplus\Service\Vod\Models\Response\DescribeVodSpaceStorageDataFDResponse();
try {
    $response = $client->describeVodSpaceStorageDataFD($request);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response != null && $response->getResponseMetadata() != null && $response->getResponseMetadata()->getError() != null) {
    echo $response->getResponseMetadata()->getError()->serializeToJsonString(), "\n";
} else {
    echo $response->serializeToJsonString(), "\n";
}
