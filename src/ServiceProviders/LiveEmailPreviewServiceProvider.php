<?php
namespace GhadeerHamed\LiveEmailPreview\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class LiveEmailPreviewServiceProvider extends ServiceProvider
{

    public function register()
    {
    }
    public function boot()
    {
        // Load the views from the package
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'live-email-preview');

        // Publish config and views
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/live-email-preview'),
        ], 'views');

        // Load package routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}