<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Movie;
use Carbon\Carbon;

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
            ->orderBy('release_date','desc')
            ->paginate(config('movies/movie_per_page'));

        return view('admin.movie.index' , compact('movies'));
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
        return view('admin.newMovie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $input = Request::all();
        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();

        $movies = new Movie;
        $movies->title     = $input['title'];
        $movies->image     = $input['image'];
        $movies->synopsis     = $input['synopsis'];
        $movies->release_date     = $input['release_date'];
        $movies->director     = $input['director'];
        $movies->writer_1     = $input['writer_1'];
        $movies->actor_1     = $input['actor'];
        $movies->rating     = $input['rating'];
        $movies->categories     = $input['categories'];
        $movies->save();

            // Session::flash('message', 'You added a new movie!');
            // return Redirect::to('admin');
            
        return redirect('admin');

        // return $input;
        // $rules = array(
        //     'title' => 'required',
        //     'image' => 'required',
        //     'synopsis' => 'required',
        //     'release_date' => 'required',
        //     'director' => 'required',
        //     'writer' => 'required',
        //     'actor' => 'required',
        //     'rating' => 'required',
        //     'categories' => 'required'
        // );
        // $validator = Validator::make(Input::all(), $rules);

        // if ($validatior->fails()) {
        //     return Redirect::to('admin/create')
        //         ->withErrors($validator);
        // } else {


        //     Session::flash('message', 'You added a new movie!');
        //     return Redirect::to('admin');
        // }
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
        //
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
