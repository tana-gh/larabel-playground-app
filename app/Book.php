<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function detail()
    {
        return $this->hasOne(\App\Bookdetail::class);
    }

    public function author()
    {
        return $this->belongsTo(\App\Author::class);
    }

    public function publisher()
    {
        return $this->belongsTo(\App\Publisher::class);
    }
}
