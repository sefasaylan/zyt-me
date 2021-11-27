<?php

namespace ZytMe;

use \Illuminate\Support\ServiceProvider;
use PhpParser\Node\Expr\FuncCall;

class ZytMeServiceProvider extends ServiceProvider
{

    public function boot()
    {
    }

    public function register()
    {
        $this->app->singleton(ZytMeServiceFacade::class,function (){
            return  new ZytMeServiceFacade();
        });
    }

}