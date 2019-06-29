<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Auth\AuthManager;
use stdClass;

class PolicyWithIdAction extends Controller
{
    private $authManager;
    private $gate;

    public function __construct(AuthManager $authManager, Gate $gate)
    {
        $this->authManager = $authManager;
        $this->gate = $gate;
    }

    public function __invoke($id)
    {
        $instance = new stdClass();
        $instance->id = $id;

        $allows = $this->gate->forUser(
            $this->authManager->guard()->user()
        )->allows('update', $instance);

        if ($allows)
        {
            return response('You are allowed.');
        }
        else
        {
            return response('', 401);
        }
    }
}
