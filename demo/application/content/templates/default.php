<!DOCTYPE html>
<html lang="<?php echo TW_LANGUAGE ?>">
    <head>
        <meta charset="<?php echo $content['charset'] ?>">
        <meta name="robots" content="all">           
        <title><?php echo $content['title'] ?></title>	
        <meta name="description" content="<?php echo $content['description'] ?>">		
        <meta name="keywords" content="<?php echo $content['keywords'] ?>">	
        <meta name="author" content="<?php echo $content['author'] ?>">
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">        
        <link rel="shortcut icon" href="/images/favicon.ico"> 
        <meta name="viewport" content="width=device-width">
        <?php
        $theme = filter_has_var(INPUT_COOKIE, 'qbtheme') ? filter_input(INPUT_COOKIE, 'qbtheme') : 'alliance';
        css_echo($theme);
        ?> 
    </head>
    <body>
        <div id="layout-wrapper">
            <div id="header">
                <div id="banner">
                    <?php echo_image('banners/logo-' . $theme . '.png', $guildName, '', 'banner-image'); ?>
                </div>
                <?php include partial('header') ?>
                <div class="clear"></div>
            </div>
            <div class="content-box">
                <div id="content">
                    <?php echo $content['value']; ?>
                    <div class="clear"></div>
                </div>
            </div>
            <?php include partial('footer') ?>
        </div>
        <?php include partial('presentation') ?>
        <?php echo_default_js(); ?>
    </body>
</html>
