<?php $content['template'] = 'documentation'; ?>
<p>While processing request, TinyWeb defines a number of constants, that make usage of the
    framework easier.</p>
<table>
    <thead>
        <tr>
            <th>Constant</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>LIB, CONFIG, CACHE, PAGES, PARTS, TEMPLATES, LOG</td>
            <td>Define paths to the vital folders, used mainly internally</td>
        </tr>
        <tr>
            <td>TW</td>
            <td>TinyWeb version</td>
        </tr>
        <tr>
            <td>TW_USE_LOCALE</td>
            <td>Defines if i18n is used</td>
        </tr>
        <tr>
            <td>TW_LANGUAGE</td>
            <td>Defines current language, based on <var>$content['language']</var>
                or if TW_USE_LOCALE, first checks request for the language definition</td>
        </tr>
        <tr>
            <td>TW_USE_CONTROLLERS</td>
            <td>Defines if any controllers are set</td>
        </tr>
        <tr>
            <td>TW_USE_EXTENSION</td>
            <td>Defines if extension is set</td>
        </tr>
        <tr>
            <td>TW_EXT</td>
            <td>Stores set extension, or an empty string if extension is not set</td>
        </tr>
        <tr>
            <td>TW_FOLDER</td>
            <td>If TinyWeb is run from subdirectory, this constant stores exact path to <var>index.php</var></td>
        </tr>
        <tr>
            <td>TW_REQUEST</td>
            <td>Stores fully parsed request, checked against all options enabled</td>
        </tr>
        <tr>
            <td>TW_SELECTED</td>
            <td>Stores selected page</td>
        </tr>
    </tbody>
</table>
<p>All constants defined by the user can be received by executing the code below.</p>
<pre>&lt;?php print_r(get_defined_constants(true)['user']); ?&gt;</pre>
