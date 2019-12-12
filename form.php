<h2>Ajouter une tache</h2>
    <form method="post" class="input_form">
		<input type="text" name="task" class="task_input">
		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
	</form>


<?php

    $json_file = 'tasks.json';

    //Sanitization
    if(!empty($_POST['task'])){
        $task = filter_input(INPUT_POST, 'task', FILTER_SANITIZE_STRING); 

        
        $tasks = file_get_contents($json_file);
        $tasks = json_decode($tasks);
        
        $new_task = [];
        $new_task['task'] = $task;
        $new_task['done'] = false;
        
        if($tasks[count((array)$tasks)-1]->task !== $new_task['task']){
            $tasks[] = $new_task;
            
            $tasks_to_json = json_encode($tasks, JSON_PRETTY_PRINT);
            
            file_put_contents($json_file, $tasks_to_json);
        }

    };

    unset($_POST['task']);
