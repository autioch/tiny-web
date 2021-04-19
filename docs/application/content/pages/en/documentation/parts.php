<?php $content['template'] = 'documentation'; ?>
<p>Parts are files, that can be included in any page, template or other part. Additionaly, 
    they can be run before or after generating a page. While comparing to other scripts/frameworks,
they can be treated as helpers or plugins.</p>
<p>Parts are held in <var>application&bsol;content&bsol;parts</var> (or subfolders), and to place 
    them in a file, it's only required to use the line:</p>
<pre>&lt;?php include partial('nazwa_parts'); ?&gt;</pre>
<p>That funcionality of the framework gives a lot of possibilites.
    Parts can contain HTML, PHP functions and code, reference other parts. They can present
    HTML, change it with JS, they can be containers for other libraries. They're limited only by 
    imagination of the user.</p>