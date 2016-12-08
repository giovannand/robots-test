<?php 

require 'vendor/autoload.php';

use Telegram\Bot\Api;

use Telegram\Bot\Keyboard\Keyboard;

use Telegram\Bot\Helpers\Emojify;

use Telegram\Bot\FileUpload\InputFile;

$dotenv = new Dotenv\Dotenv(__DIR__);

$dotenv->load();

