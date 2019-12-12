<?php
function insert_task ($index, $task){
    echo   '<div class="my_class">
                <input type="checkbox" name="done" value="task'.$index.'">
                <label for="done">' . $task . '</label>
            </div>';
};

$json_file = 'tasks.json';
$tasks = file_get_contents($json_file);
$tasks = json_decode($tasks);
?>


<div class="content">

  <h2 class= "todo"> To Do List </h2>

    <div class="toMake">
        <h2> A faire </h2>
        <div class="insert">
        <form method="post" id="toDo">
            <?php foreach($tasks as $key=>$value){
                if($value->done == false){
                    insert_task($key, $value->task);
                };
            }?>
        </form>
        </div>
    </div>

    <div class="archive">
    <h2> Archive </h2>
    </div>

</div>
