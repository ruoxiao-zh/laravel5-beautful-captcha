<?php

namespace Ruoxiaozh\Captcha;

use Illuminate\Support\ServiceProvider;

class BeautyCaptchaProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Captcha', function () {
            return new Captcha();
        });
    }
}
