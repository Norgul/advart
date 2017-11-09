<?php

namespace Norgul\Advart;

use App\Http\Kernel;
use Norgul\Advart\Commands\AdvartCommand;
use Illuminate\Support\ServiceProvider;

class AdvartServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([AdvartCommand::class,]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       //
    }
}
