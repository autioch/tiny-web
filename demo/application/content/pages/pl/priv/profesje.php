<?php
$prof = array();
$prof['Mining'] = array(
    'hordeD' => array('Shardless' => 'warlock', 'Icewallow' => 'mage'),
    'hordeJ' => array('Amancik' => 'paladin', 'Heflena' => 'shaman'),
    'allyD' => array('Eilan' => 'warlock', 'Rhapsody' => 'priest'),
    'allyJ' => array('Alard' => 'paladin'),
);

$prof['Herbalism'] = array(
    'hordeD' => array('Emiru' => 'priest'),
    'hordeJ' => array(),
    'allyD' => array(),
    'allyJ' => array('Gaenna' => 'druid'),
);

$prof['Skinning'] = array(
    'hordeD' => array(),
    'hordeJ' => array('Heflena' => 'shaman'),
    'allyD' => array(),
    'allyJ' => array('Irrissa' => 'shaman'),
);

$prof['Tailoring'] = array(
    'hordeD' => array(),
    'hordeJ' => array('Forepray' => 'priest'),
    'allyD' => array('Mindblowing' => 'priest'),
    'allyJ' => array(),
);

$prof['Leatherworking'] = array(
    'hordeD' => array(),
    'hordeJ' => array(),
    'allyD' => array(),
    'allyJ' => array('Irrissa' => 'shaman'),
);

$prof['Blacksmithing'] = array(
    'hordeD' => array(),
    'hordeJ' => array('Thornstar' => 'druid'),
    'allyD' => array(),
    'allyJ' => array(),
);

$prof['Jewelcrafting'] = array(
    'hordeD' => array('Icewallow' => 'mage'),
    'hordeJ' => array('Thornstar' => 'druid'),
    'allyD' => array('Eilan' => 'warlock', 'Rhapsody' => 'priest'),
    'allyJ' => array(),
);

$prof['Enchanting'] = array(
    'hordeD' => array(),
    'hordeJ' => array('Forepray' => 'priest'),
    'allyD' => array('Mindblowing' => 'priest'),
    'allyJ' => array('Arald' => 'paladin'),
);

$prof['Inscription'] = array(
    'hordeD' => array(),
    'hordeJ' => array(),
    'allyD' => array(),
    'allyJ' => array('Gaenna' => 'druid'),
);

$prof['Engineering'] = array(
    'hordeD' => array('Shardless' => 'warlock'),
    'hordeJ' => array('Amancik' => 'paladin'),
    'allyD' => array(),
    'allyJ' => array('Arald' => 'paladin', 'Alard' => 'paladin'),
);

$prof['Alchemy'] = array(
    'hordeD' => array('Emiru' => 'priest'),
    'hordeJ' => array(),
    'allyD' => array(),
    'allyJ' => array(),
);




include(partial('tools'));
?>
<h3>Profesje</h3>
<table>
    <thead>
        <tr>
            <th>Profesja</th>
            <th>Horde Daria</th>
            <th>Horde Jakub</th>
            <th>Alliance Daria</th>
            <th>Alliance Jakub</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($prof as $p => $faction) : ?>
            <tr>
                <td style="text-align: left;vertical-align: top;"><?php echo $p ?></td>
                <?php foreach ($faction as $f => $chars) : ?>
                    <td style="text-align: left;vertical-align: top;">
                        <ul style="list-style-type: none;">
                            <?php foreach ($chars as $nick => $class) : ?>
                                <li><?php echo armory_char($nick, $class) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

