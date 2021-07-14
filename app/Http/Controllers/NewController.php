<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class NewController extends Controller
{
    public function news(){

        $movies = Movie::where('vote', '<', '8')
                        ->orderBy('title', 'ASC')
                        ->get();
        //dump($movies);


        return view('news', compact('movies'));
    }
}
