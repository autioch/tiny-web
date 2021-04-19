<?php $content['template'] = 'tutorial'; ?>
<h4 class="subsection-title">Wymagania</h4>
<p>TinyWeb to framework PHP do tworzenia stron. Wykorzystuje przekierowanie za pomocą pliku 
    <var>.htaccess</var>. Potrzebny jest serwer Apache z dodatkiem PHP, oraz zainstalowanym
    i włączonym modułem <var>rewrite_module</var>, opcjonalnie <var>mod_expires</var>.
    Wymagania spełnia więc większość hostingów, nie potrzeba żadnych 
    dodatkowych bibliotek, specjalnej konfiguracji.</p>
<h4 class="subsection-title">Pierwsza strona</h4>
<ol>
    <li><p>Wypakowujemy ściągnięty zip do wybranego przez siebie katalogu znajdującego się w
            <var>DocumentRoot</var> naszego serwera apache.</p></li> 
    <li><p>W katalogu <var>application&bsol;content&bsol;pages</var>, tworzymy plik
            <var>start.php</var>. W treści możemy wpisać klasyczne
            "Witaj świecie!".</p></li>   
    <li><p>W pliku <var>application&bsol;config&bsol;routing.php</var> ustawiamy  
            domyślną stronę oraz stronę błędu na "start":</p>
        <pre>$routing['default'] = 'start';
$routing['error'] = 'start';</pre>
    </li>
    <li>W przeglądarce przechodzimy do wypakowanego katalogu, a następnie do 
        <var>public_html</var>. Powinniśmy zobaczyć nasz tekst :)</p></li>
</ol>
<h4 class="subsection-title">Trochę dodatków</h4>
<ol>
    <li><p>W katalogu <var>public_html</var>, w odpowiednich podkatalogach, 
            umieszczamy swoje grafiki, js, css, flash oraz pliki do pobrania. W pliku 
            <var>application&bsol;config&bsol;content.php</var> uzupełniamy 
            swoje dane, oraz ustalamy parts, css oraz js, z których będziemy korzystać. 
            Dokładny opis można znaleźć w pliku.</p></li>    
    <li><p>W katalogu <var>application&bsol;content&bsol;parts</var>, tworzymy plik
            <var>stopka.php</var>. W treści wpisujemy "dodatek". W naszym
            pliku <var>start.php</var>, za pomocą funkcji 
            <?php echo_link('documentation/functions-other', 'partial') ?> dołączamy naszą część:</p>
        <pre>&lt;?php include partial('stopka');?&gt;</pre>
    </li>
    <li><p>W katalogu <var>application&bsol;content&bsol;pages</var>, tworzymy plik
            <var>podstrona.php</var> i wypełniamy dowolną treścią. W pliku 
            <var>start.php</var>, za pomocą funkcji 
            <?php echo_link('documentation/functions-html', 'echo_link') ?> wstawiamy link do 
            naszej nowej podstrony:</p>
        <pre>&lt;?php echo_link('podstrona');?&gt;</pre> 
    </li>
</ol>
<h4 class="subsection-title">Więcej możliwości</h4>
<p>TinyWeb pozwala na dużo więcej. Kolejne strony pokazują, co jeszcze można zrobić.</p>
