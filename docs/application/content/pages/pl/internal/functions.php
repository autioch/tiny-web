<?php $content['template'] = 'internal'; ?>
<p>Wewnętrznie, Tinyweb wykorzystuje właściwie tylko jedną funkcję, która służy do
    generowania fragmentów linków. Jest to qb_get_details. Wszystkie pozostałe funkcje
    są opisane w <?php echo_link('documentation/functions-html','Tutorial/Funkcje') ?></p>
<p>Listę wszystkich funkcji zadeklarowanych przez użytkownika można uzyskać wykonując kod:</p>
<pre>
&lt;pre&gt;&lt;?php print_r(get_defined_functions()['user'])?&gt;&lt;/pre&gt;
</pre>