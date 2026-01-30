<?php

declare(strict_types=1);

namespace Illuminate\Support;

if (! function_exists(__NAMESPACE__.'\\php_binary')) {
    /**
     * Polyfill for Laravel versions that don't ship Illuminate\Support\php_binary().
     */
    function php_binary(): string
    {
        return PHP_BINARY;
    }
}

