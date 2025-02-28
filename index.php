<?php
declare(strict_types=1);

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require 'autoload.php';
require 'routes.php';
