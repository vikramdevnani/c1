<?php namespace App\Controllers;

use App\Models\Product;
class Home extends BaseController
{
	public function index()
	{
		return view('welcome');
	}

	//--------------------------------------------------------------------

}
