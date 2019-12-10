<?php

function add_to_json(){

    $json_file = 'tasks.json';

    //Sanitisation et validation

    if(!empty($_POST['task'])){
        $task = filter_input(INPUT_POST, 'task', FILTER_SANITIZE_STRING); 

        $new_task = [];
        $new_task['task'] = $task;
        $new_task['done'] = false;

        $tasks = file_get_contents($json_file);
        $tasks = json_decode($tasks);

        
        $tasks[] = $new_task;
        
        $tasks_to_json = json_encode($tasks, JSON_PRETTY_PRINT);
        
        file_put_contents($json_file, $tasks_to_json);

        echo '<pre>';
        print_r($tasks);
        echo '</pre>';

    };

    unset($_POST['task']);

}


// function display_task(){
//     $tasks = file_get_contents($json_file);
//     $tasks = json_decode($tasks);
//     foreach ($tasks as $key => $value) {
//         // if ($key["done"] == false) {
//             echo '<div>
//                     <input type="checkbox" id="task' . $key . '" name="task">
//                     <label for="task">' . $value["task"] . '</label>
//                 </div>';
//         }
//     //   }
// }