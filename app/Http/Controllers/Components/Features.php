<?php

namespace App\Http\Controllers\Components;

use Illuminate\Http\Request;
use App\Http\Controllers\ComponentBase as Controller;

class Features extends Controller
{
	protected $type='Features';

    public function index()
    {
    	$features = $this->get();
    	//dd($features);
    	return view("pages.features",(array)$features->config);
    }
}
