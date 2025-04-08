<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Series extends Model
{
    protected $fillable = ['nome'];
    // O atributo $fillable é um array que contém os campos que podem ser preenchidos em massa.
    // Isso ajuda a proteger contra a atribuição em massa (mass assignment).

    public function season()
    {
        return $this->hasMany(Season::class, 'series_id');
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder)
        {
            $queryBuilder->orderBy('nome', 'asc');
        });
    }
}

