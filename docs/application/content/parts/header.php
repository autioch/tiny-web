<div id="layout-header">
    <?php echo_link('', get_image('logo64x32.png', 'TinyWeb'), 'TinyWeb', 'header-banner') ?>
    <ul class="lang-menu">
        <li class="lang-item">
            <?php echo get_link_language('pl', get_image('lang/pl.png', 'PL'), 'PL', 'lang-link') ?>
        </li>
        <li class="lang-item">
            <?php echo get_link_language('en', get_image('lang/en.png', 'EN'), 'EN', 'lang-link') ?>
        </li>
    </ul>
</div>
<div id="header-menu-container">
    <ul id="header-menu">
        <li class="menu-item first">
            <?php echo_link('about', $dict['about'], $dict['about'], 'menu-link') ?>
        </li>
        <li class="menu-item">
            <?php echo_link('features', $dict['features'], $dict['features'], 'menu-link') ?>
        </li>
        <li class="menu-item">
            <?php echo_link('tutorial', $dict['tutorial'], $dict['tutorial'], 'menu-link') ?>
            <?php include partial('menu_tutorial') ?>
        </li>
        <li class="menu-item">
            <?php echo_link('config', $dict['config'], $dict['config'], 'menu-link') ?>
            <?php include partial('menu_config') ?>
        </li>
        <li class="menu-item">
            <?php echo_link('documentation', $dict['documentation'], $dict['documentation'], 'menu-link') ?>
            <?php include partial('menu_documentation') ?>
        </li>
        <li class="menu-item">
            <?php echo_link('internal', $dict['internal'], $dict['internal'], 'menu-link') ?>
            <?php include partial('menu_internal') ?>
        </li>
        <li class="menu-item">
            <?php echo_link('download', $dict['download'], $dict['download'], 'menu-link') ?>
        </li>
        <li class="menu-item">
            <?php echo_link('contact', $dict['contact'], $dict['contact'], 'menu-link') ?>
        </li>
    </ul>
    <div class="clear"></div>
</div>