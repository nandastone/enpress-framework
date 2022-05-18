<?php

if (! function_exists('___')) {
    /**
     * Translate the given message.
     *
     * @param  string  $key
     * @param  array  $replace
     * @param  string  $locale
     * @return string|array|null
     */
    function ___($key, $replace = [], $locale = null)
    {
        return app('translator')->getFromJson($key, $replace, $locale);
    }
}
