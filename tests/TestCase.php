<?php

namespace Vendor\LaravelPackage\Tests;

use Vendor\LaravelPackage\PackageServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

/**
 * @package Vendor\LaravelPackage\Tests
 */
abstract class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @param \Illuminate\Foundation\Application
     *
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [
            PackageServiceProvider::class,
        ];
    }
}
