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
		<?php echo_default_css(); ?>
		<?php echo_default_js(); ?>
    </head>
    <body>
        <?php include partial('header') ?>
        <?php echo $content['value'] ?>
        <?php include partial('footer') ?>
    </body>
</html>
