<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Supabase\Client\Supabase;

class SupabaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('supabase', function ($app) {
            return new Supabase(
                env('SUPABASE_SERVICE_ROLE_KEY'),
                env('SUPABASE_URL')
            );
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}