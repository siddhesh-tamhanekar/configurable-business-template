<?php

namespace App\Http\Controllers\Components;

use Illuminate\Http\Request;
use App\Http\Controllers\ComponentBase as Controller;

class Testimonial extends Controller
{
	protected $type='Testimonial';

    public function index()
    {

    	$services = $this->get();
    	return view("pages.testimonial",(array)$services->config);
    }
}
