<?php

/* THE SCRIPT 420 */

/* page content generating variables definitions and user settings */
$css = array();
$css_add = array();
$css_ignore = array();
$js = array();
$js_add = array();
$js_ignore = array();
$script_before = array();
$script_after = array();
$content['value'] = '';
include(CONFIG . 'content.php');

/* routing variables definitions and user settings */
$routing = array();
$routing['controllers'] = array();
$routing['extension'] = '';
include(CONFIG . 'routing.php');

/* parse the request */
include(LIB . 'routing.php');

/* cache variables definitions and user settings */
$cache = array();
$nocache = array();
include(CONFIG . 'cache.php');

/* by default, selected is not cached */
$cache['is_cached'] = false;

/* send headers */
header('Content-Type: text/html; charset=' . $content['charset']);

/* check if cache is used */
if ($cache['use']) {

    /* cache check */
    include(LIB . 'cache.php');
}

/* check if cache is used and requested page is cached */
if ($cache['is_cached']) {

    /* requested page is cached, just serve it from cache */
    include(CACHE . $cache['md5']);
} else {

    /* cache is either not used or page is not yet cached
     * start content generation
     */

    function ob_start_cleanup($buffer) {
        $search = array(
            '/\>[^\S ]+/s', //strip whitespaces after tags, except space
            '/[^\S ]+\</s', //strip whitespaces before tags, except space
            '/(\s)+/s'  // shorten multiple whitespace sequences
        );
        $replace = array(
            '>',
            '<',
            '\\1'
        );
        return preg_replace($search, $replace, $buffer);
    }

    /* start output buffer */
//    ob_start();
    ob_start('ob_start_cleanup');

    /* include script that actually generates content 
     * for the requested page
     */
    include(LIB . 'content.php');

    /* check if cache is used and requested page can be cached */
    if ($cache['use'] && !(isset($nocache[TW_SELECTED]) && $nocache[TW_SELECTED])) {

        /* put all generated content into file */
        @file_put_contents(CACHE . $cache['md5'], ob_get_contents(), LOCK_EX);
    }

    /* send all buffered content to the client (browser) */
    ob_end_flush();
}
