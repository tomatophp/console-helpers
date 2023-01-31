<?php

namespace TomatoPHP\ConsoleHelpers;

use Illuminate\Support\ServiceProvider;

class ConsoleHelpersServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/console-helpers.php', 'console-helpers');

        //Publish Config file
        $this->publishes([
            __DIR__ . '/../config/console-helpers.php' => config_path('console-helpers.php'),
        ], 'config');
    }
}
