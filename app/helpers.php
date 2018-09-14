<?php

if (! function_exists('isProduction')) {
    function isProduction()
    {
        $env = env('APP_ENV', 'production');

        return (boolean) ($env === 'production');
    }
}

if (! function_exists('isLocal')) {
    function isLocal()
    {
        $env = env('APP_ENV', 'production');

        return (boolean) ($env === 'local');
    }
}
