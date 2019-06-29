<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Access\Gate;

class HomeWithIdAction extends Controller
{
    private $gate;

    public function __construct(Gate $gate)
    {
        $this->gate = $gate;
    }

    public function __invoke($id)
    {
        if ($this->gate->allows('user-access', $id))
        {
            return response('You are allowed.');
        }
        else
        {
            return response('', 401);
        }
    }
}
