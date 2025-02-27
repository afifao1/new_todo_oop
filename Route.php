<?php
declare(strict_types=1);

require 'credentials.php';

class Route {
  public static function handleBot(): void {
    $update = file_get_contents('php://input');

    global $token;
    if($update){
        (new Bot($token))->handle($update);
    }
  }

  public static function handleWeb(): void {
    if(isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] == '/web2'){
      print_r((new Web2())->getTasks());
    }
  }
}
