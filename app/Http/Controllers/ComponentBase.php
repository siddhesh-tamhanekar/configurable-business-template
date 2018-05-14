<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComponentBase extends Controller
{


	public function store()
	{
		$request = request();
		$data['type'] = $this->type;

		$data['config'] = json_encode($request->formData);
		$this->validate($request,$this->validationRules);

		if($request->formData['id'])
			DB::table("components")->where("id",$request->formData['id'])->update($data);
		else
			DB::table("components")->insert($data);

 	}

	public function get()
	{
		$row = DB::table("components")->where("type",$this->type)->get()->first();
		if($row){
			$row->config = json_decode($row->config);
			$row->config->id = $row->id;
			return $row;

		}
	}

}
