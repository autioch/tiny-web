<?php

$dictionary = array(
    'about' => array('pl' => 'O TinyWeb', 'en' => 'About'),
    'config' => array('pl' => 'Konfiguracja', 'en' => 'Configuration'),
    'config/cache' => array('pl' => 'Cache', 'en' => 'Cache'),
    'config/controllers' => array('pl' => 'Kontrolery', 'en' => 'Controllers'),
    'config/extensions' => array('pl' => 'Rozszerzenia', 'en' => 'Extensions'),
    'config/i18n' => array('pl' => 'i18n', 'en' => 'i18n'),
    'contact' => array('pl' => 'Kontakt', 'en' => 'Contact'),
    'contact/author' => array('pl' => 'Autor', 'en' => 'Author'),
    'contact/bug-report' => array('pl' => 'Błędy', 'en' => 'Bugs'),
    'contact/help' => array('pl' => 'Pomoc', 'en' => 'Help'),
    'documentation' => array('pl' => 'Dokumentacja', 'en' => 'Docs'),
    'documentation/constants' => array('pl' => 'Stałe', 'en' => 'Constants'),
    'documentation/pages' => array('pl' => 'Strony', 'en' => 'Pages'),
    'documentation/parts' => array('pl' => 'Parts', 'en' => 'Parts'),
    'documentation/templates' => array('pl' => 'Szablony', 'en' => 'Templates'),
    'documentation/functions-html' => array('pl' => 'Funkcje HTML', 'en' => 'HTML Functions'),
    'documentation/functions-other' => array('pl' => 'Inne Funkcje', 'en' => 'Other Functions'),
    'download' => array('pl' => 'Download', 'en' => 'Download'),
    'features' => array('pl' => 'Możliwości', 'en' => 'Features'),
    'internal' => array('pl' => 'Pod maską', 'en' => 'How it works'),
    'internal/functions' => array('pl' => 'Funkcje', 'en' => 'Functions'),
    'internal/keywords' => array('pl' => 'Zmienne', 'en' => 'Variables'),
    'internal/library' => array('pl' => 'Biblioteka', 'en' => 'Library'),
    'internal/processing' => array('pl' => 'Przetwarzanie', 'en' => 'Processing'),
    'modified' => array('pl' => 'Ostatnio zmodyfikowany: ', 'en' => 'Last modified: '),
    'tutorial' => array('pl' => 'Tutorial', 'en' => 'Tutorial'),
    'tutorial/config' => array('pl' => 'Konfiguracja', 'en' => 'Config'),
    'tutorial/plugins' => array('pl' => 'Pluginy', 'en' => 'Plugins'),
    'tutorial/setup' => array('pl' => 'Setup', 'en' => 'Setup'),
    'tutorial/structure' => array('pl' => 'Struktura', 'en' => 'Structure'),
);

include_once LIB . 'qbDictionary.class.php';

$dict = new qbDictionary($dictionary, TW_LANGUAGE);
