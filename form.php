<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> To Do Liste </h1>
    <h2>Ajouter une tache</h2>
    <form method="post" action="index.php" class="input_form">
		<input type="text" name="task" class="task_input">
		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
	</form>
    <h2>Taches</h2>
    <form action="#" method="post">
<input type="checkbox" name="gender" value="task"></input>


</form>
</body>
</html>

<?php
//Sanitisation et validation
$options = array(
    'task' 	=> FILTER_SANITIZE_STRING,
    );
$result = filter_input_array(INPUT_POST, $options); 
echo $result['task'];
?>
