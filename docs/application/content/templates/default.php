<!DOCTYPE html>
<html lang="<?php echo TW_LANGUAGE ?>">
    <head>
        <?php include partial('html_head') ?>
    </head>
    <body>
        <div id="layout-wrapper">
            <?php include partial('header') ?>
            <div id="layout-content">
                <?php echo $content['value'] ?>
                <div class="clear"></div>
            </div>
            <?php include partial('footer') ?>
        </div>
    </body>
</html>
