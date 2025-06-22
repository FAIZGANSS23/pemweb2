<?php

namespace Config;

use CodeIgniter\Events\Events;
<<<<<<< HEAD

Events::on('pre_controller', function () {
    $router = service('router');
    $controller = $router->controllerName();

    // Jika controller adalah Books, gunakan template buku
    if (strpos($controller, 'Books') !== false) {
        $view = service('renderer');
        $view->setVar('template', 'layout/templatebuku');
    }
});

=======
>>>>>>> 34d2bf95fabe85c0705d02fa6afc23647b0c385e
use CodeIgniter\Exceptions\FrameworkException;
use CodeIgniter\HotReloader\HotReloader;

/*
 * --------------------------------------------------------------------
 * Application Events
 * --------------------------------------------------------------------
 * Events allow you to tap into the execution of the program without
 * modifying or extending core files. This file provides a central
 * location to define your events, though they can always be added
 * at run-time, also, if needed.
 *
 * You create code that can execute by subscribing to events with
 * the 'on()' method. This accepts any form of callable, including
 * Closures, that will be executed when the event is triggered.
 *
 * Example:
 *      Events::on('create', [$myInstance, 'myMethod']);
 */

Events::on('pre_system', static function () {
    if (ENVIRONMENT !== 'testing') {
        if (ini_get('zlib.output_compression')) {
            throw FrameworkException::forEnabledZlibOutputCompression();
        }

        while (ob_get_level() > 0) {
            ob_end_flush();
        }

<<<<<<< HEAD
        ob_start(static fn($buffer) => $buffer);
=======
        ob_start(static fn ($buffer) => $buffer);
>>>>>>> 34d2bf95fabe85c0705d02fa6afc23647b0c385e
    }

    /*
     * --------------------------------------------------------------------
     * Debug Toolbar Listeners.
     * --------------------------------------------------------------------
     * If you delete, they will no longer be collected.
     */
    if (CI_DEBUG && ! is_cli()) {
        Events::on('DBQuery', 'CodeIgniter\Debug\Toolbar\Collectors\Database::collect');
        Services::toolbar()->respond();
        // Hot Reload route - for framework use on the hot reloader.
        if (ENVIRONMENT === 'development') {
            Services::routes()->get('__hot-reload', static function () {
                (new HotReloader())->run();
            });
        }
    }
});
