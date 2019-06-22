<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookdetail extends Model
{
    protected $fillable = [
        'isbn',
        'published_date',
        'price'
    ];

    public function book()
    {
        return $this->belongsTo(\App\Book::class);
    }
}
