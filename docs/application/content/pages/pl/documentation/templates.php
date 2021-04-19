<?php $content['template'] = 'documentation'; ?>
<p>W katalogu <var>application&bsol;content&bsol;templates</var> znajdują się 
    szablony, czyli pliki, do których włączane są gotowe strony. Standardowo, wykorzystujemy
    szablon <var>default</var>, jeśli jednak chcemy to zmienić, to dla
    wszystkich stron możemy to zrobić w pliku <var>application&bsol;config&bsol;content.php</var>:</p>
<pre>$content['template'] = 'default'; </pre>
<p>Jeśli zmiana ma dotyczyć tylko konkretnej strony, to w dowolnym miejscu tej strony (najlepiej na
    samej górze) możemy to zmienić:</p>
<pre>&lt;?php $content['template'] = 'ajax'; ?&gt;</pre>
<p>Takie szablony możemy dowolnie edytować, oraz tworzyć swoje własne. Przy tworzeniu trzeba
    jednak pamiętać o trzech elementach, kluczowych do prawidłowego działania frameworka.</p>

<table>
    <thead>
        <tr>
            <th>Kod</th>
            <th>Opis</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><pre>&lt;?php echo $content['value'] ?&gt;</pre></td>
            <td>wypisuje całą treść wygenerowanej strony - zawartość pliku strony razem
                z wynikiem wszystkich skryptów z <var>$script_before</var> i 
                <var>$script_after</var></td>
        </tr>
        <tr>
            <td><pre>&lt;?php echo_default_css(); ?&gt;</pre></td>
            <td>wstawia wszystkie szablony css, zdefiniowane w pliku
                <var>application&bsol;config&bsol;content.php</var> lub 
                w poszczególnych stronach za pomocą <var>css_add</var>, <var>css_ignore</var>
            </td>
        </tr>
        <tr>
            <td><pre>&lt;?php echo_default_js(); ?&gt;</pre></td>
            <td>wstawia wszystkie skrypty js, zdefiniowane w pliku
                <var>application&bsol;config&bsol;content.php</var> lub 
                w poszczególnych stronach za pomocą <var>js_add</var>, <var>js_ignore</var>
            </td>
        </tr>
    </tbody>
</table>