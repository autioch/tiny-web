<?php

function boss($val) {
    switch ($val) {
        case -1 :
            echo get_image('checks/pass.png', '.', 'encounter-image pass');
            break;
        case 0 :
            echo get_image('checks/bad.png', '-', 'encounter-image bad');
            break;
        case 1 :
            echo get_image('checks/ok.png', '+', 'encounter-image ok');
            break;
    }
}

$raids = array(
    'Icecrown Citadel' => array(
        'Lord Marrowgar' => array('10n' => 1, '10h' => 1, '25n' => 1, '25h' => 0),
        'Lady Deathwhisper' => array('10n' => 1, '10h' => 1, '25n' => 1, '25h' => 0),
        'Gunship Battle' => array('10n' => -1, '10h' => -1, '25n' => -1, '25h' => -1),
        'Deathbringer Saurfang' => array('10n' => 1, '10h' => 1, '25n' => 1, '25h' => 0),
        'Rotface' => array('10n' => 1, '10h' => 1, '25n' => 1, '25h' => 0),
        'Festergut' => array('10n' => 1, '10h' => 1, '25n' => 1, '25h' => 0),
        'Proffesor Putricide' => array('10n' => 1, '10h' => 0, '25n' => 0, '25h' => 0),
        'Bloodprince Council' => array('10n' => 1, '10h' => 1, '25n' => 1, '25h' => 0),
        'Blood Queen Lanathel' => array('10n' => 1, '10h' => 1, '25n' => 1, '25h' => 0),
        'Valithiria Dreamwalker' => array('10n' => 1, '10h' => 0, '25n' => 1, '25h' => 0),
        'Sindragosa' => array('10n' => 1, '10h' => 0, '25n' => 0, '25h' => 0),
        'The Lich King' => array('10n' => 1, '10h' => 0, '25n' => 0, '25h' => 0),
    ),
    'Trial of the Crusader' => array(
        'Beasts of the Northrend' => array('10n' => 1, '10h' => 1, '25n' => 1, '25h' => 1),
        'Lord Jarraxus' => array('10n' => 1, '10h' => 1, '25n' => 1, '25h' => 1),
        'Faction Champions' => array('10n' => 1, '10h' => 1, '25n' => 1, '25h' => 1),
        'Twin Valkyr' => array('10n' => 1, '10h' => 1, '25n' => 1, '25h' => 1),
        'Anubarak' => array('10n' => 1, '10h' => 1, '25n' => 1, '25h' => 0),
        'Insanity' => array('10n' => -1, '10h' => 1, '25n' => -1, '25h' => 0),
    ),
    'Ulduar' => array(
        'Flame Leviathan' => array('10n' => 0, '10h' => 0, '25n' => 1, '25h' => 0),
        'Ignis the Furnace Master' => array('10n' => 0, '10h' => 0, '25n' => 1, '25h' => 0),
        'Razorscale' => array('10n' => 0, '10h' => 0, '25n' => 1, '25h' => 0),
        'XT-002 Deconstructor' => array('10n' => 0, '10h' => 0, '25n' => 1, '25h' => 0),
        'The Assembly of Iron' => array('10n' => 0, '10h' => 0, '25n' => 1, '25h' => 0),
        'Kologarn' => array('10n' => 0, '10h' => 0, '25n' => 1, '25h' => 0),
        'Auriaya' => array('10n' => 0, '10h' => 0, '25n' => 0, '25h' => 0),
        'Mimiron' => array('10n' => 0, '10h' => 0, '25n' => 0, '25h' => 0),
        'Freya' => array('10n' => 0, '10h' => 0, '25n' => 0, '25h' => 0),
        'Thorim' => array('10n' => 0, '10h' => 0, '25n' => 0, '25h' => 0),
        'Hodir' => array('10n' => 0, '10h' => 0, '25n' => 0, '25h' => 0),
        'General Vezax' => array('10n' => 0, '10h' => 0, '25n' => 0, '25h' => 0),
        'Yogg-Saron' => array('10n' => 0, '10h' => 0, '25n' => 0, '25h' => 0),
        'Algalon the Observer' => array('10n' => 0, '10h' => 0, '25n' => 0, '25h' => 0),
    ),
    'Naxxramas' => array(
        'AnubRekhan' => array('10n' => 1, '10h' => -1, '25n' => 0, '25h' => -1),
        'Grand Widow Faerlina' => array('10n' => 1, '10h' => -1, '25n' => 0, '25h' => -1),
        'Maexxna ' => array('10n' => 1, '10h' => -1, '25n' => 0, '25h' => -1),
        'Patchwerk' => array('10n' => 1, '10h' => -1, '25n' => 0, '25h' => -1),
        'Grobbulus' => array('10n' => 1, '10h' => -1, '25n' => 0, '25h' => -1),
        'Gluth' => array('10n' => 1, '10h' => -1, '25n' => 0, '25h' => -1),
        'Thaddius ' => array('10n' => 1, '10h' => -1, '25n' => 0, '25h' => -1),
        'Noth the Plaguebringer' => array('10n' => 1, '10h' => -1, '25n' => 0, '25h' => -1),
        'Heigan the Unclean' => array('10n' => 1, '10h' => -1, '25n' => 0, '25h' => -1),
        'Loatheb ' => array('10n' => 1, '10h' => -1, '25n' => 0, '25h' => -1),
        'Instructor Razuvious' => array('10n' => 1, '10h' => -1, '25n' => 0, '25h' => -1),
        'Gothik the Harvester' => array('10n' => 1, '10h' => -1, '25n' => 0, '25h' => -1),
        'The Four Horsemen ' => array('10n' => 1, '10h' => -1, '25n' => 0, '25h' => -1),
        'Sapphiron' => array('10n' => 1, '10h' => -1, '25n' => 0, '25h' => -1),
        'KelThuzad ' => array('10n' => 1, '10h' => -1, '25n' => 0, '25h' => -1),
    ),
);
