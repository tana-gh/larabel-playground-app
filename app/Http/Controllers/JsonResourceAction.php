<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\SomeJsonResource;

class JsonResourceAction extends Controller
{
    public function __invoke(Request $request)
    {
        $resource = new SomeJsonResource([ 'name' => $request->input('name') ]);
        return $resource->response($request)->header('Content-Type', 'application/hal+json');
    }
}
