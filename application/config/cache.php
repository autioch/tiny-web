<?php

/* CACHE CONFIGURATION */

/* Turns on/off cache */
$cache['use'] = true;

/* Maximum age of cache files measured in seconds.
 * By default, set to 24 hours: 86400 = 60 * 60 * 24. */
$cache['refresh'] = 86400;

/* List of pages excluded from cache.
 * To temporarily enable caching, set value of particular page to false. */
$nocache['error'] = true;
