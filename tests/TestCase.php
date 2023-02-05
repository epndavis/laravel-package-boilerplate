<?php

namespace Vendor\LaravelPackage\Tests;

use Illuminate\Support\ServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Vendor\LaravelPackage\PackageServiceProvider;

abstract class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @param \Illuminate\Foundation\Application
     *
     * @return array<class-string<ServiceProvider>>
     */
    protected function getPackageProviders($app): array
    {
        return [
            PackageServiceProvider::class,
        ];
    }
}
