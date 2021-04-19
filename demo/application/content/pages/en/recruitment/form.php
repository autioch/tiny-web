<h3 class="section-title"><?php echo $dict['recruitment/form'] ?></h3>
<script type="text/javascript">
    window.recruitUrl = '<?php echo get_address('ajax/armory?nick=') ?>';
</script>
<?php
include_once(LIB . 'qbWebForm.class.php');

$form = new qbWebForm('form-recruitment', get_address('recruitment/form'), 'post');
$form->add_label('char', 'Informacje o Twojej postaci');
$form->add_text('nick', 'Nazwa postaci w grze', 'Podaj nick postaci');
//$form->add_select('level', 'Poziom', $level, 'Wybierz poziom postaci');
//$form->add_select('race', 'Rasa', $races, 'Wybierz rasę postaci');
//$form->add_select('class', 'Klasa', $classes, 'Wybierz klasę postaci');
$form->add_text('spec1', 'Main spec', 'Wybierz rajdowy main spec');
$form->add_text('spec2', 'Off spec', 'Wybierz rajdowy off spec');
//$form->add_text('prof1', 'Profesja 1', '', false);
//$form->add_text('prof2', 'Profesja 2', '', false);
//$form->add_number('ilevel', 'Średni item level<br>(widoczny np. w armory)', 'Podaj średni item level');
$form->add_text('guild', 'Poprzednie gildie', '', false);
$form->add_label('player', 'Garść informacji o Tobie');
$form->add_text('name', 'Imię', 'Bezimmienny? To nie Planescape Torment');
$form->add_select('age', 'Wiek', $age, 'Ponadczasowy? Nie sądzę');
$form->add_textarea('about', 'Napisz cos o sobie, czym sie zajmujesz, Twoje zainteresowania');
$form->add_textarea('experience', 'Opisz swoje ewentualne doswiadczenia rajdowe', '', false);
$form->add_textarea('expectations', 'Czego od nas oczekujesz, co mozesz zaoferowac gildii?');
$form->add_label('extra', 'Dodatkowe informacje');
$form->add_email('email', 'Adres e-mail', '', 'Mail do kontaktu w sprawie rekrutacji');
$form->add_email('email2', 'Powtórz e-mail', 'email', 'Podaj dwa razy ten sam mail');
$form->add_text('net', 'Jakość łącza internetowego<br>(np. słaba, średnia, dobra)', 'Opisz jakośc swojego łącza internetowego');
$form->add_checkbox('ts', 'Korzystanie z TS w trakcie rajdów', '', false);
$form->add_checkbox('rules', 'Zapoznałem się z zasadami gildyjnymi', 'Zapoznaj się z zasadami');
$form->add_antybot('antybot', 'Nick naszego Guild Mastera', 'roegner', 'Zakładka "O nas"');
$form->add_submit('submit', 'Złóż podanie');

$form->validate();
if (!$form->valid) {
    ?>
    <p>Wpisz nick postaci, a my spróbujemy znaleźć Cię w armory.</p>
    <p>Im więcej pól wypełnisz, tym łatwiej będzie nam podjąć decyzję.</p>        
    <p>Testowy formularz. Mail nie zostanie wysłany.</p>
    <?php
    $form->render('div');
} else {
    //include(partial('recruitment/mails'));
    include(partial('recruitment/summary'));
}