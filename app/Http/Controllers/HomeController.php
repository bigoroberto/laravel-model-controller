<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        //dd($movies);


        $data = [
            'movies' => $movies
        ];
        //dump($data);
        return view('home', $data);
    }
}
