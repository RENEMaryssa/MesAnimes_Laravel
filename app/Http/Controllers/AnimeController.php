<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime; 

class AnimeController extends Controller {
    public function index()
    {
        return view('welcome');
    }
    public function details()
    {
        return view('details');
    }
}  

