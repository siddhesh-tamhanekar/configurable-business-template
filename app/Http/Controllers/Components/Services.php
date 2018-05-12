<?php

namespace App\Http\Controllers\Components;

use Illuminate\Http\Request;
use App\Http\Controllers\ComponentBase as Controller;

class Services extends Controller
{
	protected $type='Services';

    public function index()
    {

    	$services = $this->get();
    	return view("pages.services",(array)$services->config);
    }
}
