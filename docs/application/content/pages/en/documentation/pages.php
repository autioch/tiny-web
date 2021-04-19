<?php $content['template'] = 'documentation'; ?>
<p>TinyWeb treats requests simple - for each of them must exist a file
    (except <?php echo_link('config/controllers', 'controllers') ?>). It's a very simple
    approach, sometimes it's helpful, sometimes it's restraining.</p>
<p>Files containg the actual page content are placed in 
    <var>application&bsol;content&bsol;pages</var>, or in subfolders. They should contain the unique
    content of the page - if any components are repeatable, it's best to move them into 
    <?php echo_link('documentation/parts', 'parts') ?> and include them where needed.</p>
<p>Content of the page may consist of any amount of HTML, PHP, images, flash, and if needed, javascript.
    However, they should not contain the <var>&lt;style&gt;</var> tag.</p>
<p>If we want to include any parts before or after page is generated, we can define them in
    <var>application&bsol;config&bsol;content.php</var>:</p>
<pre>$script_before['nazwa_parts'] = true; 
$script_after['nazwa_parts'] = true;</pre>
<p>Parts included in that way are executed before the generated content is passed to the 
    <?php echo_link('documentation/templates', 'template') ?>.</p>