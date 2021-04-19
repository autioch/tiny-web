<?php $content['template'] = 'documentation'; ?>
<p>TinyWeb traktuje żądania prosto - dla każdego z nich powinien istnieć pojedynczy plik
    (poza <?php echo_link('config/controllers', 'kontrolerami') ?>). Jest to znaczne 
    uproszczenie, w niektórych momentach będące ułatwieniem, w niektórych ograniczeniem.</p>
<p>Pliki zawierające właściwą treść strony umieszczamy w katalogu 
    <var>application&bsol;content&bsol;pages</var>, lub podkatalogach. Powinny one zawierać
    wyjątkową treść strony - jeśli jakieś elementy mają się powtarzać na innych stronach, 
    najlepiej przenieść je do <?php echo_link('documentation/parts', 'parts') ?> i dołączać tam gdzie trzeba.</p>
<p>Sama treść strony może zawierać dowolną ilość kodu HTML oraz PHP, a także javascript, 
    obrazy, flash... Jednak nie powinno się w niej używać znacznika <var>&lt;style&gt;</var>.</p>
<p>Jeśli przed lub po przetworzeniu treści stron chcemy dołączyć jakieś dodatkowe
    parts, możemy je zdefiniować w pliku <var>application&bsol;config&bsol;content.php</var>:</p>
<pre>$script_before['nazwa_parts'] = true; 
$script_after['nazwa_parts'] = true;</pre>
<p>Zdefiniowane w ten sposób skrypty są wykonywane, zanim strona zostanie włączona do 
    <?php echo_link('documentation/templates', 'szablonu') ?>.</p>