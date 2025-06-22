<?php

namespace Config;

use CodeIgniter\Events\Events;
use CodeIgniter\Exceptions\FrameworkException;
use CodeIgniter\HotReloader\HotReloader;
use Config\Services;

/*
 * --------------------------------------------------------------------
 * Event Custom: Template Buku
 * --------------------------------------------------------------------
 */

Events::on('pre_controller', function () {
    $router = service('router');
    $controller = $router->controllerName();

    // Jika controller adalah Books, gunakan template buku
    if (strpos($controller, 'Books') !== false) {
        $view = service('renderer');
        $view->setVar('template', 'layout/templatebuku');
    }
});

/*
 * --------------------------------------------------------------------
 * Application Events (Default dari CodeIgniter)
 * --------------------------------------------------------------------
 */
Events::on('pre_system', static function () {
    if (ENVIRONMENT !== 'testing') {
        if (ini_get('zlib.output_compression')) {
            throw FrameworkException::forEnabledZlibOutputCompression();
        }

        while (ob_get_level() > 0) {
            ob_end_flush();
        }

        ob_start(static fn($buffer) => $buffer);
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
