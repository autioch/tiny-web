<?php

/* MISC FUNCTIONS */

/**
 * Logs message with a timestamp in selected file. If file doesn't exists, it will be created.
 * @param string $file Name of file to store message
 * @param string $string Content of message to store
 */
function log_message($file, $string) {
    file_put_contents(LOG . $file, "\n" . date('y-m-d H:i:s ') . $string, FILE_APPEND | LOCK_EX);
}

/**
 * Simple debugging function.
 * @global type $routing
 * @return string Returns debug info for requests
 */
function get_debug_info() {
    global $routing;
    return '<br>' . $_SERVER['REQUEST_URI'] . '<br>' . $_SERVER['SCRIPT_NAME'] . '<pre>' . print_r($routing, true) . '</pre>';
}

/**
 * Checks if page specified as argument has existing file.
 * @param string $target Page to be tested for file existence
 * @return boolean True if file exists, false otherwise
 */
function check_link($target) {

    if (strlen($target) > 0) {

        if (TW_USE_LOCALE) {
            $tar = PAGES . TW_LANGUAGE . '/' . $target . '.php';
        } else {
            $tar = PAGES . $target . '.php';
        }

        if (!file_exists($tar)) {
            log_message('check_link', $target . ' (' . TW_LANGUAGE . '/' . TW_SELECTED . ')');
            return false;
        } else {
            return true;
        }
    }
}

/**
 * Inner function, used in creation of HTML tags. Order of arguments is dictated by function usage.
 * @param string $des Alternative title attribute of the tag
 * @param string $title Title attribute of the tag
 * @param string $class Class attribute of the tag
 * @param string $id Id attribute of the tag
 * @return string Non-empty attributes of the tag
 */
function qb_get_details($des, $title, $class, $id) {
    $tit = ' title="' . ( (strlen($title) > 0) ? $title : $des ) . '"';
    $cla = (strlen($class) > 0) ? ' class="' . $class . '"' : '';
    $id_ = (strlen($id) > 0) ? ' id="' . $id . '"' : '';
    return $tit . $cla . $id_;
}

/**
 * Sends headers requesting change of location
 * @param type $location Location to which client will be redirected
 */
function redirect($location) {
    log_message('redirect', 'From: ' . TW_SELECTED . ' To: ' . TW_FOLDER . $location);
    header('Location: ' . TW_FOLDER . $location);
}

/**
 * The most important function of TinyWeb.
 * Allows to easily include any file from parts folder.
 * @param string $name Name of the part file
 * @return string Exact path to part file, ready to use with "include"
 */
function partial($name) {
    return PARTS . $name . '.php';
}
