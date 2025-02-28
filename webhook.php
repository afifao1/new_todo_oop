<?php
declare(strict_types=1);

require 'vendor/autoload.php';
require 'autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

echo (new Bot($_ENV['TOKEN']))->setWebhook($argv[1]);
