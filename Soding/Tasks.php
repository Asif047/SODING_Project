<?php

require 'Controller/TasksController.php';
$tasksController = new TasksController();

if(isset($_POST['types']))
{
    
    $tasksTables = $tasksController->CreateTasksTables($_POST['types']);
}
else 
{
    
    $tasksTables = $tasksController->CreateTasksTables('%');
}


$title = 'Task overview';
$content = $tasksController->CreateTasksDropdownList(). $tasksTables;

include 'Tasksinfo.php';
?>
