<?php

$path = explode('/', TW_SELECTED);
$l = '';
$t = '';
foreach ($path as $val) {
    $l .= (strlen($l) > 0 ) ? '/' . $val : $val;
    $t = ((strlen($t) > 0 ) ? $dict[$l] . ' - ' : $dict[$l]) . $t;
}
$content['title'] = $t . $content['title'];
