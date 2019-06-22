<?php

namespace App;

use App\Author;

class FindAuthorService implements IFindAuthorService
{
    private $author;

    public function __construct(Author $author)
    {
        $this->author = $author;
    }

    public function find(int $id)
    {
        return $this->author->find($id);
    }
}
