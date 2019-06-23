<?php

namespace App\Entities;

use Illuminate\Contracts\Auth\Authenticatable;

class User implements Authenticatable
{
    private $id;
    private $apiToken;
    private $name;
    private $email;
    private $password;

    public function __construct(
        int $id,
        string $apiToken,
        string $name,
        string $email,
        string $password = ''
    ) {
        $this->id = $id;
        $this->apiToken = $apiToken;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getAuthIdentifierName()
    {
        return 'user_id';
    }

    public function getAuthIdentifier()
    {
        return $this->id;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return '';
    }

    public function setRememberToken($value)
    {
    }

    public function getRememberTokenName()
    {
        return '';
    }
}
