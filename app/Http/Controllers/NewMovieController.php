<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\MovieCreateRequest;
use App\NewMovie;
use Carbon\Carbon;


class NewMoiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newMovies = NewMovie::all();

        return view('admin.movie')
                ->withNewMovie($newMovies);
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
        $rules = array(
            'title' => 'required',
            'image' => 'required',
            'synopsis' => 'required',
            'release_date' => 'required',
            'director' => 'required',
            'writer' => 'required',
            'actor' => 'required',
            'rating' => 'required',
            'categories' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validatior->fails()) {
            return Redirect::to('admin/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $movies = new Movie;
            $movies
        }
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
