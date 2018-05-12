<?php

namespace App\Http\Controllers\Components;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Pricing extends Controller
{
	public function index()
	{
		return view("pages.pricing");
	}
}
