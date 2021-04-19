<?php

/**
 * Returns link to the page from <var>content/pages</var> folder.
 * All links generated that way are automatically checked,
 * and if they lead to current page or page above, they receive class <var>active</var>
 * in addition to their other class.
 *
 * @param string $target      target of the link, select a file in <var>content/pages</var>
 * @param string $description description of the link
 * @param string $title       title attribute of the link when mouseovered
 * @param string $class       class attribute of the link, used in CSS and JS
 * @param string $id          id attribute of the link, used in CSS and JS
 *
 * @return string full link to another page in website
 */
function get_link($target, $description = '', $title = '', $class = '', $id = '')
{
    if (TW_DEBUG) {
        check_link($target);
    }

    /* Check if extension is required. */
    $tar = mb_strlen($target) > 0 ? $target . TW_EXT : '';

    /* Check if language part should be added. */
    if (TW_USE_LOCALE) {
        $tar = ' href="' . TW_FOLDER . TW_LANGUAGE . '/' . $tar . '"';
    } else {
        $tar = ' href="' . TW_FOLDER . $tar . '"';
    }

    /* Define description. */
    $des = (mb_strlen($description) > 0) ? $description : $target;

    /* Check if link is on the path to active page. */
    $cla = $class;
    if ((mb_strlen($target) > 0) && (mb_strpos(TW_SELECTED, $target) === 0)) {
        if (mb_strlen($cla) > 0) {
            $cla .= ' active';
        } else {
            $cla = 'active';
        }
    }

    return '<a' . qb_get_details($des, $title, $cla, $id) . $tar . '>' . $des . '</a>';
}

/**
 * Returns a link to download a file from public_html/download folder.
 *
 * @param string $file        name of the file to download
 * @param string $description description of the link
 * @param string $title       title attribute of the link when mouseovered
 * @param string $class       class attribute of the link, used in CSS and JS
 * @param string $id          id attribute of the link, used in CSS and JS
 *
 * @return string full link to a file in <var>public_html/download</var> folder
 */
function get_download($file, $description = '', $title = '', $class = '', $id = '')
{
    $tar = ' href="' . TW_FOLDER . 'download/' . $file . '"';

    $des = (mb_strlen($description) > 0) ? $description : $file;

    return '<a target="_blank"' . qb_get_details($des, $title, $class, $id) . $tar . '>' . $des . '</a>';
}

/**
 * Returns simply hashed email link.
 *
 * @param string $email       address of the email
 * @param string $description description of the link
 * @param string $title       title attribute of the link when mouseovered
 * @param string $class       class attribute of the link, used in CSS and JS
 * @param string $id          id attribute of the link, used in CSS and JS
 *
 * @return string full email link
 */
function get_email($email, $description = '', $title = '', $class = '', $id = '')
{
    $des = (mb_strlen($description) > 0) ? $description : $email;

    $tar = '';
    $ema = str_split(trim('ailto:' . $email));
    foreach ($ema as $val) {
        $tar .= '&#' . ord($val) . ';';
    }
    $tar = ' href="m' . $tar . '"';

    return '<a' . qb_get_details($des, $title, $class, $id) . $tar . '>' . $des . '</a>';
}

/**
 * Returns full <img> tag to insert an image in page.
 *
 * @param string $src    file name of the image in the <var>public_html/images/</var> folder
 * @param string $title  title attribute of the image when mouseovered or not displayed
 * @param string $class  class attribute of the image, used in CSS and JS
 * @param string $id     id attribute of the image, used in CSS and JS
 * @param int    $width  width attribute of image
 * @param int    $height height attribute of image
 *
 * @return string full <img> tag
 */
function get_image($src, $title = '', $class = '', $id = '', $width = '', $height = '')
{
    $tar = ' src="' . TW_FOLDER . 'images/' . $src . '"';
    $wid = (mb_strlen($width) > 0) ? ' width="' . $width . '"' : '';
    $hei = (mb_strlen($height) > 0) ? ' height="' . $height . '"' : '';
    $al_ = ' alt="' . ((mb_strlen($title) > 0) ? $title : $src) . '"';

    return '<img' . qb_get_details($src, $title, $class, $id) . $al_ . $wid . $hei . $tar . '>';
}

/**
 * Returns a flash object HTML code.
 *
 * @param string $data   file name of the swf file to insert
 * @param int    $width  width of the object in the page
 * @param int    $height height of the object in the page
 * @param string $class  class attribute of the object, used in CSS and JS
 * @param string $id     id attribute of the image, used in CSS and JS
 *
 * @return string Full HTMl code to insert a flash file in page
 */
function get_flash($data, $width, $height, $class = '', $id = '')
{
    $tar = ' data="' . TW_FOLDER . 'flash/' . $data . '"';
    $val = ' value="' . TW_FOLDER . 'flash/' . $data . '"';

    $wid = (mb_strlen($width) > 0) ? ' width="' . $width . '"' : '';
    $hei = (mb_strlen($height) > 0) ? ' height="' . $height . '"' : '';

    $obj = '<object' . qb_get_details($data, $data, $class, $id) . $wid . $hei;
    $obj .= ' type="application/x-shockwave-flash"' . $tar . '>';
    $obj .= "\n" . '<param' . $val . ' name="movie">' . "\n" . '</object>';

    return $obj;
}

/**
 * Returns a path to a resource, usefull in various situations.
 *
 * @param string $target Resource to which address will be returned
 *
 * @return string Full address with folder to the resource
 */
function get_address($target)
{
    return TW_FOLDER . $target;
}

/**
 * Returns link to any site. It automatically opens in new tab/window.
 *
 * @param string $target      target of the link
 * @param string $description description of the link
 * @param string $title       title attribute of the link when mouseovered
 * @param string $class       class attribute of the link, used in CSS and JS
 * @param string $id          id attribute of the link, used in CSS and JS
 *
 * @return string full link any site
 */
function get_link_remote($target, $description = '', $title = '', $class = '', $id = '')
{
    $tar = ' href="' . $target . '"';
    $des = (mb_strlen($description) > 0) ? $description : $target;

    return '<a' . qb_get_details($des, $title, $class, $id) . $tar . ' target="_blank">' . $des . '</a>';
}

/**
 * Returns link switching site language. Use when localize option is enabled.
 *
 * @param string $language    language to which content should be switched
 * @param string $description description of the link
 * @param string $title       title attribute of the link when mouseovered
 * @param string $class       class attribute of the link, used in CSS and JS
 * @param string $id          id attribute of the link, used in CSS and JS
 *
 * @return string full link to change the site language
 */
function get_link_language($language, $description = '', $title = '', $class = '', $id = '')
{
    $tar = ' href="' . TW_FOLDER . $language . '/' . TW_SELECTED . TW_EXT . '"';
    $des = (mb_strlen($description) > 0) ? $description : $language;

    $cla = (TW_LANGUAGE == $language) ? 'current' : '';
    $cla .= ((mb_strlen($cla) > 0) && (mb_strlen($class) > 0)) ? ' ' : '';
    $cla .= $class;

    return '<a' . qb_get_details($des, $title, $cla, $id) . $tar . '>' . $des . '</a>';
}
