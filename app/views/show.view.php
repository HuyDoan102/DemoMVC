<?php require "app/views/partials/header.php" ?>

<h2>Task #<?= $_GET['id'] ?></h2>

<form method="POST" action="/task/edit">
	<input type="text" name="id" value="<?= $task->id ?>" hidden>
	<input type="text" name="update" value="<?= $task->name ?>">
	<button type="submit">submit</button>
</form>


<?php require "app/views/partials/footer.php" ?>

