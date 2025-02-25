<?php
declare(strict_types=1);

require 'DB.php';

class Todo {
  private PDO $db;

  public function __construct(){
    $this->db = (new DB('localhost', 'todo', 'root', '1234'))->connect();
  }

  public function getTasks(){
    return $this->db->query("SELECT * FROM todos")->fetchAll();
  }
}
