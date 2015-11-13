<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
use Tmdb\Laravel\Facades\Tmdb;
// use Illuminate\Http\Request;
// use App\Http\Requests;
use Carbon\Carbon;
use App\Movie;
use Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::where('release_date', '<=', Carbon::now())
            ->orderBy('id','asc')
            ->paginate(config('movies/movie_per_page'));

        $query = Request::get('q');
        return $query;
        return view('admin.movie.index')
        
                ->with(compact('query'))
                ->with(compact('movies'));
        // return $query;
        // 
        // $movies = Movie::all();

        // return view('admin.movie.index')
        //         ->withNewMovie($movie);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date_created = Carbon::now();

        return view('admin.newMovie.create',compact('date_created'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {

        
        Movie::create($request->all());

            return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies = Movie::findOrFail($id);
        return view('admin.movie.edit', compact('movies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, MovieRequest $request)
    {
        $movies = Movie::findOrFail($id);

        $movies->update($request->all());


        return redirect('admin');
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
