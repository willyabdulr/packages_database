<?php
// MyVendor\contactform\src\ContactFormServiceProvider.php
namespace Example\app;
use Illuminate\Support\ServiceProvider;
class ApFormServiceProvider extends ServiceProvider {
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'app');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }
    public function register()
    {
    }
}
?>