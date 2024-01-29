<?php
require_once(__DIR__ . '/../vendor/autoload.php');
include 'devcycle.php';

use DevCycle\Model\DevCycleUser;

$devcycle_client = get_devcycle_client();
$user_data = new DevCycleUser(array(
    "user_id"=>"my-user"
));

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="/images/favicon.svg">
    <link rel="stylesheet" href="/styles/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevCycle PHP Example</title>
  </head>

  <body>
    <div class="App">
      <div class="App-header">
        <p>Demo Application</p>
        <img
          height="46"
          src="/images/devcycle-togglebot-full-colour.svg"
          alt="DevCycle"
        />
      </div>
      
      <div class="App-wrapper">
        <?php include('togglebot.php'); ?>
        <?php include('description.php'); ?>
      </div>

      <p>Reload the page to view changes.</p>
  
      <a
        class="App-link"
        href="https://docs.devcycle.com/sdk/server-side-sdks/php/"
        target="_blank"
        rel="noopener noreferrer"
      >
        DevCycle PHP SDK Docs
      </a>
    </div>
  </body>
</html>
