<?php

namespace Javleds\LaraPayPal;

use Illuminate\Support\ServiceProvider;

class LaraPayPalServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes(
            [
                getBaseDir('config/lara_paypal.php') => config_path('lara_paypal.php')
            ],
            'lara-paypal-config'
        );
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            getBaseDir('config/lara_paypal.php'),
            'lara_paypal'
        );
    }
}
