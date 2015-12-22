<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MyBlog\Presenters\DateFormatPresenterFactory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @param DateFormatPresenterFactory $dateFormatPresenterFactory
     */
    public function boot(DateFormatPresenterFactory $dateFormatPresenterFactory)
    {
        $dateFormatPresenterFactory->create('us');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
