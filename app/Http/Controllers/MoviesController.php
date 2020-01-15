<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Movie;
use Validator;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::orderBy('created_at', 'asc')->get();
        return view('movies', [
            'movies' => $movies
    ]);
    }
}