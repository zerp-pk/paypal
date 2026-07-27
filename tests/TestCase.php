<?php

namespace Zerp\Paypal\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Zerp\Paypal\Providers\PaypalServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [PaypalServiceProvider::class];
    }
}
