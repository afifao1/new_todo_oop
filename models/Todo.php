<?php
declare(strict_types=1);

require 'DB.php';

class Todo {
  private PDO $db;

  public function __construct(){
    $this->db = (new DB(
      host    : $_ENV['HOST'],
      database: $_ENV['DB_NAME'],
      username: $_ENV['DB_USER'],
      password: $_ENV['DB_PASSWORD']))->connect();
  }

  public function getTasks(): array {
    return $this->db->query("SELECT * FROM todos")->fetchAll();
  }

  public function addTask(string $task): bool {
    $stmt = $this->db->prepare("INSERT INTO todos (task) VALUES (:task)");
    
    return $stmt->execute([':task' => $task]);
  }
}
