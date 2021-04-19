<?php

$uc = 'unknown';
$un = 'brak';
$groups = array();

$groups[] = array(
    'title' => 'Piątek 18.00, Niedziela popołudnie',
    'comp' => array(
        'Tank' => array('Madden' => 'deathknight', 'Pancer' => 'warrior'),
        'Heal' => array('Agimijagi' => 'druid', 'Quenth' => 'shaman'),
        'Ranged' => array('Emiru' => 'priest', 'Pankatuwer' => 'mage', 'Diamondstar' => 'hunter'),
        'Melee' => array('Nogood' => 'paladin', 'Xantil' => 'warrior', 'Thornstar' => 'druid')
    )
);

$groups[] = array(
    'title' => 'Piątek 18.30, Sobota 19.00',
    'comp' => array(
        'Tank' => array('Breakerlol' => 'warrior', 'Roegner' => 'deathknight'),
        'Heal' => array('Janji' => 'paladin', 'Alfraj' => 'druid'),
        'Ranged' => array('Derpington' => 'priest', 'Szpok' => 'hunter', 'Abraksis' => 'mage'),
        'Melee' => array('Ahhmed' => 'warrior', 'Morgof' => 'deathknight', 'Hydro' => 'shaman')
    )
);

$groups[] = array(
    'title' => 'Nowa grupa',
    'comp' => array(
        'Tank' => array($un => $uc, $un . ' ' => $uc),
        'Heal' => array($un => $uc, $un . ' ' => $uc),
        'Ranged' => array($un => $uc, $un . ' ' => $uc, $un . '  ' => $uc),
        'Melee' => array($un => $uc, $un . ' ' => $uc, $un . '  ' => $uc)
    )
);

$groups[] = array(
    'title' => 'Osoby bez grupy',
    'comp' => array(
        'Tank' => array(
            'Bloodmaks' => 'paladin',
            'Jadka' => 'deathknight',
            'Lastimmortal' => 'paladin',
            'Yukinoshi' => 'paladin'
        ),
        'Heal' => array(
            'Aidakan' => 'shaman',
            'Inor' => 'paladin',
            'Oldblood' => 'druid',
            'Rakharran' => 'druid',
            'Shaterson' => 'shaman',
        ),
        'Ranged' => array(
            'Aeris' => 'priest',
            'Amerezis' => 'mage',
            'Anandamid' => 'mage',
            'Azeus' => 'druid',
            'Fire' => 'druid',
            'Grothusk' => 'hunter',
            'Kamelia' => 'warlock',
            'Notohoop' => 'priest',
            'Sakit' => 'priest',
            'Xinder' => 'shaman',
        ),
        'Melee' => array(
            'Alaira' => 'paladin',
            'Dekarr' => 'shaman',
            'Dreaquon' => 'paladin',
            'Enzym' => 'rogue',
            'Girn' => 'warrior',
            'Hydro' => 'shaman',
            'Kenzi' => 'paladin',
            'Magload' => 'deathknight',
            'Motera' => 'rogue',
            'Raiga' => 'rogue',
            'Tishta' => 'warrior',
            'Volish' => 'deathknight',
        )
    )
);
