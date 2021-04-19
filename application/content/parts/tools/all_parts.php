<?php

function all_parts($path = '') {
    $ignore = array('cgi-bin', '.', '..');
    $dir = opendir(PARTS . $path);
    echo '<ul style="padding-left:25px">';
    while (false !== ( $file = readdir($dir) )) {
        if (!in_array($file, $ignore)) {
            echo '<li>';
            if (is_dir(PARTS . $path . $file)) {
                echo '<p>', $path, $file, '</p>';
                all_parts($path . $file . "/");
            } else {
                echo '<p class="all-parts-file">', $path, $file;
                echo ' &lt;?php get_part(\'', $path, substr($file, 0, -4), '\'); ?&gt';
                echo '</p>';
            }
            echo '</li>';
        }
    }
    echo '</ul>';
    closedir($dir);
}
