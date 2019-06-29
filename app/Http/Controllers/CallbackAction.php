<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;
use Laravel\Socialite\Contracts\Factory;
use App\User;

class CallbackAction extends Controller
{
    public function __invoke(
        AuthManager $authManager,
        Factory $factory
    )
    {
        $user = $factory->driver('github')->user();
        $authManager->guard()->login(
            User::firstOrCreate([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => '',
            ]),
            true
        );

        return redirect('/home');
    }
}
