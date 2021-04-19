<?php

define('TW_DEBUG', true);

/* Framework files.
 * Do not modify files and their contents. */
define('LIB', '../application/library/');

/* Website config.
 * Modify contents only. */
define('CONFIG', '../application/config/');

/* Cache folder. */
define('CACHE', '../application/cache/');

/* Website pages. */
define('PAGES', '../application/content/pages/');

/* Fragments of pages, can be included anywhere.
 * include partial('name');
 */
define('PARTS', '../application/content/parts/');

/* Master templates. */
define('TEMPLATES', '../application/content/templates/');

/* Logs folder. */
define('LOG', '../application/logs/');

/* Version */
define('TW', '1.0.0');

include LIB . 'start.php';

if (TW_DEBUG) {
    $tw_time = microtime(true);
    log_message('execution_time', number_format($tw_time - $_SERVER['REQUEST_TIME_FLOAT'], 4) . 's ^' . TW_REQUEST . ' $' . TW_SELECTED);
}
