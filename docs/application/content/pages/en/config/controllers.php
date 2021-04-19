<?php $content['template'] = 'config'; ?>
<p>TinyWeb allows setting any direct subpage to act as a controller - if request begins
    with selected subpage, it is set as selected, and remaining part of request is set
    as parameters.</p>
<p class="warning">Controllers do not work with extensions set.</p>
<p>Pages that should act as controllers can be defined in 
    <var>application&bsol;config&bsol;routing.php</var>. By setting page
    <var>test</var> as a controller, let's make request below.</p>
<pre>domena.net&sol;test&sol;query&sol;details</pre>
<p>This request will set <var>test</var> page as select, and rest will appear in array
    <var>$routing['params']</var>.</p>
<pre>$routing['params'] = Array([0] => 'query', [1] => 'details'); </pre>
<p>That way request can be managed in the page file based on the params. More or less, 
    that is the way the classic controllers work in MVC - 'test' would be the controller,
    'query' method of the controller, and 'details' and argument for that method.</p>