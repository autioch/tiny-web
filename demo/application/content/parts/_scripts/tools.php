<?php

function armory_char($name, $class) {
    if (isset($class)) {
        $desc = '<span class="class-icon-container">' . get_image('classes/classes.png', $class, 'class-icon ' . $class . '-icon') . '</span>&nbsp;';
    }
    echo_link_remote('http://sunwell.pl/armory/character.php?r=Feronis&amp;n=' . $name, $desc . $name, $name, $class . ' class-link');
}

$week = array(
    1 => 'Poniedziałek',
    2 => 'Wtorek',
    3 => 'Środa',
    4 => 'Czwartek',
    5 => 'Piątek',
    6 => 'Sobota',
    7 => 'Niedziela',
);

$age = array(15 => '<16');
for ($i = 16; $i < 30; $i++) {
    $age[$i] = $i;
}
$age[30] = '30+';

$level = array(80 => '80');
for ($i = 79; $i > 0; $i--) {
    $level[$i] = $i;
}

$spec = array(
    'heal' => 'Heal',
    'tank' => 'Tank',
    'dps' => 'DPS'
);

$races = array(
    'belf' => 'Blood Elf',
    'tauren' => 'Tauren',
    'troll' => 'Troll',
    'orc' => 'Orc',
    'undead' => 'Undead',
);

$classes = array(
    'priest' => 'Priest',
    'warlock' => 'Warlock',
    'mage' => 'Mage',
    'rogue' => 'Rogue',
    'druid' => 'Druid',
    'hunter' => 'Hunter',
    'shaman' => 'Shaman',
    'paladin' => 'Paladin',
    'warrior' => 'Warrior',
    'deathknight' => 'Death Knight',
);

$recruit = array(
    'Priest' => array('Disco' => 1, 'Holy' => 1, 'Shadow' => 0),
    'Warlock' => array('Affliction' => 0, 'Demonology' => 1, 'Destruction' => 1),
    'Mage' => array('Arcane' => 0, 'Fire' => 0, 'Frost' => 0),
    'Rogue' => array('Assasination' => 1, 'Combat' => 1, 'Subtlety' => 0),
    'Druid' => array('Balance' => 0, 'Feral' => 1, 'Restoration' => 0),
    'Hunter' => array('Beast Mastery' => 0, 'Marksmanship' => 1, 'Survival' => 0),
    'Shaman' => array('Elemental' => 1, 'Enhancement' => 1, 'Restoration' => 1),
    'Paladin' => array('Holy' => 1, 'Protection' => 1, 'Retribution' => 0),
    'Warrior' => array('Arms' => 0, 'Fury' => 0, 'Protection' => 1),
    'Death Knight' => array('Blood' => 0, 'Frost' => 0, 'Unholy' => 0),
);
