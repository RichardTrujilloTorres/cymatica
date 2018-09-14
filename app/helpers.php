<?php

if (! function_exists('isProduction')) {
    function isProduction()
    {
        $env = env('APP_ENV', 'production');

        return (boolean) ($env === 'production');
    }
}
