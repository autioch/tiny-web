<?php

/* silnik strony 
 * nie modyfikować plików ani ich zawartości 
 */
define("LIB", "../application/library/");

/* pliki sterujące
 * modyfikować tylko zawartość
 */
define("CONFIG", "../application/config/");

/* katalog do przechowywania cache
 */
define("CACHE", "../application/cache/");

/* strony serwisu
 */
define("PAGES", "../application/content/pages/");

/* fragmenty stron, które mogą być 
 * dowolnie załączane:
 * include partial('nazwa');
 */
define("PARTS", "../application/content/parts/");

/* szkielety stron
 */
define("TEMPLATES", "../application/content/templates/");

/* katalog na logi
 */
define("LOG", "../application/logs/");

/* wersja */
define("TW", " 1.3.2");

include(LIB . 'start.php');

/* DEBUG */
//$tw_time = microtime(true);
//log_message('execution_time', number_format($tw_time - $_SERVER['REQUEST_TIME_FLOAT'], 4) . 's ^' . TW_REQUEST . ' $' . TW_SELECTED);

