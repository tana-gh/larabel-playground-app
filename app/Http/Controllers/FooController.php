<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FooService;
use App\Http\Requests\SomeRequest;

class FooController extends Controller
{
    public function index(FooService $foo, SomeRequest $request)
    {
        return view('foo', ['hello' => $foo->value . $request->input('name')]);
    }
}
