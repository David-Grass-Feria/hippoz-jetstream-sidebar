<?php

namespace Hippoz\HippozJetstreamSidebar;

use Illuminate\Support\ServiceProvider;

class HippozJetstreamSidebarServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'hippoz-jetstream-sidebar');
         $this->loadViewsFrom(__DIR__.'/../resources/views', 'hippoz-jetstream-sidebar');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        //$this->mergeConfigFrom(__DIR__.'/../config/hippoz-jetstream-sidebar.php', 'hippoz-jetstream-sidebar');

        // Register the service the package provides.
        $this->app->singleton('hippoz-jetstream-sidebar', function ($app) {
            return new HippozJetstreamSidebar;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['hippoz-jetstream-sidebar'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        
        $this->publishes([
          
            __DIR__.'/../stubs/resources/views/layouts' => base_path('resources/views/layouts'),
            __DIR__.'/../stubs/resources/views/navigation' => base_path('resources/views'),
           
        ], 'hippoz-jetstream-sidebar');

        $this->publishes([
          
            
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/hippoz-jetstream-sidebar'),
           
        ], 'hippoz-jetstream-sidebar-components');
        
        
        
        // Publishing the configuration file.
        //$this->publishes([
        //    __DIR__.'/../config/hippoz-jetstream-sidebar.php' => config_path('hippoz-jetstream-sidebar.php'),
        //], 'hippoz-jetstream-sidebar.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/hippoz'),
        ], 'hippoz-jetstream-sidebar.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/hippoz'),
        ], 'hippoz-jetstream-sidebar.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/hippoz'),
        ], 'hippoz-jetstream-sidebar.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
