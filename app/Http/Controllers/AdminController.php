<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class AdminController extends Controller
{

	public function index(){
		return view("admin.dashboard");
	}

	public function componentList()
	{
		return config("site")['components'];

	}

	public function getComponent($type)
	{
		try {
			return Response::json(app("App\Http\Controllers\Components\\$type")->get());
		}catch(Exception $e){
			return abort(404);
		}
	}

	public function storeComponent($type)
	{
		try {
			return app("App\Http\Controllers\Components\\$type")->store(request());
		} catch(Exception $e) {
			return abort(404);
		}
	}

	public function uploadImage()
	{
		if(request()->hasFile('file') and request()->file->isValid()) {

			$path = asset(request()->file->store("public/images"));

			# change path public folder to storage folder.
			return response()->json(["image" => str_replace("public", "storage", $path)]);
		}

	}
}