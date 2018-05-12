<?php

namespace App\Http\Controllers\Components;

use Illuminate\Http\Request;
use App\Http\Controllers\ComponentBase as Controller;

class Portfolio extends Controller
{
	protected $type='Portfolio';

    public function index()
    {
    	$data = (array)$this->get()->config;

    	$data['category'] = array_unique(array_column($data['items'], "category"));
    	return view("pages.portfolios",$data);
    }
    //
}
