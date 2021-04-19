<?php $content['template'] = 'documentation'; ?>
<p>In tables, marked arguments are required.</p>

<h4 class="subsection-title">partial($name)</h4>
<p>Returns the path to the part, that can be included into page with "include" - include partial($name).</p>
<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>name *</td>
            <td>string</td>
            <td>location and name of the part file</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">log_message($file, $string)</h4>
<p>Logs into named file any text with date and time. All the files are held in 
    <var>application&bsol;logs</var> folder.</p>
<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>file *</td>
            <td>string</td>
            <td>name of the log file</td>
        </tr>
        <tr>
            <td>string *</td>
            <td>string</td>
            <td>message to be logged</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">get_link_remote($target, $description, $title, $class, $id)</h4>
<p>Works like <var>get_link</var> function, but prints link to a remote site.</p>
<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>target *</td>
            <td>string</td>
            <td>target of the link, preferably with protocole</td>
        </tr>
        <tr>
            <td>description</td>
            <td>string</td>
            <td>description of the link</td>
        </tr>
        <tr>
            <td>title</td>
            <td>string</td>
            <td>title of the link when mouseovered</td>
        </tr>
        <tr>
            <td>class</td>
            <td>string</td>
            <td>class of the link</td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>id of the link</td>
        </tr>
    </tbody>
</table>    

<h4 class="subsection-title">get_debug_info()</h4>
<p>Prints out all variables used by the framework.</p>


<h4 class="subsection-title">redirect($location)</h4>
<p>With the use of PHP function <var>header</var>, redirects client (browser) to the 
    chosen page. Every redirect is logged in <var>application&bsol;logs&bsol;redirect</var> file.</p>
<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>location *</td>
            <td>string</td>
            <td>address of the page to which client should be redirected</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">check_link($target)</h4>
<p>Function that checks if a file for target exists. Currently does not work for 
    extensions and does not check controllers. All nonexistent links are logged in 
    <var>application&bsol;logs&bsol;check_link</var> file.</p>
<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>target *</td>
            <td>string</td>
            <td>adress that will be checked for existence</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">echo_default_css(), echo_default_js()</h4>
<p>Functions printing css/js links for files defined in  <var>application&bsol;config&bsol;content.php</var>. 
    Should be used exclusively in template, inside <var>&lt;head&gt;</var> tag.</p>


<h4 class="subsection-title">css_echo($file, $id, $media, $extension)</h4>
<p>Function that prints link for a css file from <var>public_html&bsol;css</var>. 
    Should be used exclusively in template, inside <var>&lt;head&gt;</var> tag.</p>
<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>name *</td>
            <td>string</td>
            <td>name of a css file from <var>public_html&bsol;css</var></td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>id attribute of the tag, empty by default</td>
        </tr>
        <tr>
            <td>media</td>
            <td>string</td>
            <td>define medium, for which stylesheet should be used</td>
        </tr>
        <tr>
            <td>extension</td>
            <td>string</td>
            <td>defines extension of the file, 'css' by default</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">js_echo($name, $id, $defer, $extension)</h4>
<p>Function that prints link for a js file from <var>public_html&bsol;js</var>.  
    Should be used exclusively in template, inside <var>&lt;head&gt;</var> tag.</p>
<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>name *</td>
            <td>string</td>
            <td>name of a js file from <var>public_html&bsol;js</var></td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>id attribute of the tag, empty by default</td>
        </tr>
        <tr>
            <td>defer</td>
            <td>boolean</td>
            <td>defines, if loading of the script should be delayed until the page is loaded, 
                'true' by default</td>
        </tr>
        <tr>
            <td>extension</td>
            <td>string</td>
            <td>defines extension of the file, 'js' by default</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">css_add($file, $id, $media, $extension)</h4>
<p>Function that queues a css file from <var>public_html&bsol;css</var>. 
    All queued files are printed with echo_default_css.</p>
<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>name *</td>
            <td>string</td>
            <td>name of a css file from <var>public_html&bsol;css</var></td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>id attribute of the tag, empty by default</td>
        </tr>
        <tr>
            <td>media</td>
            <td>string</td>
            <td>define medium, for which stylesheet should be used</td>
        </tr>
        <tr>
            <td>extension</td>
            <td>string</td>
            <td>defines extension of the file, 'css' by default</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">js_add($name, $id, $defer, $extension)</h4>
<p>Function that queues a js file from <var>public_html&bsol;js</var>. 
    All queued files are printed with echo_default_js.</p>
<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>name *</td>
            <td>string</td>
            <td>name of a js file from <var>public_html&bsol;js</var></td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>id attribute of the tag, empty by default</td>
        </tr>
        <tr>
            <td>defer</td>
            <td>boolean</td>
            <td>defines, if loading of the script should be delayed until the page is loaded, 
                'true' by default</td>
        </tr>
        <tr>
            <td>extension</td>
            <td>string</td>
            <td>defines extension of the file, 'js' by default</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">css_ignore($name), js_ignore($name)</h4>
<p>Functions that remove from queued css or js file.</p>
<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>name *</td>
            <td>string</td>
            <td>name of a css/js file to be removed from queue</td>
        </tr>
    </tbody>
</table>
