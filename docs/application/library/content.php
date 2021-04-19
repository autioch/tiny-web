<?php

/* CONTENT GENERATION */

/* include all the functions/helpers
 * that are used in pages, parts and templates
 */
include(LIB . 'helpers_get.php');
include(LIB . 'helpers_echo.php');
include(LIB . 'helpers_template.php');
include(LIB . 'helpers_misc.php');

/* start output buffer */
ob_start();

/* include all parts defined to run before
 * actual page generation
 */
foreach ($script_before as $key => $value) {
    if ($value) {
        include PARTS . $key . '.php';
    }
}

/* depending on the settings
 * include page file from proper location
 */
if (TW_USE_LOCALE) {
    include( PAGES . TW_LANGUAGE . '/' . TW_SELECTED . '.php');
} else {
    include( PAGES . TW_SELECTED . '.php');
}

/* include all parts defined to run after
 * actual page generation
 */
foreach ($script_after as $key => $value) {
    if ($value) {
        include PARTS . $key . '.php';
    }
}

/* put all generated content into variable
 * for input into template
 */
$content['value'] = ob_get_contents();

/* close output buffer */
ob_end_clean();

/* include template that usually makes
 * use of $content['value']
 */
include(TEMPLATES . $content['template'] . '.php');
