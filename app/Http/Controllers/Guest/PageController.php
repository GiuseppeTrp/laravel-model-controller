<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{     
    // creo una funzione "pubblica"(index) in cui inserisco la logica
   public function index(){
    return view('homepage');
   }




   public function showMovie() {
    
    $movies = Movie::all();
    return view('film',compact('movies') );
}
}
