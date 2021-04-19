<?php

$content['template'] = 'ajax';
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 01 Jan 1996 00:00:00 GMT');
header('Content-type: application/json');
error_reporting(0);
$char = array();

if (isset($_GET['nick'])) {
    $nick = ucfirst(strtolower(preg_replace('/[^a-zA-Z]/', '', $_GET['nick'])));
    include(partial('simple_html_dom'));
    $armory = file_get_html('http://sunwell.pl/armory/character.php?r=Feronis&n=' . $nick);
    if ($armory->find('.armory-specialwrapper')) {
        $char['status'] = 'Nie znaleziono postaci';
    } else {
        $char['status'] = 'OK';
        //$char['nick'] = $armory->find('.armory-name', 0)->plaintext;
        $char['level'] = $armory->find('.armory-portrait-level', 0)->plaintext;
        //race
        //class
        $char['spec1'] = $armory->find('.armory-talentspec0 .armory-talentspec-name', 0)->plaintext;
        $char['spec2'] = $armory->find('.armory-talentspec1 .armory-talentspec-name', 0)->plaintext;
        $char['ilevel'] = $armory->find('#avgitemlevel-container', 0)->last_child()->plaintext;
        $char['guild'] = $armory->find('.armory-chartab-guildname', 0)->plaintext;
        //$char['prof1'] = $armory->find('.armory-profession-name0', 0)->plaintext;
        $char['prof1'] = $armory->find('.armory-profession-name1', 0)->plaintext;
        $char['prof2'] = $armory->find('.armory-profession-name2', 0)->plaintext;

        /*
          $char['about'] = $armory->find('.armory-chartab-apnum', 0)->plaintext . ' Achievment Points';
          $char['prof1level'] = $armory->find('.armory-profession-value1', 0)->plaintext;
          $char['prof1level'] = substr($char['prof1level'], 0, strpos($char['prof1level'], '/'));
          $char['prof2level'] = $armory->find('.armory-profession-value2', 0)->plaintext;
          $char['prof2level'] = substr($char['prof2level'], 0, strpos($char['prof2level'], '/'));

          $char['race'] = $armory->getElementById('armory-char-right-info')->last_child()->plaintext;
         */
    }
} else {
    $char['status'] = 'Nie podano nicku';
}

foreach ($char as $key => $val) {
    $char[$key] = trim($char[$key]);
}
echo json_encode($char);
//print_r($char);