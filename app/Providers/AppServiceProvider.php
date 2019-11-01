<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Laravel\Passport\Passport; 
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /** 
     * The policy mappings for the application. 
     * 
     * @var array 
     */ 
    protected $policies = [ 
        'App\Model' => 'App\Policies\ModelPolicy', 
    ];

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
        $this->register(); 
        Passport::routes();
    }
}
