<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function viewsIndexBlade(){

        // richiesta query per avere tutti i film
        $movies = Movie::all();

        $data = [
            "movies" => $movies
        ];

        // ritorna l'?array $data alla views index.blade che si trova in movies
        return view("movies.index", $data);
    }
}
