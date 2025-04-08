<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    public function series()
    {
        return $this->belongsTo(Serie::class);
    }

    public function espisodes()
    {
        return $this->hasMany(Episode::class);
    }
}
