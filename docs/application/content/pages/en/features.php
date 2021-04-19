<p>TinyWeb is very small and really simple. You can think of it as a single PHP script, that
    during execution selects page to present. No classes, no MVC. Despite such simplicity 
    and very small amount of code, TinyWeb offers quite a lot of options ;)</p>
<h4 class="subsection-title">Control over content selection</h4>
<ul class="dash-list">
    <li>defining default page,</li>
    <li>simple defining of error page,</li>
    <li>automatic creation of correct, elegant links.</li>    
</ul>

<h4 class="subsection-title">Control over page display</h4>
<ul class="dash-list">
    <li>defining css and js files to be included on each page, particular page or ignored on particular page,</li>    
    <li>building up pages from smaller parts,</li>
    <li>control of "parts" being included by default before and after page content,</li>
    <li>possibility to disable particular parts on selected pages.</li>
</ul>

<h4 class="subsection-title">Simple cache mechanism</h4>
<ul class="dash-list">
    <li>enabling and disabling cache,</li>
    <li>control of cache freshness,</li>
    <li>disabling cache for particular pages while cache is on.</li>
</ul>

<h4 class="subsection-title">Internationalization</h4>
<ul class="dash-list">
    <li>simple links for single language version,</li>
    <li>built-in support for any amount of languages,</li>
    <li>automatic creation of localized links.</li>
</ul>

<h4 class="subsection-title">Additionaly</h4>
<ul class="dash-list">
    <li>defining any (including none) page extension (.php, .html, .jsp, ...), </li>
    <li>defining pages to act like classic controllers,</li>
    <li>default file structure allows to secure and hide sensitive framework files,</li>
    <li>ability to change file structure,</li>
    <li>event logging.</li>
</ul>

<h4 class="subsection-title">TinyWeb does not have integrated database library</h4>
<ul class="dash-list">
    <li>framework is supposed to create simple pages, that should not require database access,</li>
    <li>if database access is required, developer is free to use any database engine,</li>
    <li>adding database layer would greately increase size, complexity and amount of dangerous
        spots in the code,</li>
    <li>regardless of the intended use of the database, I suggest you take advantage of 
        the ready-made solutions.</li>
</ul>