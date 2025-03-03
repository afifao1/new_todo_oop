<?php
require_once '../controllers/Web2.php';

$todo = new Web();

if(isset($_POST['task'])) {
  echo $todo->addTask($_POST['task']); // <-- Echo qo‘shildi
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./public/style.css">
        <title>ToDo App</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                <h1>ToDo App</h1>
                <form action="" method="post"> <!-- action="" bo‘lishi kerak -->
                    <input type="text" name="task" id="" placeholder="Task qo'shing">
                    <button class="" type="submit">Add task</button>
                </form>
                <ul class="list">
                    <?php
                        $tasks = $todo->getTasks();
                        
                        if(count($tasks) > 0) {
                            foreach($tasks as $task) {
                                $status = $task['status'] ? '✅' :'🟢';
                                echo "
                                <li>
                                    <a class='link' href='?id={$task['id']}'>$status {$task['task']}</a>
                                    <a href='?delete={$task['id']}'>Delete</a>
                                </li>";
                            }
                        } else {
                            echo "<h1>Please add a task.</h1>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </body>
</html>
