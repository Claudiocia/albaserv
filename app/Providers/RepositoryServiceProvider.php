<?php

namespace App\Providers;

use App\Repositories\AlaRepository;
use App\Repositories\AlaRepositoryEloquent;
use App\Repositories\AlebraRepository;
use App\Repositories\AlebraRepositoryEloquent;
use App\Repositories\AmbienteRepository;
use App\Repositories\AmbienteRepositoryEloquent;
use App\Repositories\AndarRepository;
use App\Repositories\AndarRepositoryEloquent;
use App\Repositories\PredioRepository;
use App\Repositories\PredioRepositoryEloquent;
use App\Repositories\RoleRepository;
use App\Repositories\RoleRepositoryEloquent;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AlaRepository::class, AlaRepositoryEloquent::class);
        $this->app->bind(AlebraRepository::class, AlebraRepositoryEloquent::class);
        $this->app->bind(AmbienteRepository::class, AmbienteRepositoryEloquent::class);
        $this->app->bind(AndarRepository::class, AndarRepositoryEloquent::class);
        $this->app->bind(PredioRepository::class, PredioRepositoryEloquent::class);
        $this->app->bind(RoleRepository::class, RoleRepositoryEloquent::class);
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
        //:end-bindings:
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
