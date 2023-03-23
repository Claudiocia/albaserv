<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('admin', function ($user){
            foreach ($user->roles as $role){
                if ($role->system == 'admin' ){
                    //dd($role->system);
                    return true;
                }else {
                    return false;
                }
            };
        });

        Gate::define('pesq', function ($user){
            foreach ($user->roles as $role){
                if ($role->system == 'admin' || $role->system == 'pesq' ){
                    return true;
                }else {
                    return route('/login');
                }
            }
        });

        Gate::define('legis', function ($user){
            foreach ($user->roles as $role){
                if ($role->system == 'admin' || $role->system == 'legis' ){
                    return true;
                }else {
                    return route('/login');
                }
            }
        });
    }
}
