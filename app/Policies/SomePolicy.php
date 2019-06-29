<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Contracts\Auth\Authenticatable;
use stdClass;

class SomePolicy
{
    use HandlesAuthorization;

    public function update(Authenticatable $authenticatable, stdClass $instance)
    {
        return intval($authenticatable->getAuthIdentifier()) === intval($instance->id);
    }
}
