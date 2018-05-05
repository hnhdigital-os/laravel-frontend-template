<?php

namespace HnhDigital\FrontendTemplate;

class Asset
{
    public function __construct()
    {
        app('FrontendAsset')->container('Bootstrap');
        app('FrontendAsset')->container('FontAwesome');
        app('FrontendAsset')->add('vendor/hnhdigital-laravel-frontend-template.css');
        app('FrontendAsset')->container('Animate');
        app('FrontendAsset')->container('Toastr');
    }
}
