<?php $content['template'] = 'internal'; ?>
<p>Internally, Tinyweb actually uses only one function, which is used to generate link fragments.
    It's called <var>qb_get_details</var>. All other functions are described in 
 <?php echo_link('documentation/functions-html','Tutorial/Functions') ?>.</p>
<p>List of all the declared functions can be received by executing code below:</p>
<pre>
&lt;pre&gt;&lt;?php print_r(get_defined_functions()['user'])?&gt;&lt;/pre&gt;
</pre>