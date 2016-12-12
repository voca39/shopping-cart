<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

use Illuminate\Support\Facades\Input;

class ShoppingCartController extends Controller
{
    public function getShopAdmin() {
    	return view('shop.admin');
    }

    public function create()
	{

	}

    public function store(Request $request)
	{
		$user = new Product;
		$user->imagePath = Input::get("imagePath");
		$user->title = Input::get("title");
		$user->description = Input::get("description");
		$user->price = Input::get("price");
		$user->save();

		//return ("data form saved into database");
		return view('shop.admin');
		getShopAdmin();

	}
}
