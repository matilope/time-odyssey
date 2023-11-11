<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use NumberFormatter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('money', function ($amount) {
            return "<?php 
            \$formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
            echo \$formatter->formatCurrency(floatval($amount), 'USD');
             ?>";
        });
    }
}
