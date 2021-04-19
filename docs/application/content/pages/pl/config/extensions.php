<?php $content['template'] = 'config'; ?>
<p>Popularnym formatem linków jest jak forma najbardziej przyjazna dla człowieka 
    (a także dla maszyn), co pozwala na łatwiejsze zapamiętanie lub ręczne zapisanie adresu.
    Wystarczy porównać poniższe linki, aby zauważyć różnicę.</p>
<pre>www.strona.net.pl&sol;index.php?page_id=aktualnosci&amp;arg1=123&amp;arg2=preview

www.strona.net.pl&sol;aktualnosci.php?id=123&amp;action=preview

www.strona.net.pl&sol;aktualnosci&sol;123&sol;preview</pre>
<p>Czytelniejszy dla człowieka jest oczywiście ostatni link. Z różnych powodów, na samym końcu
    tego linka nie ma rozszerzenia pliku (jest niczym katalog). Jeśli strony (a zatem i linki) mają posiadać 
    rozszerzenie, to można je ustawić w pliku <var>application&bsol;config&bsol;routing.php</var>.</p>
<pre>$routing['extension'] = '.html';</pre>
<p>Można ustawić dowolne rozszerzenie, trzeba jednak pamiętać, że trzeba podać kropkę, inaczej
    stanie się ono nieczytelne. Po takiej zmianie, funkcja 
    <?php echo_link('documentation/functions-html', 'get_link') ?> automatycznie zacznie
    generować linki z ustawionym rozszerzeniem.</p>