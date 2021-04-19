<?php

/* PAGE CONTENT CONFIGURATION */

/* PAGE INFORMATION */

$content['title'] = ' : TinyWeb';
$content['description'] = 'Prosty skrypt do tworzenia stron';
$content['keywords'] = 'PHP, framework, tworzenie stron';
$content['author'] = 'Jakub Szczepaniak';
$content['charset'] = 'UTF-8';
$content['template'] = 'default';

/* LANGUAGE CONFIGURATION */

/* Default language */
$content['language'] = 'pl';

/* $content['localize'] enables or disables content localization.
 * List of available language is set in $content['languages'] */
$content['localize'] = false;
$content['languages'] = ['pl', 'en'];

/* EXTRA PAGE SCRIPTS */

/* List of scripts parsed immediately before page generation,
 * before generated content is inserted into a template. */
//$script_before['s_before'] = true;

/* List of scripts parsed immediately after page generation,
 * before generated content is inserted into a template. */
//$script_after['s_after'] = true;

/* CSS CONFIGURATION */

/* List of css files to be included with echo_default_css.
 * To include it with default options (media = screen, no id)
 * set value to "true"
 * To specify any of attributes, declare it as an array with keys:
 * id, media, extension */
$css['default'] = ['id' => 'default', 'media' => 'screen', 'extension' => 'css'];

/* List of pages with css to be excluded.
 * Value is list of css files to be excluded */
//$css_ignore['page'] = 'css1,css2';

/* List of pages with extra css to be included
 * value is list of css files to be included */
//$css_add['page'] = 'css1,css2';

/* JS CONFIGURATION */

/* Javascript configuration is similar to css configuration
 * with exception of keys in arrays */
// $js['default'] = ['id' => 'main', 'defer' => true, 'extension' => 'js'];

//$js_ignore['page'] = 'js1,js2';

//$js_add['page'] = 'js1,js2';
