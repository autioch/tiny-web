<?php $content['template'] = 'tutorial'; ?>
<p>Default file structure can be changed in <var>index.php</var>. Names of
    <var>public_html</var> and <var>application</var> can be changed - 
    <var>index.php</var> is the executed script and it is the file that calls other files.</p>
<p>All other config files are by default in <var>application&bsol;config</var>.</p>
<table>
    <thead>
        <tr>
            <th>File</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><var>routing.php</var></td>
            <td>defines default page, error page, page extension, controller-pages</td>
        </tr>
        <tr>
            <td><var>cache.php</var></td>
            <td>enables/disables cache, duration of cache, no-cache pages</td>
        </tr>
        <tr>
            <td><var>content.php</var></td>
            <td>metadata of the page, parts to be run before and after page generation, 
                default css and js</td>
        </tr>
    </tbody>
</table>
<p>That of course is basic setting, and each of those files can be split more by using
    "include", other files can be placed here to control other elements.</p>
<p>Placing configuration files allows to quickly control what is happening.
    Per page configuration is possible in any page/part/template file, but might lead to 
    confusion, so it's advised to limit it whenever possible.</p>