<?php

$json_file = 'tasks.json';

$tasks = file_get_contents($json_file);
$tasks = json_decode($tasks);

foreach($tasks as $task){
    echo '<p>' . $task['task'] . '</p>';
}