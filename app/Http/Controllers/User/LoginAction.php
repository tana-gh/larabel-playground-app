<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;
use App\Http\Responder\TokenResponder;
use App\Http\Controllers\Controller;

final class LoginAction extends Controller
{
    private $authManager;

    public function __construct(AuthManager $authManager)
    {
        $this->authManager = $authManager;
    }

    public function __invoke(Request $request, TokenResponder $responder)
    {
        $guard = $this->authManager->guard('api');
        $token = $guard->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        return $responder($token, $guard->factory()->getTTL() * 60);
    }
}
