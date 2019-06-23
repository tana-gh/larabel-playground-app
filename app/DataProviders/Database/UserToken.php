<?php

namespace App\DataProviders\Database;

use App\DataProviders\UserTokenProviderInterface;
use Illuminate\Database\DatabaseManager;

final class UserToken implements UserTokenProviderInterface
{
    private $manager;
    private $table = 'user_tokens';

    public function __construct(DatabaseManager $manager)
    {
        $this->manager = $manager;
    }

    public function retrieveUserByToken(string $token)
    {
        return $this->manager->connection()
            ->table($this->table)
            ->join('users', 'users.id', '=', 'user_tokens.user_id')
            ->where('api_token', $token)
            ->first(['user_id', 'api_token', 'name', 'email']);
    }
}
