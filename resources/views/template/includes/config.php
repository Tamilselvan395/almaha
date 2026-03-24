<?php
// Prevent redeclare
if (!function_exists('base_url')) {

    function base_url($path = '')
    {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
            ? 'https' : 'http';

        $host = $_SERVER['HTTP_HOST'];

        // Detect project folder
        $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
        $project   = ($scriptDir === '/' || $scriptDir === '.') ? '' : $scriptDir;

        $base = $protocol . '://' . $host . $project;

        return rtrim($base, '/') . '/' . ltrim($path, '/');
    }
}

if (!function_exists('current_url')) {

    function current_url()
    {
        return base_url($_SERVER['REQUEST_URI']);
    }
}
