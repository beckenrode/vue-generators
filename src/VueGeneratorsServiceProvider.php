<?php

namespace Beckenrode\VueGenerators;

use Illuminate\Support\ServiceProvider;

class VueGeneratorsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Config/vue-generators.php' => config_path('vue-generators.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/Config/vue-generators.php', 'vue-generators'
        );

        $this->registerComponentGenerator();
        $this->registerMixinGenerator();
    }

    /**
     * Register the make:component generator.
     */
    private function registerComponentGenerator()
    {
        $this->app->singleton('command.vuegenerator.component', function ($app) {
            return $app['Beckenrode\VueGenerators\Commands\ComponentMakeCommand'];
        });
        $this->commands('command.vuegenerator.component');
    }

    /**
     * Register the make:mixin generator.
     */
    private function registerMixinGenerator()
    {
        $this->app->singleton('command.vuegenerator.mixin', function ($app) {
            return $app['Beckenrode\VueGenerators\Commands\MixinMakeCommand'];
        });
        $this->commands('command.vuegenerator.mixin');
    }
}
