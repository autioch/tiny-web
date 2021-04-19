<?php

/* Template functions */

/**
 * Prints a <link> for a css file
 * @param string $file
 * @param string $id
 * @param string $media
 * @param string $extension
 */
function css_echo($file, $id = '', $media = 'screen', $extension = 'css') {
    $id_ = (strlen($id) > 0) ? ' id="' . $id . '"' : '';
    $hre = TW_FOLDER . 'css/' . $file . '.' . $extension;
    echo PHP_EOL, '<link rel="stylesheet" type="text/css" href="', $hre, '" media="', $media, '"', $id_, '>';
}

/**
 * Queues a <link> for a css file to be printed with echo_default_css
 * @global array $css global array of css files to be included in a template
 * @param string $file
 * @param string $id
 * @param string $media
 * @param string $extension
 */
function css_add($file, $id = '', $media = 'screen', $extension = 'css') {
    global $css;
    $css[$file] = array('id' => $id, 'media' => $media, 'extension' => $extension);
}

/**
 * Removes named file from a queue of echo_default_css
 * @global array $css global array of css files to be included in a template
 * @param string $file name css file to be excluded
 */
function css_ignore($file) {
    global $css;
    unset($css[$file]);
}

/**
 * Prints a <script> for a js file
 * @param string $file
 * @param string $id
 * @param string $defer
 * @param string $extension
 */
function js_echo($file, $id = '', $defer = true, $extension = 'js') {
    $id_ = (strlen($id) > 0) ? ' id="' . $id . '"' : '';
    $def = $defer ? ' defer="defer"' : '';
    $src = TW_FOLDER . 'js/' . $file . '.' . $extension;
    echo PHP_EOL, '<script type="', JS_TYPE, '" src="', $src, '"', $def, $id_, '></script>';
}

/**
 * Queues a <script> for a js file to be printed with echo_default_js
 * @global array $js
 * @param string $file
 * @param string $id
 * @param string $defer
 * @param string $extension
 */
function js_add($file, $id = '', $defer = true, $extension = 'js') {
    global $js;
    $js[$file] = array('id' => $id, 'defer' => $defer, 'extension' => $extension);
}

/**
 * Removes named file from a queue of echo_default_js
 * @global array $js global array of js files to be included in a template
 * @param string $file name js file to be excluded
 */
function js_ignore($file) {
    global $js;
    unset($js[$file]);
}

/**
 * Prints all css files that were configured in <var>config/content.php</var> or added
 * with css_add function
 * @global array $css global array of css files to be included in a template
 * @global array $css_ignore global array of pages with css files to ignore
 * @global array $css_add global array of pages with css files to add
 */
function echo_default_css() {
    global $css;
    global $css_ignore;
    global $css_add;

    if (key_exists(TW_SELECTED, $css_ignore)) {
        $css = array_diff_key($css, array_flip(explode(',', $css_ignore[TW_SELECTED])));
    }

    if (key_exists(TW_SELECTED, $css_add)) {
        $css = array_merge($css, array_flip(explode(',', $css_add[TW_SELECTED])));
    }

    foreach ($css as $file => $attr) {
        if (is_array($attr)) {
            css_echo($file, $attr['id'], $attr['media'], $attr['extension']);
        } else {
            css_echo($file);
        }
    }
}

/**
 * Prints all js files that were configured in <var>config/content.php</var> or added
 * with js_add function
 * @global array $js global array of js files to be included in a template
 * @global array $js_ignore global array of pages with js files to ignore
 * @global array $js_add global array of pages with js files to add
 */
function echo_default_js() {
    global $js;
    global $js_ignore;
    global $js_add;

    if (key_exists(TW_SELECTED, $js_ignore)) {
        $js = array_diff_key($js, array_flip(explode(',', $js_ignore[TW_SELECTED])));
    }

    if (key_exists(TW_SELECTED, $js_add)) {
        $js = array_merge($js, array_flip(explode(',', $js_add[TW_SELECTED])));
    }

    foreach ($js as $file => $attr) {
        if (is_array($attr)) {
            js_echo($file, $attr['id'], $attr['defer'], $attr['extension']);
        } else {
            js_echo($file);
        }
    }
}
