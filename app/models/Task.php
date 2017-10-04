<?php 

namespace app\models;

use core\App;

class Task
{
	static $table = 'tasks';
	public static function all()
	{
		return App::get('database')->selectAll(Task::$table);
	}

	public static function insert($name)
	{
		return App::get('database')->insert(
			Task::$table,
			[
			'name' => $name
			]);
	}

	public static function delete($id)
	{
		return App::get('database')->delete(
			Task::$table, $id		
			);
	}

	public static function allById($id)
	{
		return App::get('database')->selectById(
			Task::$table, $id
			);
	}

	public static function updateById($parameter, $id)
	{
		App::get('database')->update(
			Task::$table,
			[
			'name' => $parameter
			],
			$id
			);
	}
}