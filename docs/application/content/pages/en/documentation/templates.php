<?php $content['template'] = 'documentation'; ?>
<p>In <var>application&bsol;content&bsol;templates</var>, there are templates, files to which the 
    generated file content is inserted. By default, the <var>default</var> template is selected,
    but if we want to change it for all pages, it can be done in <var>application&bsol;config&bsol;content.php</var>:</p>
<pre>$content['template'] = 'default'; </pre>
<p>If the change is only about particular page, then in any place of that page's code (best on top) place:</p>
<pre>&lt;?php $content['template'] = 'ajax'; ?&gt;</pre>
<p>Those templates can be edited in any way. When creating new ones, please remember about three
    important elements that are the key to correct functioning of the framework.</p>
<table>
    <thead>
        <tr>
            <th>Code</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><pre>&lt;?php echo $content['value']; ?&gt;</pre></td>
            <td>prints the generated page content</td>
        </tr>
        <tr>
            <td><pre>&lt;?php echo get_default_css(); ?&gt;</pre></td>
            <td>prints the links to css files defined in
                <var>application&bsol;config&bsol;content.php</var>
            </td>
        </tr>
        <tr>
            <td><pre>&lt;?php echo get_default_js(); ?&gt;</pre></td>
            <td>prints the links to js files defined in
                <var>application&bsol;config&bsol;content.php</var>
            </td>
        </tr>
    </tbody>
</table>