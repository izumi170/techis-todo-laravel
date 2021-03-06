<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//7.4ターミナルでマイグレーション実行後、エラーが発生した為下記コード追加
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //7.4ターミナルでマイグレーション実行後、エラーが発生した為下記コード追加
        Schema::defaultStringLength(191);

            if (\App::environment(['production']) || \App::environment(['develop'])) {
                \URL::forceScheme('https');
            }
    }
}
