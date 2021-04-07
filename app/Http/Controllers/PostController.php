<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function index()
	{
		$posts = Post::all();
		return view( 'post', compact( 'posts' ) );
	}

	public function create()
	{
		$post = new  Post();
		$post->title = 'This is 5th post';
		$post->save();

		$categories = [2, 3, 4]; // Insert this categories with this post
		$post->categories()->sync($categories);

		return redirect()->route('posts.index');
	}
}
