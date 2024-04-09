 <?php

    if (! function_exists('base_url')) {
        function base_url($path = '') {
            return app('url')->to($path);
        }
    }
    if (! function_exists('public_url')) {
        function public_url($path = '') {
            return app('url')->to($path);
        }
    }   	