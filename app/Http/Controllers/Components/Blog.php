<?php

namespace App\Http\Controllers\Components;

use App\Http\Controllers\ComponentBase as Controller;
use App\Post;
use Illuminate\Http\Request;

class Blog extends Controller
{
	protected $type='Blog';

    public function index()
    {
    	$services = $this->get();
    	$services->config->posts = Post::all();
    	return view("pages.blog",(array)$services->config);
    }
}
