<?php

/* ROUTING CONFIGURATION */

/* PAGE SELECTION */

/* Page selected if none is chosen. */
$routing['default'] = 'about';

/* Page selected in case of any routing errors. */
$routing['error'] = 'about';

/* Fake extension of pages, automatically parsed and added to links. */
$routing['extension'] = '';
//$routing['extension'] = '.html';

/* CONTROLLERS */

/* List of pages that process request themselves
 *
 * Warning!
 * Does NOT work with extensions for multilevel pages
 */
//$routing['controllers'][] = 'documentation';
//$routing['controllers'][] = 'test';
