<?php

namespace App\Controllers;

use App\Models\Test;

class Home extends BaseController
{
	public function index()
	{
		$users = Test::all();
    dd($users);

		return view('welcome_message');
	}
}
