<?php

/* CACHE PROCESSING */

/* check if selected page is cachable */
if (!(key_exists(TW_SELECTED, $nocache)) || !($nocache[TW_SELECTED])) {

    /* depending on the settings,
     * hash the name of the file to avoid bad characters
     */
    if (TW_USE_LOCALE) {
        $cache['md5'] = md5(TW_LANGUAGE . '/' . TW_SELECTED);
    } else {
        $cache['md5'] = md5(TW_SELECTED);
    }

    /* check if requested page is already cached */
    if (file_exists(CACHE . $cache['md5'])) {

        /* check if cached page is still fresh */
        if ((time() - filemtime(CACHE . $cache['md5'])) < $cache['refresh']) {

            /* if everything is ok, we have cached page
             * that can be served instead of running the rest of the script */
            $cache['is_cached'] = true;
        }
    }
}

