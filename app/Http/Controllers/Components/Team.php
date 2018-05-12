<?php

namespace App\Http\Controllers\Components;

use Illuminate\Http\Request;
use App\Http\Controllers\ComponentBase as Controller;

class Team extends Controller
{
	protected $type='Team';
    public function index()
    {
		$data = (array)$this->get()->config;
    	return view("pages.team",$data);
    }


}
