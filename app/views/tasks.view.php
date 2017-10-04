<?php require "app/views/partials/header.php" ?>
<h1>All user</h1>


<?php foreach($tasks as $task): ?>
<form method="POST" action="/task/delete">
	<ul>
		
		<input type="text" name="id" value="<?= $task->id ?>">
		<a href="/task/show?id=<?= $task->id ?>"><?= $task->name; ?></a>
		<button type="submit">&#10005;</button>
		</ul>
	</form>
<?php endforeach; ?>

<h1>Submit your Name</h1>

<form method="POST" action="/tasks/insert">
	<input type="text" name="name">
	<button type="submit">Submit</button>
</form>

<?php require "app/views/partials/footer.php" ?>