<?php

use Illuminate\Support\Arr;

if (!function_exists('setting')) {
    /**
     * Helper function for Setting facade.
     *
     * @param string $key
     * @param mixed $default
     * @param string $constraint_value
     * @return mixed
     */
    function setting($key = null, $default = null, $constraint_value = null)
    {
        $instance = app('setting');

        if (!isset($instance)) {
            $instance = app()->make('KatalisKreasi\LaravelUserSettings\Setting');
        }

        if (isset($key)) {
            return $instance->get($key, $default, $constraint_value);
        }

        return app('setting');
    }
}

if (!function_exists('array_get')) {
    /**
     * Get an item from an array using dot notation.
     *
     * @param array  $array
     * @param string $key
     * @param mixed  $default
     * @return mixed
     */
    function array_get(array $array, $key, $default = null)
    {
        return Arr::get($array, $key, $default);
    }
}

if (!function_exists('array_set')) {
    /**
     * Set an item on an array using dot notation.
     *
     * @param array  $array
     * @param string $key
     * @param mixed  $value
     * @return array
     */
    function array_set(array &$array, $key, $value)
    {
        return Arr::set($array, $key, $value);
    }
}
