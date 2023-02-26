<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        // Select * from  'movies'
        $movies = Movie::all();

        return view('home', compact('movies'));
    }
}
