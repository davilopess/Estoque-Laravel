<?php

namespace estoque\Providers;

use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'estoque\Model' => 'estoque\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('update-delete', function ($user, $produto) {
        //     return $user->id == $produto->produtos_id
        //         ? Response::allow()
        //         : Response::deny('admin');


        // //
        // });
    }
}
