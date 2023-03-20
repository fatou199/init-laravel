<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // insérer toutes les valeurs dans toute les colonnes de la table
    protected $guarded = [''];
}
