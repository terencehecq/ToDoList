<?php include('form.php')?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> To Do List </h1>
    <h2>Ajouter une tache</h2>
    <form method="post" class="input_form">
		<input type="text" name="task" class="task_input">
		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
	</form>
    <h2>Taches</h2>
    <?php if(!empty($_POST['task'])){add_to_json();}; ?>
    <form action="content.php" method="post">

    <input type="submit" name="save_changes" value="save"></input>


</form>
</body>
</html>