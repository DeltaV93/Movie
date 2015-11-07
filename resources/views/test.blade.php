<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    public function index()
    {

    	// CHECK TO SEE IF THERE IS A BETTER WAY TO DO PAGINATION IN 5.1
    	$movie = Movie::where('release_date', '<=', Carbon::now())
    		->orderBy('release_date','desc')
    		->paginate(config('movie.posts_per_page'));
    	return view('movie.index', compact('movies'));

        $title = Movie::where('title')

    };

    public function showPost($slug)
    {
    	$post = Post::whereSlug($slug)->firstOrFail();

    	return view('blog.post')->withPost($post);

    }
}
