<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    //prendo tutti i movie.

    public function index() {
        $movies = Movie::all();

        dd($movies);

    }
}
