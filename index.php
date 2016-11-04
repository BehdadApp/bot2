<?php
//README
//This configuration file is intended to run the bot with the webhook method.
//Uncommented parameters must be filled
//Please notice that if you open this file with your browser you'll get the "Input is empty!" Exception.
//This is a normal behaviour because this address has to be reached only by Telegram server.

// Load composer
require __DIR__ . '/vendor/autoload.php';
use Longman\TelegramBot\Request;
use Longman\TelegramBot\Telegram;

$API_KEY = '258123864:AAGf0QayDyTslQ1-V5d3hb49nD3y0C1b424';
$BOT_NAME = 'ibnSinaBot';
//$commands_path = __DIR__ . '/Commands/';
//$mysql_credentials = [
//    'host'     => 'localhost',
//    'user'     => 'dbuser',
//    'password' => 'dbpass',
//    'database' => 'dbname',
//];

    // Create Telegram API object

$telegram = new Telegram($API_KEY, $BOT_NAME);
$response = $telegram->sendMessage([
  'chat_id' => 'CHAT_ID', 
  'text' => 'Hello World'
]);
 
