<?php
function insert_task ($index, $task){
    echo   '<div class="task" draggable="true">
                <input class="toDo" type="checkbox" name="done[]" value="'.$index.'">
                <label for="done">' . $task . '</label>
            </div>';
};
function insert_task_done($index, $task){
    echo   '<div  class="task">
                <input type="checkbox" name="done[]" value="'.$index.'"checked disabled>
                <label for="done" style="text-decoration:line-through;color:grey;">' . $task . '</label>
            </div>';
};

$json_file = 'tasks.json';
$tasks = file_get_contents($json_file);
$tasks = json_decode($tasks);

if(isset($_POST['done'])){

    foreach($_POST['done'] as $done){
        // echo $done;
        foreach($tasks as $key => $value){
            // echo $key;
            if($key == $done){
                $value->done = true;
            };
        }
    }
    $tasks_to_json = json_encode($tasks, JSON_PRETTY_PRINT);
            
    file_put_contents($json_file, $tasks_to_json);
}

?>


<div class="content">

    <form method="post" id="checklist">
        <div class="insert">
            <h2> A faire </h2>
                <?php 
                    foreach($tasks as $key => $value){
                        if($value->done == false){
                            insert_task($key, $value->task);
                        };
                    }
                ?>
        </div>
    </form>
    <button class="arch" id="archiver">Archiver</button>

        
    <div class="archive">
    <h2> Archive </h2>
        <?php 
            foreach($tasks as $key => $value){
                if($value->done == true){
                    insert_task_done($key, $value->task);
                };
            }
        ?>
    </div>

</div>
