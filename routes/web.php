<?php

Route::get("/",function(){
	return view("pages.home");
});

Route::get("/upload",function(){
	return view("demo.upload");
});

Route::post("/upload",function(){
	dd(request());
});


Route::get("blog/{post}",'BlogController@show')->name("blog.show");

Route::group(['prefix'=>"admin"],function(){

	Route::get("/","AdminController@index");

	Route::get("component-list","AdminController@componentList");

	Route::get("get/{type}","AdminController@getComponent");

	Route::post("store/{type}","AdminController@storeComponent");

	Route::post("upload","AdminController@uploadImage");

	Route::apiResources(["blog"=>"BlogController"]);
});
