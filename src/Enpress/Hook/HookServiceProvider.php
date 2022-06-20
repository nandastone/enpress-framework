<?php

namespace Enpress\Hook;

use Illuminate\Support\ServiceProvider;

class HookServiceProvider extends ServiceProvider
{
    public function boot() {
        var_dump('booting HookServiceProvider');
    }

    /*
     * Bind Hook into Application
     */
    public function register()
    {
        var_dump('register HookServiceProvider');
        $this->app->bind('hook', Hook::class);
    }
}
