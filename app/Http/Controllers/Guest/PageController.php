<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{     
    // creo una funzione "pubblica"(index) in cui inserisco la logica
   public function index(){
    return view('homepage');
   }
}
