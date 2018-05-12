<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class BlogController extends Controller
{

	public function index(){
		return Post::all("id","slug","title","status");
	}

	public function show($slug)
	{
		return Post::where("slug",$slug)->get()->first();

	}

	public function store(Request $request)
	{
		$post  = new Post;
		$post->title = $request->title;
		$post->status = $request->status;
		$post->body = $request->body;
		$post->thumbnail = $request->thumbnail;
		$post->slug = $request->slug;
		$post->save();
	}

	public function update( $post)
	{
		$post = Post::find($post);
		$post->title = $request->title;
		$post->status = $request->status;
		$post->body = $request->body;
		$post->thumbnail = $request->thumbnail;
		$post->slug = $request->slug;
		$post->save();

	}

	public function destroy($post)
	{
		$post = Post::find($post);
		$post->delete();
	}
}