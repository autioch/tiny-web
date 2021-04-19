<?php $content['template'] = 'config'; ?>
<p>The most popular form for links is the one that is most readable for a human, which 
    allows to easily remember the link or manual saving it. By looking at the links
    below, it is easily to notice the diffrence.</p>
<pre>www.domain.net&sol;index.php?page_id=news&amp;arg1=123&amp;arg2=preview

www.domain.net&sol;news.php?id=123&amp;action=preview

www.domain.net&sol;news&sol;123&sol;preview</pre>
<p>Best for human is of course the last link. For various reasons, and the end of the link
    there's no extension (it's like a directory). If pages (and so the links) should 
    have extension, it can be set in <var>application&bsol;config&bsol;routing.php</var>.</p>
<pre>$routing['extension'] = '.html';</pre>
<p>Any extension can be set, it should be rememebered however, that dot must be present, 
    otherwise it will become unreadable. After such change, 
    <?php echo_link('documentation/functions-html', 'get_link') ?> function automatically
    creates links with the set extension.</p>