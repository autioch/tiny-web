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
echo_default_css();
echo_default_js();
include_once(partial('googleanalytics'));
