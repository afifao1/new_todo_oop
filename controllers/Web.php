<?php
declare(strict_types=1);

class Web {
  private $todo;
  public function __construct(){
    $this->todo = new Todo();
  }
  public function getTasks(){
    return $this->todo->getTasks();
  }

  public function addTask(string $task){
    $result = $this->todo->addTask($task);

    $result ? 'Task added' : 'Something went wrong';
  }
}
