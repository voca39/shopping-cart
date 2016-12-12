<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\laravel;

use Illuminate\Support\Facades\Input;

class test extends Controller
{

	public function testing213()
	{
		return view('shop.admin');
	}

	public function create()
	{

	}

	public function store(Request $request)
	{
		$user = new Homestead;
		$user->name = Input::get("name");
		$user->name = Input::get("name");
		$user->name = Input::get("name");
		$user->name = Input::get("name");
		$user->save();

		return ("data form saved into database");

	}

}