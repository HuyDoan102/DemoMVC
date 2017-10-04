<?php require "app/views/partials/header.php" ?>

<h2>Task #<?= $_GET['id'] ?></h2>

<?php var_dump($task); ?>

<form method="POST" action="/task/edit">
	<input type="text" name="id" value="<?= $task->id ?>" disabled>
	<input type="text" name="update" value="<?= $task->name ?>">
	<button type="submit">submit</button>
</form>


<?php require "app/views/partials/footer.php" ?>

