<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() {

        //SELECT * FROM `movies`
        $movies = Movie::all();
        //dump($movies);

        /* $movies = [
            "movies" => $movies
        ] */


        return view('home', compact('movies'));
    }
}
