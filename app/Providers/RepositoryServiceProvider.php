<?php

namespace App\Providers;

use App\Repositories\KanbanRepository;
use App\Interfaces\KanbanRepositoryInterface;

use App\Repositories\StatusRepository;
use App\Interfaces\StatusRepositoryInterface;

use App\Repositories\TaskRepository;
use App\Interfaces\TaskRepositoryInterface;

use App\Repositories\UserRepository;
use App\Interfaces\UserRepositoryInterface;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(KanbanRepositoryInterface::class, KanbanRepository::class);
        $this->app->bind(StatusRepositoryInterface::class, StatusRepository::class);
        $this->app->bind(TaskRepositoryInterface::class, TaskRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
