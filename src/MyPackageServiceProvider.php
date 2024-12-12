<?php

declare(strict_types=1);

namespace Bravik\MyPackage;


use Bravik\MyPackage\Console\Commands\TestMe;

class MyPackageServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register() {
        $this->app->singleton(CoolStaff::class, CoolStaff::class);
    }

    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/my-package.php', 'my-package');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'my-package');
        $this->loadRoutesFrom(__DIR__ . '/../config/routes.php');

        $this->publishes([
            __DIR__ . '/../config/my-package.php' => config_path('my-package.php'),
            __DIR__ . '/../resources/views' => resource_path('views/vendor/my-package'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                TestMe::class,
            ]);
        }
    }
}
