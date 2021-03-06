<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
use Tmdb\Laravel\Facades\Tmdb;
use Carbon\Carbon;
use App\Movie;
use Request;
use Input;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $moive = Movie::create($request->all());
        $query = Input::get('q');

        $find = $query
            ? Movie::where('title', 'LIKE', "%$query%")
            ->orwhere('director', 'LIKE', "%$query%")
            ->orwhere('writer_1', 'LIKE', "%$query%")
            ->orwhere('writer_2', 'LIKE', "%$query%")
            ->orwhere('actor_1', 'LIKE', "%$query%")
            ->orwhere('actor_2', 'LIKE', "%$query%")
            ->orwhere('actor_3', 'LIKE', "%$query%")
            ->orwhere('categories', 'LIKE', "%$query%")
            ->paginate(10)
            : Movie::paginate(10);

        return view('admin.movie.index')
            ->with(compact('find'));

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

        \Session::flash('flash_message', 'You just added a new movie!');
            return redirect('admin')->with([
                    'flash_message' => 'You just added a new movie!'
                ]);
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
    public function destroy($id,Request $request)
    {
        // $find = Movie::findOrFail($id);
         // $find->delete();

         // return redirect('/admin');
         
        flash()->overlay('Are you sure you want to delete this movie?', 'To delete, or not to delete...');

           // Movie::findOrFail($id)->delete();
           // return redirect('/');

        // Session::flash('flash_message', 'Task successfully deleted!');

        // return redirect()->route('admin.movie.destroy');
    }
}
