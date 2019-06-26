<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CaptchaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Validator::extend('recaptcha', 'App\\Validators\\ReCaptcha@validate');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
