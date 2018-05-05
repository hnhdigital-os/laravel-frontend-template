<?php

namespace HnhDigital\FrontendTemplate;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use View;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'hnhdigital-frontend-template');
    }

    /**
     * Override standard service provider.
     *
     * Merge the given configuration with the existing configuration.
     *
     * @param string $path
     * @param string $key
     *
     * @return void
     */
    protected function mergeConfigFrom($path, $key)
    {
        $config = $this->app['config']->get($key, []);

        $this->app['config']->set($key, array_replace_recursive(require $path, $config));
    }

    /**
     * Boot.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('hnhdigital-frontend-template.php'),
        ]);

        $this->loadViewsFrom(__DIR__.'/../view/', 'hnhdigital-frontend-template');

        view()->composer('hnhdigital-frontend-template::template', 'HnhDigital\FrontendTemplate\TemplateComposer');
        view()->composer('hnhdigital-frontend-template::module.content.heading', 'HnhDigital\FrontendTemplate\ModuleContentHeadingComposer');

        foreach (config('hnhdigital-frontend-template.header.meta', []) as $key => $data) {
            app('FrontendAsset')->addMeta($key, $data);
        }
    }
}
