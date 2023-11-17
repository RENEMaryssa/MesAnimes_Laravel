<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime; 

class AnimeController extends Controller {
    public function index()
    {
        $animes = Anime::take(7)->get(); // Récupérez les 7 premiers animés depuis la base de données
        return view('welcome', ['animes' => $animes]);
    }

}  

