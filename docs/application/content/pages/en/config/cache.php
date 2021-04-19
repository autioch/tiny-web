<?php $content['template'] = 'config'; ?>
<p>Sometimes a single request (page) can generate large amounts of content - not only HTML,
    but also css, js, images. Because of that, responding to the client (and so the client's 
    experience) may significantly worsen. TinyWeb addresses that issue with commonly
    available methods, which do not require any special configuration.</p>
<p>First option, enabled by default is the apache <var>mod_expires</var> module, that, 
    describing briefly, causes the client (internet browser) asking for content to receive 
    answer that content didn't change and the client can use content from its memory.
    Settings for which content should be cached that way and for how long it should remain
    fresh can be set in <var>public_html&bsol;.htaccess</var>. Read more about
    <?php echo_link_remote('http://httpd.apache.org/docs/current/mod/mod_expires.html', 'mod_expires') ?>.</p>
<p>Second option is software cache that is built-in into TinyWeb. It can be configured in
    <var>config&bsol;cache.php</var>. Enabling cache causes each request
    to first check if page is already cached (by default, a file in 
    <var>application&bsol;cache</var>). If yes, content is served from cache. If no, 
    page is parsed, stored in cache and served to the client. Configuration enables which pages
    should not be cached, and how long pages remain fresh in cache.</p>
<p>Aside from options above, other apache modules can be used (after checking that 
    they are enabled), or for example <?php echo_link_remote('http://www.php.net/manual/en/book.apc.php', 'APC') ?>.</p>