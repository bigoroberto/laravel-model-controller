<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $movies1 = Movie::where('title','all')->orderBy('title','desc')->get();
        dump($movies1);
        //dd($movies);
        //dump($movies);

        $data = [
            'movies' => $movies
        ];
        dump($data);
        return view('home', $data);
    }
}
