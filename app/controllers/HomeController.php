<?php 

namespace app\controllers;

use core;

class HomeController
{
	public function index()
	{
		return view('index');
	}

	public function about()
	{
		return view('about');
	}

	public function contact()
	{
		return view('contact');
	}

}