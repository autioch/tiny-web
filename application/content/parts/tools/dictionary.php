<?php

$dictionary = array(
    'about' => array('pl' => 'O TinyWeb', 'en' => 'About'),
);

include_once LIB . 'qbDictionary.class.php';

$dict = new qbDictionary($dictionary, TW_LANGUAGE);
