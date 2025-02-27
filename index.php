<?php
declare(strict_types=1);

require 'credentials.php';

spl_autoload_register(function ($class) {
    $directories = [
        __DIR__ . '/controllers/',
        __DIR__ . '/models/'
    ];

    foreach ($directories as $directory) {
        $path = $directory . $class . '.php';
        if (file_exists($path)) {
            require_once $path;
            return;
        }
    }
});

$update = file_get_contents('php://input');

if($update){
  (new Bot($token))->handle($update);

  return;
}

if(isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] == '/web2'){

  //require 'public/view.php';
  //return;
  $web2 = new Web2();

  print_r($web2->getTasks());
  return;
}

require './controllers/Web.php';
