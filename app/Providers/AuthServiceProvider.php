<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;

use App\Models\Listing;
use App\Policies\ListingPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Listing::class => ListingPolicy::class,
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('is-admin', function ($user)
        {
            return $user->hasAnyRole('Admin');
            //return $user->hasAnyRoles(['admin','agent']);
        });

        Gate::define('is-recruiter', function ($user)
        {
            return $user->hasAnyRoles(['Admin','Recruiter']);
        });

        Gate::define('is-agent', function ($user)
        {
            return $user->hasAnyRoles(['Admin','Recruiter','Agent']);
        });
    }
}
