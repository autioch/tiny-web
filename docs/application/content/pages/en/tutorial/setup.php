<?php $content['template'] = 'tutorial'; ?>
<h4 class="subsection-title">Requirements</h4>
<p>TinyWeb is a PHP framework. It uses redirection defined in a <var>.htaccess</var> file. As such, 
    it requires Apache server with enabled <var>rewrite_module</var> and PHP,
    optional <var>mod_expires</var>. Most of the hostings meets those requirements, and 
    there's no need for any extra libraries or configuration.</p>
<h4 class="subsection-title">First page</h4>
<ol>
    <li><p>Extract the downloaded zip file to selected folder in the 
            <var>DocumentRoot</var> of the apache server.</p></li> 
    <li><p>In <var>application&bsol;content&bsol;pages</var>, create
            <var>start.php</var> file and fill it with classic "Hello world!".</p></li>   
    <li><p>In <var>application&bsol;config&bsol;routing.php</var>, set default and error page to "start":</p>
        <pre>$routing['default'] = 'start';
$routing['error'] = 'start';</pre>
    </li>
    <li>In a browser, we go to the extracted folder, then to the 
        <var>public_html</var>. We should see our text :)</p></li>
</ol>
<h4 class="subsection-title">Some additions</h4>
<ol>
    <li><p>In <var>public_html</var>, in appropriate folders, place graphics, js, css, 
            flash and download files. In <var>application&bsol;config&bsol;content.php</var>, set
            data, parts, css and js that will be used. There is a precise description in the file.</p></li>    
    <li><p>In <var>application&bsol;content&bsol;parts</var>, create
            <var>footer.php</var>. Fill it with any text. In our file <var>start.php</var>, with
            <?php echo_link('documentation/functions-other', 'partial') ?> inlude that part:</p>
        <pre>&lt;?php include partial('footer');?&gt;</pre>
    </li>
    <li><p>In <var>application&bsol;content&bsol;pages</var>, create file
            <var>subpage.php</var> and fill it with any content. In file
            <var>start.php</var>, with
            <?php echo_link('documentation/functions-html', 'echo_link') ?> create a link to 
            the subpage:</p>
        <pre>&lt;?php echo_link('subpage');?&gt;</pre> 
    </li>
</ol>
<h4 class="subsection-title">Even more additions</h4>
<p>TinyWeb allows for much more. Next pages of this tutorial show what else can be done.</p>
