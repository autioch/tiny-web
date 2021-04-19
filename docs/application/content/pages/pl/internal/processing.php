<?php $content['template'] = 'internal'; ?>
<p>Każde żądanie dzięki <var>.htaccess</var> i <var>rewrite_module</var> jest kierowane 
    do <var>index.php</var>, a następnie przechodzi przez kolejne kroki, aż do 
    wytworzenia kompletnej strony.</p>
<h4 class="subsection-title">Routing</h4>
<ol>
    <li>
        <p>Ustalenie żądania na podstawie <var>$_SERVER['SCRIPT_NAME']</var> oraz 
            <var>$_SERVER['REQUEST_URI']</var>.</p>
    </li>
    <li>
        <p>Sprawdzenie, czy ustawiona jest <?php echo_link('config/i18n', 'internacjonalizacja (i18n)') ?>.</p>
    </li>
    <li>
        <p>Sprawdzenie, czy żądana strona jest <?php echo_link('config/controllers', 'kontrolerem') ?>.</p>
    </li>
    <li>
        <p>Sprawdzenie, czy ustawione jest <?php echo_link('config/extensions', 'rozszerzenie') ?> stron.</p>
    </li>
    <li>
        <p>Sprawdzenie, czy istnieje plik żądanej strony.</p>
    </li>
</ol>
<h4 class="subsection-title">Cache</h4>
<ol>
    <li>
        <p>Sprawdzenie, czy wykorzystujemy cache.</p>
    </li>
    <li>
        <p>Sprawdzenie, czy żądana strona jest w cache i jest nadal aktualna.</p>
        <p>Jeśli tak, tutaj kończymy nasz skrypt, serwując zawartość pliku w cache.</p>
    </li>
</ol>
<h4 class="subsection-title">Content</h4>
<ol>
    <li>
        <p>Wczytujemy funkcje wykorzytywane na stronach.</p>
    </li>   
    <li>
        <p>Dodajemy wszystkie "parts" zdefiniowane w <var>script_before</var>.</p>
    </li>   
    <li>
        <p>Wczytujemy plik strony wybrany w części "routing".</p>
    </li>   
    <li>
        <p>Dodajemy wszystkie "parts" zdefiniowane w <var>script_after</var>.</p>
    </li>  
    <li>
        <p>Wygenerowany do tej pory kod umieszczamy w wybranym szablonie.</p>
    </li>  
    <li>
        <p>Jeśli wykorzystywane jest cache, umieszczamy całość w odpowiednim pliku.</p>
    </li>  
</ol>
<h4 class="subsection-title">Gotowe!</h4>