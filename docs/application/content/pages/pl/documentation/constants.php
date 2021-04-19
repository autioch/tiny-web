<?php $content['template'] = 'documentation'; ?>
<p>Podczas działania, TinyWeb definiuje szereg stałych, które mają na celu 
    ułatwienie korzystania ze frameworka.</p>
<table>
    <thead>
        <tr>
            <th>Stała</th>
            <th>Opis</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>LIB, CONFIG, CACHE, PAGES, PARTS, TEMPLATES, LOG</td>
            <td>Definiują ścieżki do katalogów, wykorzystywane przede wszystkim 
                wewnętrzenie</td>
        </tr>
        <tr>
            <td>TW</td>
            <td>Wersja TinyWeb</td>
        </tr>
        <tr>
            <td>TW_USE_LOCALE</td>
            <td>Określa, czy wykorzystywana jest opcja i18n</td>
        </tr>
        <tr>
            <td>TW_LANGUAGE</td>
            <td>Określa aktualny język, na podsawie <var>$content['language']</var>
                lub jeśli TW_USE_LOCALE, to najpierw sprawdza żądanie pod kątem języka</td>
        </tr>
        <tr>
            <td>TW_USE_CONTROLLERS</td>
            <td>Określa, czy zdefiniowane są jakiekolwiek kontrolery</td>
        </tr>
        <tr>
            <td>TW_USE_EXTENSION</td>
            <td>Określa, czy ustawione jest rozszerzenie</td>
        </tr>
        <tr>
            <td>TW_EXT</td>
            <td>Przechowuje ustawione rozszerzenie, lub jest pustym ciągiem znaków,
                jeśli rozszerzenie nie zostało ustawione</td>
        </tr>
        <tr>
            <td>TW_FOLDER</td>
            <td>Jeśli TinyWeb uruchamiane jest z podkatalogu, ta stała przechowuje
                dokładną ścieżkę do pliku <var>index.php</var></td>
        </tr>
        <tr>
            <td>TW_REQUEST</td>
            <td>Przechowuje ostatecznie przetworzone żądanie, sprawdzone pod kątem
                języka, kontrolerów oraz rozszerzenia</td>
        </tr>
        <tr>
            <td>TW_SELECTED</td>
            <td>Przechowuje wybraną stronę</td>
        </tr>
    </tbody>
</table>
<p>Listę wszystkich stałych zdefiniowanych przez użytkownika można uzyskać wykonując poniższy kod.</p>
<pre>&lt;?php print_r(get_defined_constants(true)['user']); ?&gt;</pre>
