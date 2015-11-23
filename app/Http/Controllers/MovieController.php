<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Movie;
use Request;
use Input;
class MovieController extends Controller
{
    public function index()
    {

    	// CHECK TO SEE IF THERE IS A BETTER WAY TO DO PAGINATION IN 5.1
    	// $movies = Movie::where('release_date', '<=', Carbon::now())
    	// 	->orderBy('release_date','desc')
    	// 	->paginate(3);

        $query = Input::get('q');
        // var_dump($query);
        $find = $query
            ? Movie::where('title', 'LIKE', "%$query%")
            ->orwhere('director', 'LIKE', "%$query%")
            ->orwhere('writer_1', 'LIKE', "%$query%")
            ->orwhere('writer_2', 'LIKE', "%$query%")
            ->orwhere('actor_1', 'LIKE', "%$query%")
            ->orwhere('actor_2', 'LIKE', "%$query%")
            ->orwhere('actor_3', 'LIKE', "%$query%")
            ->orwhere('categories', 'LIKE', "%$query%")
            ->simplePaginate(5)
            : Movie::simplePaginate(3);     
                 
        return view('movies.index')
            ->with(compact('movies'))
            ->with(compact('find'));


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
