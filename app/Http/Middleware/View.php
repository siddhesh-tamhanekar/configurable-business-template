<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class View
{
    public function handle($request, Closure $next, $guard = null)
    {
    	$config= (array) app("App\Http\Controllers\Components\Menu")->get()->config->components;
    	$settings= (array) app("App\Http\Controllers\Components\Settings")->get()->config;

    	$sort = array_column($config, "sort");
    	array_multisort($config,$sort);
		//dd($settings);
    	view()->share("menu",$config);
    	view()->share("settings",$settings);
    	view()->share(config("site"));
        return $next($request);
    }

}
