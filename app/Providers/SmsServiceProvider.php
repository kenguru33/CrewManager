<?php

namespace App\Providers;

use App\Contracts\SmsMessengerContract;
use App\PsWinComSmsMessenger;
use Config;
use Illuminate\Support\ServiceProvider;


class SmsServiceProvider extends ServiceProvider
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
        $this->app->singleton(SmsMessengerContract::class, function(){
            $s = Config::get('services.pswincom.sender');
            $u = Config::get('services.pswincom.username');
            return new PsWinComSmsMessenger(Config::get('services.pswincom.sender'), Config::get('services.pswincom.username'), Config::get('services.pswincom.password'));
        });
    }
}
