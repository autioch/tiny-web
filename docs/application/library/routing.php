<?php

/* REQUEST PROCESSING */

define('TW_USE_LOCALE', $content['localize']);
define('TW_USE_CONTROLLERS', count($routing['controllers']) > 0);
define('TW_USE_EXTENSION', strlen($routing['extension']) > 0);

/* prepare uri, query, script */
$routing['request_uri'] = $_SERVER['REQUEST_URI'];

/* remove query from string */
if (strpos($routing['request_uri'], '?') > 0) {
    $routing['request_uri'] = substr($routing['request_uri'], 0, strpos($routing['request_uri'], '?'));
}

/* if page is run from a subfolder of a domain
 * the exact path will be stored in $routing['folder'] */
$routing['folder'] = substr($_SERVER['SCRIPT_NAME'], 0, -9);
define('TW_FOLDER', $routing['folder']);

/* get the request by substracting folder from request uri
 * and split it into array for easier manipulation */
$routing['request'] = substr($routing['request_uri'], strlen($routing['folder']));
if (strlen($routing['request']) > 0) {
    $routing['request_array'] = explode('/', $routing['request']);
} else {
    $routing['request_array'] = array();
}
define('TW_REQUEST', $routing['request']);

/* if localization is used, check requestif it contains language selection */
if (TW_USE_LOCALE && (count($routing['request_array']) > 0)) {

    /* if first element matches any of languages, 
     * set it as the current language and remove it from request */
    if (in_array($routing['request_array'][0], $content['languages'])) {
        $content['language'] = array_shift($routing['request_array']);
    }
}
define('TW_LANGUAGE', $content['language']);

/* if requested page is defined as a controller
 * rest of uri is treated like parameters
 * and stored in $routing['params'] */
if (TW_USE_CONTROLLERS && (count($routing['request_array']) > 0)) {
    if (in_array($routing ['request_array'][0], $routing['controllers'])) {
        $tmp = array_shift($routing['request_array']);
        $routing['params'] = $routing['request_array'];
        $routing['request_array'] = array($tmp);
    }
}

/* if a page extension is defined, check extension of the last element 
 * if it's ok, substract it, else select error page */
$extension_ok = true;
define('TW_EXT', $routing['extension']);
if (TW_USE_EXTENSION) {
    $tmp = strlen(TW_EXT);
    if (count($routing['request_array']) > 0) {

        $end = array_pop($routing['request_array']);

        if (substr_compare($end, TW_EXT, -$tmp, $tmp) === 0) {
            $end = substr($end, 0, -$tmp);
        } else {
            $extension_ok = false;
        }
        $routing['request_array'][] = $end;
    }
}

$routing['request'] = implode('/', $routing['request_array']);

if (!$extension_ok) {
    $routing['selected'] = $routing['error'];
} else {

    /* set default as selected */
    $routing['selected'] = $routing['default'];

    if (strlen($routing['request']) > 0) {

        /* if localization is used, the path to file is a "bit" longer */
        if (TW_USE_LOCALE) {
            $tmp = PAGES . TW_LANGUAGE . '/' . $routing['request'] . '.php';
        } else {
            $tmp = PAGES . $routing['request'] . '.php';
        }

        /* actual check for file existence */
        if (file_exists($tmp)) {

            /* file exists, set it as selected */
            $routing['selected'] = $routing['request'];
        } else {
            /* file for request not found
             * send 404 headers and set error as selected */
            $routing['selected'] = $routing['error'];
            header("HTTP/1.0 404 Not Found");
            header("Status: 404 Not Found");
        }
    }
}

/* define whatever was finally selected */
define('TW_SELECTED', $routing['selected']);
