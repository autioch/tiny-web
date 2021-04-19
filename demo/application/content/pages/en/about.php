<div id="about">
    <h3 class="section-title"><?php echo $dict['about'] ?></h3>
    <p><?php echo $guildName ?> to gildia PvE na serwerze <?php echo_link_remote('http://sunwell.pl/', 'Sunwell.pl', '', 'important-link') ?>
        (prywatny serwer World of Warcraft: Wrath of the Lich King).</p>
    <p>Aktualnie skupiamy się na progresowaniu Icecrown Citadel 10 heroic oraz Icecrown Citadel 25 normal.
        Oprócz tego, regularnie rajdujemy ToC, można nas też spotkać na BG oraz arenach.</p>
    <p>Nasza gildia w <?php echo_link_remote('http://sunwell.pl/armory/guild.php?r=Feronis&amp;n=' . $guildNameArmory, 'Sunwell Armory', '', 'important-link') ?>.</p>
</div>
<div id="characters">

    <h3 class="section-title"><?php echo $dict['about-leaders'] ?></h3>    
    <h4 class="subsection-title">Guild Master</h4>
    <ul class="character-list">
        <li class="character-list-item"><?php armory_char('Roegner', 'deathknight'); ?></li>
    </ul>
    <h4 class="subsection-title"><?php echo $dict['about-officers'] ?></h4>
    <ul class="character-list">
        <li class="character-list-item"><?php armory_char('Ahhmed', 'warrior'); ?></li>
        <li class="character-list-item"><?php armory_char('Thornstar', 'druid'); ?></li>
        <li class="character-list-item"><?php armory_char('Quenth', 'shaman'); ?></li>
    </ul>
    <h4 class="subsection-title"><?php echo $dict['recruitment'] ?></h4>
    <ul class="character-list">
        <li class="character-list-item"><?php echo_link('recruitment', $dict['recruitment/form'],'','important-link') ?></li>
    </ul>
    <h4 class="subsection-title">DKP</h4>
    <ul class="character-list">
        <li class="character-list-item"><?php echo get_link('rules/dkp', $dict['rules/dkp'],'','important-link'); ?></li>
        <li class="character-list-item"><?php echo_link_remote('http://www.webdkp.com/dkp/Sunwell/' . $guildNameArmory . '/', 'www.webdkp.com','','important-link') ?></li>
    </ul>
</div>
