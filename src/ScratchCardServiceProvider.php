<?php
namespace Ripon\ScratchCard;
use Illuminate\Support\ServiceProvider;
class ScratchCardServiceProvider extends ServiceProvider{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'scratch');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/scratch'),
        ],'scratch-views');
    }
    public function register(){

    }
}