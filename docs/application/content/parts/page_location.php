<h3 class="location-title"><?php echo $dict[TW_SELECTED] ?></h3>
<h5 class="location-path">
    <?php
    echo_link('', 'Start','','location-link');
    $path = explode('/', TW_SELECTED);
    $l = '';
    $t = '';
    foreach ($path as $val) {
        $l .= (strlen($l) > 0 ) ? '/' . $val : $val;
        $t = ((strlen($t) > 0 ) ? $dict[$l] . ' - ' : $dict[$l]) . $t;
        echo get_image('arrow.png','','location-arrow'), get_link($l, $dict[$l],'','location-link');
    }
    $content['title'] = $t . $content['title'];
    ?>
</h5>