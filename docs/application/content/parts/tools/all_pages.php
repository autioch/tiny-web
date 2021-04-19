<?php

function all_pages($path = '') {
    $ignore = array('cgi-bin', '.', '..');
    $dir = opendir(PAGES . $path); //opendir(PAGES . $path);
    echo '<ul style="padding-left:25px">';
    while (false !== ( $file = readdir($dir) )) {
        if (!in_array($file, $ignore)) {
            echo '<li>';
            if (is_dir(PAGES . $path . $file)) {
                echo '<p>', $path, $file, '</p>';
                all_pages($path . $file . "/");
            } else {
                echo '<p>', get_link($path . substr($file, 0, -4));
                echo ' &lt;?php echo_link(\'', $path, substr($file, 0, -4), '\') ?&gt';
                echo '</p>';
            }
            echo '</li>';
        }
    }
    echo '</ul>';
    closedir($dir);
}
