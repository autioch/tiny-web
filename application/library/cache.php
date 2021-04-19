<?php

/* CACHE PROCESSING */

/* Check if selected page is cachable */
if (!(key_exists(TW_SELECTED, $nocache)) || !($nocache[TW_SELECTED])) {
    /* Depending on the settings, hash the name of the file to avoid bad characters. */
    $cache['md5'] = md5(TW_USE_LOCALE ? (TW_LANGUAGE . '/' . TW_SELECTED) : TW_SELECTED);

    /* Check if requested page is already cached. */
    if (file_exists(CACHE . $cache['md5'])) {
        /* Check if cached page is still fresh. */
        if ((time() - filemtime(CACHE . $cache['md5'])) < $cache['refresh']) {
            /* If everything is ok, we have cached page.
             * It can be served instead of running the rest of the script. */
            $cache['is_cached'] = true;
        }
    }
}
