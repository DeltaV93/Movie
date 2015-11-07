<?php

namespace App\Http\Controllers;

use App\Movie;
use Carbon\Carbon;

class MovieController extends Controller
{
    public function index()
    {

    	// CHECK TO SEE IF THERE IS A BETTER WAY TO DO PAGINATION IN 5.1
    	$movies = Movie::where('release_date', '<=', Carbon::now())
    		->orderBy('release_date','desc')
    		->paginate(config('movies/movie_per_page'));


        return view('movies.home' , compact('movies'));


    }

    public function showMovie($slug)
    {
    	$movie = Movie::whereSlug($slug)->firstOrFail();

    	return view('movies/movie')->withMovie($movie);

    }
  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
