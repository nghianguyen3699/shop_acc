<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('STATUS_PAYMENT_PAID', config('setting_var.STATUS_PAYMENT_PAID'));
        View::share('STATUS_PAYMENT_UNPAID', config('setting_var.STATUS_PAYMENT_UNPAID'));
        View::share('STATUS_PAYMENT_CANCELED', config('setting_var.STATUS_PAYMENT_CANCELED'));
		
        View::share('ACCOUNT_NAME', config('setting_var.ACCOUNT_NAME'));
        View::share('ACCOUNT_NUMBER', config('setting_var.ACCOUNT_NUMBER'));
        View::share('ACCOUNT_BANK', config('setting_var.ACCOUNT_BANK'));
    }
}
