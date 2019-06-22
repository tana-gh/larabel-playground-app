<?php

namespace App;

use App\Author;

interface IFindAuthorService
{
    public function find(int $id);
}
