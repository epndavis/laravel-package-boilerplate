<?php

namespace Vendor\LaravelPackage;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/package.php', 'package',
        );
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/package.php' => config_path('package.php'),
        ]);
    }
}
