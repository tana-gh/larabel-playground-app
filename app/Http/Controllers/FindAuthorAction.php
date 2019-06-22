<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IFindAuthorService;

class FindAuthorAction extends Controller
{
    public function __invoke($id, IFindAuthorService $author)
    {
        $author = $author->find($id);
        if (empty($author))
        {
            return response('', 404);
        }
        return response("{$author->name}({$author->kana}), {$author->books->count()}冊");
    }
}
