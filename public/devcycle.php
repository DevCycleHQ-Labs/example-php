<?php

use DevCycle\DevCycleConfiguration;
use DevCycle\Api\DevCycleClient;
use DevCycle\Model\DevCycleOptions;
use DevCycle\Model\DevCycleUser;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Configure API key authorization: bearerAuth
$config = DevCycleConfiguration::getDefaultConfiguration()->setApiKey(
    "Authorization",
    $_ENV["DEVCYCLE_SERVER_SDK_KEY"]
);

$devcycle_client = new DevCycleClient(
    $config,
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
);

function get_devcycle_client() {
    global $devcycle_client;
    return $devcycle_client;
}

?>