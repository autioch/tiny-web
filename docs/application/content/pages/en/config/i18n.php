<?php $content['template'] = 'config'; ?>
<p>In <var>config&bsol;content.php</var>, there can be found three variable responsible for 
    internationalization of the page. All the language codes can be found for example 
    <?php echo_link_remote('http://www.loc.gov/standards/iso639-2/php/code_list.php', 'here') ?>.</p>
<table>
    <thead>
        <tr>
            <th>Variable</th>
            <th>Description</th>
            <th>Values</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><var>$content['language']</var></td>
            <td>Defines page language</td>
            <td>Two-letter language code ('en', 'pl')</td>
        </tr>
        <tr>
            <td><var>$content['localize']</var></td>
            <td>Defines if page has more than one language</td>
            <td><var>true</var> or <var>false</var></td>
        </tr> 
        <tr>
            <td><var>$content['languages']</var></td>
            <td>Defines available language versions</td>
            <td>Array containg language codes</td>
        </tr>
    </tbody>
</table>
<p>By default, <var>$content['localize']</var> is set to <var>false</var>, which means 
    that framework searches for page files directly in <var>content&bsol;pages</var>, while in templates
    language is set to <var>$content['language']</var>.
    Variable <var>$content['languages']</var> is not used.</p>
<h4 class="subsection-title">Multilingual configuration</h4>
<p>If <var>$content['localize']</var> is set to <var>true</var>,
    then while processing request framework will check, if first part (folder) is equal
    to any of the language codes set in <var>$content['languages']</var>. If it finds a match,
    <var>$content['language']</var> will be set to that language, and framework will search for
    existence of the page file in subdirectory of <var>content&bsol;pages</var> with selected language name.
    Let's take the link below as an example.</p>
<pre>&lt;domena.net&gt;&bsol;en&bsol;docs&bsol;localization</pre>
<p>The framework will detect that page should be presented in english version, and requested
    file is <var>pages&bsol;en&bsol;docs&bsol;localization.php</var>. For each language version there must
    exists directory with pages in selected language.</p>
<p>If language is not set or selected language is not available in 
    <var>$content['languages']</var>, then language is set to <var>$content['language']</var>.</p>
<p>Function <var>get_link</var> and <var>echo_link</var> automatically check, if localization
    is enabled and if required, prepend selected language to each link, which allows creating
    links independently of the selected language.</p>
<h4 class="subsection-title">Changing language</h4>
<p>To make changing language easier, TinyWeb offers special function, that creates link 
    to the current page in a language selected by us -
    <var>get_link_language</var>, available also as <var>echo_link_language</var>.</p>
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
            <td>language *</td>
            <td>string</td>
            <td>language code to which page should switch</td>
        </tr>
        <tr>
            <td>description</td>
            <td>string</td>
            <td>link description</td>
        </tr>
        <tr>
            <td>title</td>
            <td>string</td>
            <td>title of the link when mouseovered</td>
        </tr>
        <tr>
            <td>class</td>
            <td>string</td>
            <td>link class</td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>link id</td>
        </tr>
    </tbody>
</table>
<h4 class="subsection-title">Dictionary</h4>
<p>While working on multilingual website, a translation tool is very usefull. For TinyWeb, 
    it's by default <var>qbDictionary</var> class. To use it, we need an array of translations,
    for example:</p>
<pre>
$dictionary = array(
    'about' => array('pl' => 'O TinyWeb', 'en' => 'About'),
    'changelog' => array('pl' => 'Changelog', 'en' => 'Changelog')
);
</pre>
<p>Next, we need to include class file (or autoload class) and create an instance:</p>
<pre>
include_once LIB . 'qbDictionary.class.php';
$dict = new qbDictionary($dictionary, $content['language']);
</pre>
<p>In the example above the second argument is the language selected while the request
    was processed. To actually use the dictionary, it should be treated as a table:</p>
<pre>echo $dict['about'];   //prints "About" in our example</pre>
<p>To get translation for other than current language, there's "get" method:</p>
<pre>echo $dict->get('about', 'pl');</pre>
<p>Such a dictionary is usefull while creating universal menu, or while creating 
    language independent parts.</p>