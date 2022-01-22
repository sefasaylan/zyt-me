<?php

namespace ZytMe;

use \Illuminate\Support\ServiceProvider;
use PhpParser\Node\Expr\FuncCall;

class ZytMeServiceProvider extends ServiceProvider
{
    /**
     * Get the configuration path.
     *
     * @param  string $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->basePath() . '/config' . ($path ? '/' . $path : $path);
    }

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