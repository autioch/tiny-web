<?php $content['template'] = 'tutorial'; ?>
<?php echo_image('structure.png', 'Default file structure', 'img-right') ?>
<p>The graphic on the right presents the default file structure.</p>
<p>As it can be seen, the framework is split into two parts:</p>
<ul class="dash-list">
    <li>
        <p><var>application</var> contains all internal elements required to create a page,</p>
    </li>
    <li>
        <p><var>public_html</var> contains all the elements accessible to browsers.</p>
    </li>
</ul>
<p>That structure allows to hide sensitive elements, and gives quite a lot of security.</p>
<h4 class="subsection-title">public_html</h4>
<p>In that folder there are five subfolders - each of them should contain appropriate files.
    To use those files, appropriate function should be used.</p>
<p>It is the folder, to which the <var>DocumentRoot</var> of our domain should be pointing, 
    containing the <var>.htaccess</var> file, which redirects all queries to <var>index.php</var>,
    that is responsible for runing the framework.</p>
<p>Besides that, there are two more files to support SEO and crawling.</p>
<table>
    <thead>
        <tr>
            <th>File</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><var>.htaccess</var></td>
            <td>apache configuration file, lines starting with "#" are comments; more on
                <?php echo_link_remote('http://httpd.apache.org/docs/2.2/howto/htaccess.html', 'httpd.apache.org') ?>
            </td>
        </tr>
        <tr>
            <td><var>index.php</var></td>
            <td>start file, that runs the whole framework; the default file structure can be changed there</td>
        </tr>
        <tr>
            <td><var>robots.txt</var></td>
            <td>contains crawlers instructions; default file structure allows for maximum simplicity</td>
        </tr>
        <tr>
            <td><var>sitemap.xml</var></td>
            <td>contains site map, more <?php echo_link_remote('http://pl.wikipedia.org/wiki/Sitemap', 'here') ?>
            </td>
        </tr>
    </tbody>
</table>
<h4 class="subsection-title">application</h4>
<p>In that part there are all folders allowing for proper functioning of the framework.</p>
<table>
    <thead>
        <tr>
            <th>Folder</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><var>cache</var></td>
            <td>holds all cached pages, empty the folder to refresh all pages</td>
        </tr>
        <tr>
            <td><var>config</var></td>
            <td>holds all the config files, files in that folder are described in
                    <?php echo_link('tutorial/config', $dict['tutorial/config']) ?></td>
        </tr>
        <tr>
            <td><var>content</var></td>
            <td>
                holds three subfolders:
                <ul class="dash-list">
                    <li><var>pages</var>holds all page files, usually one file for every page</li>
                    <li><var>parts</var> holds all the part files, which can be included
                            anywhere with <?php echo_link('documentation/functions-other', 'partial') ?></li>
                    <li><var>templates</var> template files, to which generated content is included</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><var>library</var></td>
            <td>holds all framework files,
                    <span class="warning">modification at your own risk</span></td>
        </tr>
        <tr>
            <td><var>logs</var></td>
            <td>holds all the log files, filled with 
                    <?php echo_link('documentation/functions-other', 'log_message') ?>.</td>
        </tr>
    </tbody>
</table>