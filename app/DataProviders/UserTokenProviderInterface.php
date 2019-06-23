<?php

namespace App\DataProviders;

interface UserTokenProviderInterface
{
    public function retrieveUserByToken(string $token);
}
