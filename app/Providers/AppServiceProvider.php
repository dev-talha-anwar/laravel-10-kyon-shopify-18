<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Osiset\BasicShopifyAPI\Options;
use Osiset\BasicShopifyAPI\BasicShopifyAPI;
use function Osiset\ShopifyApp\getShopifyConfig;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    public static function shopifyApiClosure (Options $opts) {
        $ts = config('shopify-app.api_time_store');
        $ls = config('shopify-app.api_limit_store');
        $sd = config('shopify-app.api_deferrer');

        // Custom Guzzle options
        $opts->setGuzzleOptions(['timeout' => 90.0]);
       
        return new BasicShopifyAPI(
            $opts,
            new $ts(),
            new $ls(),
            new $sd()
        );
    }
}
