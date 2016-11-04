<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '258123864:AAGf0QayDyTslQ1-V5d3hb49nD3y0C1b424';
$BOT_NAME = 'ibnSinaBot';
$hook_url = 'https://ibnsina.herokuapp.com/hook.php';
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    // Set webhook
    $result = $telegram->setWebHook($hook_url);

    // Uncomment to use certificate
    //$result = $telegram->setWebHook($hook_url, $path_certificate);

    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}
