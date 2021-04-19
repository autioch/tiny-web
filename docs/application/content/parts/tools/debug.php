<p style="font-weight: bold;">Constants:</p>
<pre><?php
$const = get_defined_constants(true);
print_r($const['user']);
?></pre>

<p style="font-weight: bold;">Routing:</p>
<p>$_SERVER['REQUEST_URI']: <?php echo $_SERVER['REQUEST_URI']; ?> </p>
<p>$_SERVER['SCRIPT_NAME']: <?php echo $_SERVER['SCRIPT_NAME']; ?> </p>

<p style="font-weight: bold;">Trace routing:</p>
<pre><?php
    print_r($routing);
?></pre>

<p style="font-weight: bold;">Cache:</p>
<pre><?php
    print_r($cache);
?></pre>

<p style="font-weight: bold;">No-cache:</p>
<pre><?php
    print_r($nocache);
?></pre>