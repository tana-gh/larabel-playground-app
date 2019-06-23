<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;

class UserAction extends Controller
{
    private $authManager;

    public function __construct(AuthManager $authManager)
    {
        $this->authManager = $authManager;
    }

    public function __invoke()
    {
        $user = $this->authManager->guard('api')->user();

        return response()->json('{"name":"' . $user->getName() . '"}');
    }
}
