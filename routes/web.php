<?php

Route::get("/",function(){
	return view("pages.home");
})->name("main");

Route::get("/home",function(){
	return redirect("/admin//");
});

Route::get("/automaticLogin",function(){
	$user = new App\User;
	$user = $user->find(1);
	Auth::login($user);

});


Route::get("blog/{post}",'BlogController@show')->name("blog.show");

Route::group([
			'prefix'=>"admin",
			'middleware'=>'auth'
		],function() {

	Route::get("/","AdminController@index")->name("home");

	Route::get("component-list","AdminController@componentList");

	Route::get("get/{type}","AdminController@getComponent");

	Route::post("store/{type}","AdminController@storeComponent");

	Route::post("upload","AdminController@uploadImage");

	Route::apiResources(["blog"=>"BlogController"]);

});

# we don't need all users bcoz we have only one user admin.
Route::get("/login","Auth\LoginController@showLoginForm")->name("login");
Route::post("/login","Auth\LoginController@login")->name("login");
Route::post("/logout","Auth\LoginController@logout")->name("logout");


