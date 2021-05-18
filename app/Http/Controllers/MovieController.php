<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    protected $validation = [];

    public function __construct()
    {
        $year = date("Y") + 1;

        $this->validation = [
            'titolo' => 'required|string|max:100',
            'trama' => 'required|string',
            'anno' => 'required|numeric|min:1900|max:'.$year,
            'cover_movie' => 'required|string',
        ];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies')); // ['movie' => $movie]
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        // $request->validate($this->validation);
        // $movieNew = Movie::create($data);
        // $movieNew->save();

        $request->validate($this->validation);

        $movieNew = Movie::create( $request->all() );

        $movieNew->save();
        
        return redirect()->route('movies.index')->with('message', 'Il film ' . $movieNew->titolo . ' è stato aggiunto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);

         return view('movies.show', ['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', ['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate($this->validation);

        $movie->update( $request->all() );

        // return redirect()->route('movies.index', $movie);

        return redirect()->route('movies.index')->with('message', 'Il film ' .$movie->titolo. ' è stato modificato');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
   
        $movie->delete();

        return redirect()->route('movies.index')->with('message', 'Il film è stato eliminato');
    }
}
