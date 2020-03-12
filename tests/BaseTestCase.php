<?php

namespace Javleds\LaraPayPal\Tests;

use Javleds\LaraPayPal\LaraPayPalServiceProvider;
use Orchestra\Testbench\TestCase;

class BaseTestCase extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            LaraPayPalServiceProvider::class,
        ];
    }
}
