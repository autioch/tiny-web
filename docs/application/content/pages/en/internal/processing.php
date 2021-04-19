<?php $content['template'] = 'internal'; ?>
<p>Thanks to <var>.htaccess</var>, every request is directed to <var>index.php</var>, 
    where it passes through a series of steps, up to returning a complete page.</p>
<h4 class="subsection-title">Routing</h4>
<ol>
    <li>
        <p>Defining request based on <var>$_SERVER['SCRIPT_NAME']</var> and
            <var>$_SERVER['REQUEST_URI']</var>.</p>
    </li>
    <li>
        <p>Checking if <?php echo_link('config/i18n', 'internationalization (i18n)') ?> is set.</p>
    </li>
    <li>
        <p>Checking if requested page is a <?php echo_link('config/controllers', 'controller') ?>.</p>
    </li>
    <li>
        <p>Checking the file <?php echo_link('config/extensions', 'extension') ?>.</p>
    </li>
    <li>
        <p>Checking if requested file exists.</p>
    </li>
</ol>
<h4 class="subsection-title">Cache</h4>
<ol>
    <li>
        <p>Checking if caching is turned on.</p>
    </li>
    <li>
        <p>Checking if requested page is cached and fresh.</p>
        <p>If it is, we end our script, serving page from cache.</p>
    </li>
</ol>
<h4 class="subsection-title">Content</h4>
<ol>
    <li>
        <p>Load functions used in page generation.</p>
    </li>   
    <li>
        <p>Include all parts defined in <var>script_before</var>.</p>
    </li>   
    <li>
        <p>Load requested file selected in part "routing".</p>
    </li>   
    <li>
        <p>Include all parts defined in <var>script_after</var>.</p>
    </li>  
    <li>
        <p>Insert generated code into selected template.</p>
    </li>  
    <li>
        <p>If cache is being used, save the content in a file.</p>
    </li>  
</ol>
<h4 class="subsection-title">Done!</h4>