<?php session_start();

function add_to_json(){
//Sanitisation et validation

$task = filter_input(INPUT_POST, 'task', FILTER_SANITIZE_STRING); 

$_SESSION['task'] = $task;
// echo "<pre>";
// echo $task;

$new_task = [
    "task" => $task,
    "done" => false
];

$task_json = json_encode($new_task, JSON_PRETTY_PRINT);

$json = 'tasks.json';

file_get_contents($json);
file_put_contents($json, $task_json . "\n");


$test = file($json);
foreach($test as $task){
    echo $task;
}

}

add_to_json();















?>