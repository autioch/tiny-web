<?php

$dictionary = array(
    /* pages */
    'about' => array('pl' => 'O nas', 'en' => 'About'),
    'addons' => array('pl' => 'Addony', 'en' => 'Addons'),
    'error' => array('pl' => 'Błąd', 'en' => 'Error'),
    'news' => array('pl' => 'Newsy', 'en' => 'News'),
    'progress' => array('pl' => 'Progres', 'en' => 'Progress'),
    'raids' => array('pl' => 'Rajdy', 'en' => 'Raids'),
    'recruitment' => array('pl' => 'Rekrutacja', 'en' => 'Join us'),
    'rules' => array('pl' => 'Zasady', 'en' => 'Rules'),
    'recruitment/form' => array('pl' => 'Formularz zgłoszeniowy', 'en' => 'Recruitment Form'),
    'rules/dkp' => array('pl' => 'Zasady DKP', 'en' => 'DKP Rules'),
    'rules/ranks' => array('pl' => 'Rangi', 'en' => 'Ranks'),
    /* texts */
    'presentation-info' => array('pl' => 'To jest wersja demonstracyjna. 
        Zmiana ustawień powoduje zapisanie ciasteczka i oznacza zgodę na ich przechowywanie.',
        'en' => 'This is demo version. Changing settings equals saving a cookie and agreement to store them.'),
    'theme-select' => array('pl' => 'Szablon: ', 'en' => 'Template: '),
    'lang-select' => array('pl' => 'Język: ', 'en' => 'Language: '),
    'lang-en' => array('pl' => 'Angielski', 'en' => 'English'),
    'lang-pl' => array('pl' => 'Polski', 'en' => 'Polish'),
    'reqruitment-thanks' => array('pl' => 'Dziękujemy za złożenie podania. W najbliższym czasie skontakuje się z '
        . 'Tobą nasz rekrutant. Jeśli nie spotka Cię online, skontakuje się na podany adres mailowy.',
        'en' => 'Thanks for applying. Our recrutant will contact you online or by the given email.'),
    'error' => array('pl' => 'Co poszło nie tak. Zapraszam z powrotem na ' . get_link('', 'stronę główną'),
        'en' => 'Looks like something got pulled into the void. Please go to the' . get_link('', 'main page')),
    'addon-required' => array('pl' => 'Wymagane', 'en' => 'Required'),
    'addon-advised' => array('pl' => 'Polecane', 'en' => 'Advised'),
    'addon-miscellaneous' => array('pl' => 'Różne', 'en' => 'Miscellaneous'),
    'addon-banned' => array('pl' => 'Niedozwolone', 'en' => 'Banned'),
    'addon-name' => array('pl' => 'Nazwa', 'en' => 'Name'),
    'addon-details' => array('pl' => 'Opis', 'en' => 'Details'),
    'addon-version' => array('pl' => 'Wersja', 'en' => 'Version'),
    'addon-download' => array('pl' => 'Download', 'en' => 'Download'),
    'addon-download2' => array('pl' => 'Pobierz', 'en' => 'Get it'),
    'about-leaders' => array('pl' => 'Podstawowe info', 'en' => 'Most important'),
    'important-news' => array('pl' => 'Ważne', 'en' => 'Important'),
    'about-officers' => array('pl' => 'Oficerka', 'en' => 'Officers'),
    '' => array('pl' => '', 'en' => ''),
    '' => array('pl' => '', 'en' => ''),
    '' => array('pl' => '', 'en' => ''),
    '' => array('pl' => '', 'en' => ''),
);

include_once LIB . 'qbDictionary.class.php';

$dict = new qbDictionary($dictionary, TW_LANGUAGE);
