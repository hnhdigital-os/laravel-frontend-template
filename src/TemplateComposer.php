<?php

namespace HnhDigital\FrontendTemplate;

use Illuminate\Contracts\View\View;

class TemplateComposer
{
    /**
     * Create a new common module heading composer.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        if (session('toastr', false) !== false) {
            $script = 'toastr.'.session('toastr')."('".addslashes(session('feedback'))."', '', {timeOut: ".session('timeout', 2000).'});';
            app('FrontendAsset')->addScript($script, 'ready');
        }

        app('FrontendAsset')->container('AutoInit');

        if (env('APP_ENABLE_HTTP2', false)) {
            app('FrontendAsset')->http2();
        }

        app('FrontendAsset')->addMeta('csrf-token', ['content' => csrf_token()]);
    }
}
