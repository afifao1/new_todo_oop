<?php
declare(strict_types=1);

require 'credentials.php';
require 'controllers/Web2.php';

$update = file_get_contents('php://input');

if($update){
  require 'Bot.php';
  (new Bot($token))->handle($update);

  return;
}

if(isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] == '/web2'){

  require 'public/view.php';
  return;
  $web2 = new Web2();

  print_r($web2->getTasks());
  return;
}

require './controllers/Web.php';
