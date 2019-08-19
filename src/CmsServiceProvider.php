<?php


namespace Great\Cms;



use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('cms',function (){
            return new Cms;
        });
        $this->mergeConfigFrom(__DIR__.'/Config/main.php','cms');
    }
    public function boot(){
        require __DIR__ . '\Http\routes.php';
        $this->loadViewsFrom(__DIR__.'/Views','cms');
        $this->app['router']->aliasMiddleware('admin',\Great\Cms\Http\Middleware\Admin::class);
        $this->publishes([
            __DIR__ . '/Config/main.php' => config_path('cms.php'),
            __DIR__ . '/Views' => base_path('resources/views/cms'),
            __DIR__ . '/Migrations' => database_path('/migrations')
        ]);
    }
}
