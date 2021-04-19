<?php

/**
 * Prints link to the page from <var>content/pages</var> folder.
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
function echo_link($target, $description = '', $title = '', $class = '', $id = '')
{
    echo get_link($target, $description, $title, $class, $id);
}

/**
 * Prints a link to download a file from public_html/download folder.
 *
 * @param string $file        name of the file to download
 * @param string $description description of the link
 * @param string $title       title attribute of the link when mouseovered
 * @param string $class       class attribute of the link, used in CSS and JS
 * @param string $id          id attribute of the link, used in CSS and JS
 *
 * @return string full link to a file in <var>public_html/download</var> folder
 */
function echo_download($file, $description = '', $title = '', $class = '', $id = '')
{
    echo get_download($file, $description, $title, $class, $id);
}

/**
 * Prints simply hashed email link.
 *
 * @param string $email       address of the email
 * @param string $description description of the link
 * @param string $title       title attribute of the link when mouseovered
 * @param string $class       class attribute of the link, used in CSS and JS
 * @param string $id          id attribute of the link, used in CSS and JS
 *
 * @return string full email link.
 */
function echo_email($email, $description = '', $title = '', $class = '', $id = '')
{
    echo get_email($email, $description, $title, $class, $id);
}

/**
 * Prints full <img> tag to insert an image in page.
 *
 * @param string $src    file name of the image in the <var>public_html/images/</var> folder
 * @param string $title  title attribute of the image when mouseovered or not displayed
 * @param string $class  class attribute of the image, used in CSS and JS
 * @param string $id     id attribute of the image, used in CSS and JS
 * @param int    $width  width attribute of image
 * @param int    $height height attribute of image
 *
 * @return string full <img> tag.
 */
function echo_image($src, $title = '', $class = '', $id = '', $width = '', $height = '')
{
    echo get_image($src, $title, $class, $id, $width, $height);
}

/**
 * Prints a flash object HTML code.
 *
 * @param string $data   file name of the swf file to insert.
 * @param int    $width  width of the object in the page
 * @param int    $height height of the object in the page
 * @param string $class  class attribute of the object, used in CSS and JS
 * @param string $id     id attribute of the image, used in CSS and JS
 *
 * @return string Full HTMl code to insert a flash file in page
 */
function echo_flash($data, $width, $height, $class = '', $id = '')
{
    echo get_flash($data, $width, $height, $class, $id);
}

/**
 * Prints a path to a resource, usefull in various situations.
 *
 * @param string $target Resource to which address will be returned
 *
 * @return string Full address with folder to the resource
 */
function echo_address($target)
{
    echo get_address($target);
}

/**
 * Prints link to any site. It automatically opens in new tab/window.
 *
 * @param string $target      target of the link
 * @param string $description description of the link
 * @param string $title       title attribute of the link when mouseovered
 * @param string $class       class attribute of the link, used in CSS and JS
 * @param string $id          id attribute of the link, used in CSS and JS
 *
 * @return string full link any site
 */
function echo_link_remote($target, $description = '', $title = '', $class = '', $id = '')
{
    echo get_link_remote($target, $description, $title, $class, $id);
}

/**
 * Prints link switching site language. Use when localize option is enabled.
 *
 * @param string $language    language to which content should be switched.
 * @param string $description description of the link
 * @param string $title       title attribute of the link when mouseovered
 * @param string $class       class attribute of the link, used in CSS and JS
 * @param string $id          id attribute of the link, used in CSS and JS
 *
 * @return string full link to change the site language.
 */
function echo_link_language($language, $description = '', $title = '', $class = '', $id = '')
{
    echo get_link_language($language, $description, $title, $class, $id);
}
