<?php
$features = $devcycle_client->allFeatures($user_data);
$variation_name = $features["hello-togglebot"]
    ? $features["hello-togglebot"]["variationName"]
    : "Default";

$speed = $devcycle_client->variableValue($user_data, "togglebot-speed", "off");
$wink = $devcycle_client->variableValue($user_data, "togglebot-wink", false);

switch ($speed) {
    case 'slow':
        $message = 'Awesome, look at you go!';
        break;
    case 'fast':
        $message = 'This is fun!';
        break;
    case 'off-axis':
        $message = '...I\'m gonna be sick...';
        break;
    case 'surprise':
        $message = 'What the unicorn?';
        break;
    default:
        $message = 'Hello! Nice to meet you.';
        break;
}

$togglebot_src = $wink ? '/images/togglebot-wink.png' : '/images/togglebot.png'

?>

<div class="App-content">
    <div class="ToggleBot-message">
        "<?= $message ?>"
    </div>
    <img
        src="<?= $togglebot_src ?>"
        class="ToggleBot-logo spin-<?= $speed ?>"
        alt="togglebot"
    />
    <div class="ToggleBot-variation">
        Serving Variation: <b>"<?= $variation_name ?>"</b>
    </div>
</div>