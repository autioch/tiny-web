<!DOCTYPE html>
<html lang="<?php echo TW_LANGUAGE ?>">
    <head>
        <?php include partial('html_head') ?>
    </head>
    <body>
        <div id="layout-wrapper">
            <?php include partial('header') ?>
            <div id="layout-content">
                <div id="layout-side-menu">
                    <?php include partial('menu_config') ?>
                    <div class="clear"></div>
                </div>
                <div id="layout-content-small">
                    <?php echo $content['value'] ?>
                </div>
                <div class="clear"></div>
            </div>
            <?php include partial('footer') ?>
        </div>
    </body>
</html>
