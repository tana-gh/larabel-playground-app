<?php

namespace App\Http\Controllers\User;

use Illuminate\Routing\Controller;
use Illuminate\Auth\AuthManager;

final class RetrieveAction extends Controller
{
    private $authManager;

    public function __construct(AuthManager $authManager)
    {
        $this->authManager = $authManager;
    }

    public function __invoke()
    {
        if (\Auth::check())
        {
            return response()->json($this->authManager->guard('api')->user()->toJson());
        }
        else
        {
            return response()->json('{"error":"Unauthorized"}');
        }
    }
}
