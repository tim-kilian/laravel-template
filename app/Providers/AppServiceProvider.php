<?php namespace App\Providers;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider {

    public function register() {
        if ($this->app->environment() !== 'production') {
            $this->app->register(IdeHelperServiceProvider::class);
        }
        //
    }

    public function boot() {
        //
    }

}
