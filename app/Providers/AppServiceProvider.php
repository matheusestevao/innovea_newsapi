<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Http::macro('newsapi', function() {
            return Http::withHeaders([
                'X-Api-Key' => config('newsapi.token'),
            ])->acceptJson()
            ->baseUrl(config('newsapi.host').config('newsapi.version'))
            ->retry(config('newsapi.retry'), config('newsapi.sleep'));
        });
    }
}
