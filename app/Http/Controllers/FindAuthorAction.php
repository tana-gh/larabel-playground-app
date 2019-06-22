<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindAuthorAction extends Controller
{
    public function __invoke($id)
    {
        $author = \App\Author::find($id);
        if (empty($author))
        {
            return response('', 404);
        }
        return response("{$author->name}({$author->kana}), {$author->books->count()}冊");
    }
}
