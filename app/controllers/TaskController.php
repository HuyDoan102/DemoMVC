<?php 

namespace app\controllers;

use app\models\Task;
use core\App;

class TaskController
{
	public function index()
	{
		$tasks = Task::all();
		return view('tasks', compact("tasks"));
	}

	public static function store()
	{
		echo $_POST['name'];
		Task::insert($_POST['name']);
		return redirect('tasks');
	}

	public static function delete()
	{
		Task::delete($_POST['id']);
		return redirect('tasks');
	}

	public static function show()
	{
		$task = Task::allById($_GET['id'])[0];
		return view("show", compact("task"));
	}

	public static function edit()
	{
		Task::updateById($_POST['update'], $_POST['id']);
		return redirect('tasks');
	}
}

