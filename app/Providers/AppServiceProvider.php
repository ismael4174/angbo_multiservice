<?php

namespace App\Providers;

use App\Models\ParametresGlobaux;
use App\Models\ReseauSocial;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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
        Schema::defaultStringLength(191); // Fix pour éviter l'erreur d'index

        View::share([

            'reseauxSociaux' => ReseauSocial::all(),
            'parametresGlobaux' => ParametresGlobaux::all(),
        ]);
    }
}
