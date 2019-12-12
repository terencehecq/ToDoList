<?php
function insert_task ($index, $task){
    echo   '<div class="my_class">
                <input type="checkbox" name="done" value="task'.$index.'">
                <label for="done">' . $task . '</label>
            </div>';
};
function insert_task_done($index, $task){
    echo   '<div class="my_class">
                <input type="checkbox" name="done" value="task'.$index.'"checked disabled>
                <label for="done" style="text-decoration:line-through;color:grey;">' . $task . '</label>
            </div>';
};

$json_file = 'tasks.json';
$tasks = file_get_contents($json_file);
$tasks = json_decode($tasks);
?>


<div class="content">

  <h2 class= "todo"> To Do List </h2>

    <h2> A faire </h2>
    <div class="insert">
        <?php 
            foreach($tasks as $key => $value){
                if($value->done == false){
                    insert_task($key, $value->task);
                };
            }
        ?>
    </div>
    <button>Archiver</button>

    <h2> Archive </h2>
    <div class="archive">
        <?php 
            foreach($tasks as $key => $value){
                if($value->done == true){
                    insert_task_done($key, $value->task);
                };
            }
        ?>
    </div>

</div>
