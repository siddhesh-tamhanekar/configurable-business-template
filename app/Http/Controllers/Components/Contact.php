<?php

namespace App\Http\Controllers\Components;

use Illuminate\Http\Request;
use App\Http\Controllers\ComponentBase as Controller;

class Contact extends Controller
{
	protected $type='Contact';
	public function index()
	{
		$data = (array)$this->get()->config;
		// dd($data);
		return view("pages.contact",$data);
	}
}
