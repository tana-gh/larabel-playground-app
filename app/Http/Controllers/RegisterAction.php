<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Contracts\Factory;

class RegisterAction extends Controller
{
    public function __invoke(Factory $factory)
    {
        return $factory->driver('github')->redirect();
    }
}
