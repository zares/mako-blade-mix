<?php

/**
 * @var \mako\application\Application $app
 * @var \mako\syringe\Container       $container
 */

// This file gets included at the end of the application boot sequence

/**
 * Get the path to a versioned Mix file.
 * @param  string  $path
 * @param  string  $manifestDirectory
 * @return string
 */
function mix($path, $manifestDirectory = '')
{
    static $manifests = [];

    $publicPath = str_replace(DIRECTORY_SEPARATOR .'app', DIRECTORY_SEPARATOR .'public', MAKO_APPLICATION_PATH);
    $manifestPath = $publicPath . $manifestDirectory .'/mix-manifest.json';

    if (! isset($manifests[$manifestPath])) {
        if (! is_file($manifestPath)) {
            throw new \Exception('The Mix manifest does not exist.');
        }

        $manifests[$manifestPath] = json_decode(file_get_contents($manifestPath), true);
    }

    $manifest = $manifests[$manifestPath];

    if (! isset($manifest[$path])) {
        $config = \mako\application\Application::instance()->getConfig();

        if (! $config->get('application.error_handler.display_errors')) {
            return $manifestDirectory . $path;
        } else {
            throw new \Exception("Unable to locate Mix file: {$path}.");
        }
    }

    return $manifestDirectory . $manifest[$path];
}

