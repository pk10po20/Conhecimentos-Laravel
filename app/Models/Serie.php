<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = ['nome'];
    // O atributo $fillable é um array que contém os campos que podem ser preenchidos em massa.
    // Isso ajuda a proteger contra a atribuição em massa (mass assignment).
}
