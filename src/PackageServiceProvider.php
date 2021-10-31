<?php

namespace Vendor\LaravelPackage;

use Illuminate\Support\ServiceProvider;

/**
 * @package Vendor\LaravelPackage
 */
class PackageServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/package.php', 'package'
        );
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/package.php' => config_path('package.php'),
        ]);
    }
}
