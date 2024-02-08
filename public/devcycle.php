<?php


use DevCycle\Api\DevCycleClient;
use DevCycle\Model\DevCycleOptions;


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$options = new DevCycleOptions();

$devcycle_client = new DevCycleClient(
    sdkKey: $_ENV["DEVCYCLE_SERVER_SDK_KEY"],
    dvcOptions: $options
);


function get_devcycle_client()
{
    global $devcycle_client;
    return $devcycle_client;
}
