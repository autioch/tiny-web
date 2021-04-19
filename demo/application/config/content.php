<?php

/* PAGE CONTENT CONFIGURATION */

/* PAGE INFORMATION */

$content['title'] = ' - Pony Hunters';
$content['description'] = 'World of Warcraft Guild.';
$content['keywords'] = 'World of Warcraft, Guild, Retail';
$content['author'] = 'Jakub Szczepaniak';
$content['charset'] = 'UTF-8';
$content['template'] = 'default';


/* LANGUAGE CONFIGURATION */

/* Default language */
$content['language'] = 'en';

/* $content['localize'] enables or disable content localization 
 * List of available language is set in $content['languages']
 */
$content['localize'] = true;
$content['languages'] = array('pl', 'en');


/* EXTRA PAGE SCRIPTS */

/* List of scripts parsed immediately before page generation
 * before generated content is inserted into a template
 */
$script_before['_scripts/settings'] = true;
$script_before['_scripts/dictionary'] = true;
$script_before['_scripts/tools'] = true;
$script_before['_scripts/page_location'] = true;

/* List of scripts parsed immediately after page generation
 * before generated content is inserted into a template
 */
//$script_after['s_after'] = true;


/* CSS CONFIGURATION */

/* List of css files to be included with echo_default_css
 * To include it with default options (media = screen, no id)
 * set value to "true"
 * To specify any of attributes, declare it as an array with keys:
 * id, media, extension
 */
//$css['alliance'] = true;
//$css['horde'] = true;

/* List of pages with css to be excluded
 * value is list of css files to be excluded 
 */
//$css_ignore['page'] = 'css1,css2';

/* List of pages with extra css to be included
 * value is list of css files to be included
 */
//$css_add['page'] = 'css1,css2';


/* JS CONFIGURATION */

//$jsType = 'application/javascript';
$jsType = 'text/javascript';

/* Javascript configuration is similar to css configuration
 * with exception of keys in arrays
 */
$js['jquery-1.11.0.min'] = array('id' => 'jquery', 'defer' => true, 'extension' => 'js');
$js['tinynav.min'] = array('id' => 'tinynav', 'defer' => true, 'extension' => 'js');
$js['default.min'] = array('id' => 'qb', 'defer' => true, 'extension' => 'js');
//$js_ignore['page'] = 'js1,js2';

//$js_add['page'] = 'js1,js2';

