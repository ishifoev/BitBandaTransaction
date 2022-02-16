<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\CsvDbInterface;
use App\Services\CsvService;
use App\Services\DbService;

class TransactionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CsvDbInterface::class, CsvService::class);
        $this->app->bind(CsvDbInterface::class, DbService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
