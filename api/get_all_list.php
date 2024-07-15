<?php


header('content-type: application/json');
$todoList = file_get_contents('../db/todo.json');
echo $todoList;



?>
