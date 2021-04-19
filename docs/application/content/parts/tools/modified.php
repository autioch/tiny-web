<?php

if (TW_USE_LOCALE) {
    echo date("Y.m.d H:i:s", filemtime(PAGES . TW_LANGUAGE . '/' . TW_SELECTED . '.php'));
} else {
    echo date("Y.m.d H:i:s", filemtime(PAGES . TW_SELECTED . '.php'));
}
