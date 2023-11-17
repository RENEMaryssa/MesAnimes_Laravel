<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Anime extends Model
{
    use HasFactory;

    // Nom de la table dans la base de données
    protected $table = 'animes';

    // Champs modifiables
    protected $fillable = [
        'title', 'description', 'image', // Ajoute d'autres champs si nécessaire
    ];
}
