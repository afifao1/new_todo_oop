<?php
declare(strict_types=1);

require 'credentials.php';

$update = file_get_contents('php://input');

if($update){
require 'Bot.php';
  (new Bot($token))->handle($update);

  return;
}

require 'Web.php';
