<?php $content['template'] = 'tutorial'; ?>
<p>Konfigurację dotyczącą układu katalogów można zmienić w pliku <var>index.php</var>. Nazwę katalogów
    <var>public_html</var> oraz <var>application</var> można dowolnie zmienić - wykonujemy
    skrypt <var>index.php</var> i to on odwołuje się do innych katalogów, nigdy żaden fragment nie 
    odwołuje się do niego. Dodatkową konfigurację można wprowadzić w pliku 
    <var>public_html&bsol;.htaccess</var>.</p>
<p>Wszystkie pozostałe pliki konfiguracyjne znajdują się domyślnie w katalogu <var>application&bsol;config</var>.</p>
<table>
    <thead>
        <tr>
            <th>Plik</th>
            <th>Opis</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <var>routing.php</var>
            </td>
            <td>
                <ul class="dash-list">
                    <li>domyślna strona,</li>
                    <li>strona błędu,</li>
                    <li>rozszerzenie stron,</li>
                    <li>wybór stron - kontrolerów</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><var>cache.php</var></td>
            <td>
                <ul class="dash-list">
                    <li>włączanie/wyłączanie cache,</li>
                    <li>trwałość cache,</li>
                    <li>wyłączanie stron z cache</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><var>config.php</var></td>
            <td>
                <ul class="dash-list">
                    <li>metadane strony (tytuł, opis, autor, itp.),</li>
                    <li>język strony,</li>
                    <li>włączanie/wyłączanie obsługi wielu języków,</li>
                    <li>definiowanie dostępnych języków,</li>
                    <li>skrypty przed i po przetwarzaniu strony,</li> 
                    <li>wybór css i js</li>
                </ul>
            </td>
        </tr>
    </tbody>
</table>
<p>Oczywiście jest to podstawowe ustawienie, każdy z tych plików można rozbić za pomocą 
    "include", lub stworzyć kolejne pliki, odpowiadające za konfigurację innych elementów.</p>
<p>Umieszczenie konfiguracji w jednym miejscu pozwala na łatwą kontrolę tego, co się dzieje.
    Istnieje możliwość dodatkowej konfiguracji w poszczególnych plikach, na przykład zmiana
    tytułu strony, czy css/js, jednak w miarę możliwości, lepiej jest trzymać wszystko w 
    jednym miejscu.</p>