<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Foundation\Application;
use App\Auth\UserTokenProvider;
use App\DataProviders\Database\UserToken;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $this->app['auth']->provider(
            'cache_eloquent',
            function (Application $app, array $config) {
                return new CacheUserProvider(
                    $app['hash'],
                    $config['model'],
                    $app['cache']->store()
                );
            }
        );

        $this->app['auth']->provider(
            'user_tokens',
            function (Application $app) {
                return new UserTokenProvider(new UserToken($app['db']));
            }
        );
    }
}
