<?php

namespace App\Providers;

use App\Models\Collaborator;
use App\Models\Example;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('example', function () {
            return new Example();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
           'series' => 'App\Models\Series',
           'collection' => 'App\Models\Collection'
        ]);
    }
}
