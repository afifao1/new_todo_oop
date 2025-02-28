<?php
declare(strict_types=1);

spl_autoload_register(function ($class) {
    $directories = [
        __DIR__ . '/',
        __DIR__ . '/controllers/',
        __DIR__ . '/models/',
    ];

    foreach ($directories as $directory) {
      $path = $directory . $class . '.php';
        if (file_exists($path)) {
            require_once $path;
            return;
        }
    }
});
