<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Client::class, function ($app) {

        $client = new Client(HttpClient::create(['timeout' => 60]));

        return $client;
    });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
