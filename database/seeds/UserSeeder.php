<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\DatabaseManager;
use Illuminate\Contracts\Hashing\Hasher;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(DatabaseManager $manager, Hasher $hasher)
    {
        $userId = $manager->table('users')
            ->insertGetId([
                'name' => 'laravel user',
                'email' => 'laravel@example.com',
                'password' => $hasher->make('password'),
            ]);

        $manager->table('user_tokens')
            ->insert([
                'user_id' => $userId,
                'api_token' => \Illuminate\Support\Str::random(60),
            ]);
    }
}
