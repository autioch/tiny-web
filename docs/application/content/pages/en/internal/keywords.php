<?php $content['template'] = 'internal'; ?>
<p>TinyWeb uses a few variables that hold all the settings. Following the "simplicity rule", they're
    simple arrays, not objects. Of course, with OOP it could be more elegant, but it just has to work.</p>
<p>Values of the array keys are set before, during or after generating the page, so they 
    should not be modified, however reading them is absolutely ok. Reading 
    <?php echo_link('documentation/constants', $dict['documentation/constants']) ?> is 
    even better, safer, and more elegant solution.</p>
<h4 class="subsection-title">routing</h4>
<p>That array holds all the data required to select a page to serve to the user. With that
    array the default page, controller pages and extension can be set.</p>
<h4 class="subsection-title">cache, nocache</h4>
<p>Those two arrays control the behaviour of the cache.</p>
<h4 class="subsection-title">content</h4>
<p>That array holds information required to generate requested page. Most important is
    <var>$content['value']</var> - contains the code of the generated page that will be 
    insterted into a template.</p>
<h4 class="subsection-title">css, css_add, css_ignore, js, js_add, js_ignore</h4>
<p>Arrays responsible for selecting the css and js to be included with
    <var>get_default_css()</var> and <var>get_default_js()</var> functions.</p>
<h4 class="subsection-title">script_before, script_after</h4>
<p>Arrays containing lists of parts to be included before and after page generating, before
    the page gets inserted into the template.</p>
<h4 class="subsection-title">Other variables</h4>
<p>Besides the mentioned, important variables, the framework also uses less important variables:
    <var>$i</var> and <var>$length</var>.</p>
<p>List of all user declared functions can be received by executing the code below:</p>
<pre>
&lt;?php
$ignore = array('GLOBALS', '_FILES', '_COOKIE', '_POST', '_GET', '_SERVER', '_ENV', 'ignore');
$vars = array_diff_key(get_defined_vars() + array_flip($ignore), array_flip($ignore));
echo '&lt;pre&gt;' , print_r($vars, true) , '&lt;/pre&gt;';
?&gt;
</pre>