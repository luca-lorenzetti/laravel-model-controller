<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function list(){
        $moviesList = Movie::all();

        return view('lista',['list' => $moviesList]);
    }
}
