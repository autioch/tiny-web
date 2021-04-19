<?php $content['template'] = 'documentation'; ?>
<p>TinyWeb does not have its own template engine, so there is no need to learn yet another
    markup. Instead, it offers functions, that can be easily remembered and used.</p>
<p>In tables, marked arguments are required. All the listed functions come in two versions:</p>
<ul class="dash-list">
    <li>echo_[name] - directly prints the function result,</li>
    <li>get_[name] - return the function result, which can be stored or used in other function.</li>
</ul>
<p>get_[name] functions can be mixed - by using an image as link description. If results
    are other than predicted, optional arguments should be filled. Or simplify the idea.</p>
<h4 class="subsection-title">get_link($target, $description, $title, $class, $id)</h4>
<p>Returns a link to the page from <var>content&bsol;pages</var> folder. All links generated that
    way are automatically checked and if they lead to current page or page above, they receive 
    class <var>active</var> in addition to their other class.</p>
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
            <td>target of the link, select a file in <var>content&bsol;pages</var></td>
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

<h4 class="subsection-title">get_download($file, $description, $title, $class, $id</h4>
<p>Returns a link to download a file from <var>public_html&bsol;download</var> folder.</p>
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
            <td>name of a file from <var>public_html&bsol;download</var> folder</td>
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

<h4 class="subsection-title">get_email($email, $description, $title, $class, $id)</h4>
<p>Returns an email link, with simple security check against spammers.</p>
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
            <td>email *</td>
            <td>string</td>
            <td>email to be printed</td>
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

<h4 class="subsection-title">get_image($src, $title, $class, $id, $width, $height)</h4>
<p>Returns an image tag.</p>
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
            <td>src *</td>
            <td>string</td>
            <td>path to the image in the <var>public_html&bsol;images</var> folder</td>
        </tr>
        <tr>
            <td>title</td>
            <td>string</td>
            <td>title of the image when mouseovered or in case the image is not visible</td>
        </tr>
        <tr>
            <td>class</td>
            <td>string</td>
            <td>class of the image</td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>id of the image</td>
        </tr>
        <tr>
            <td>width</td>
            <td>integer</td>
            <td>width of the image</td>
        </tr>
        <tr>
            <td>height</td>
            <td>integer</td>
            <td>height of the image</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">get_flash($data, $width, $height, $class, $id)</h4>
<p>Returns an object tag for flash.</p>
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
            <td>src *</td>
            <td>string</td>
            <td>path to the .swf file in the <var>public_html&bsol;flash</var> folder</td>
        </tr>
        <tr>
            <td>width *</td>
            <td>integer</td>
            <td>width of the flash</td>
        </tr>
        <tr>
            <td>height *</td>
            <td>integer</td>
            <td>height of the flash</td>
        </tr>        
        <tr>
            <td>title</td>
            <td>string</td>
            <td>alternative title</td>
        </tr>
        <tr>
            <td>class</td>
            <td>string</td>
            <td>class css</td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>id css</td>
        </tr>

    </tbody>
</table>

<h4 class="subsection-title">get_address($target)</h4>
<p>Returns a full address to the target, independently of what the target is - page, css, image.</p>
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
            <td>name of the target</td>
        </tr>
    </tbody>
</table>