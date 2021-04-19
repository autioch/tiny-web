<?php $content['template'] = 'tutorial'; ?>
<?php echo_image('structure.png', 'Domyślny układ katalogów', 'img-right') ?>
<p>Na grafice po prawej stronie przedstawiony jest domyślny układ katalogów.</p>
<p>Jak widać, całość podzielona została na dwie części:</p>
<ul class="dash-list">
    <li>
        <p><var>application</var> zawiera wszystkie wewnętrzne elementy, służące do generowania strony,</p>
    </li>
    <li>
        <p><var>public_html</var> zawiera tylko te elementy, które mają być dostępne dla przeglądarek.</p>
    </li>
</ul>
<p>Taki podział pozwala ukryć niepotrzebne elementy, a także zapewnia całkiem niezłe bezpieczeństwo.</p>
<h4 class="subsection-title">public_html</h4>
<p>W tym katalogu mamy pięć podkatalogów - każdy z nich jest przeznaczony
    na pliki odpowiednie do nazwy. Żeby móc je wykorzystać, należy skorzystać z odpowiedniej
    funkcji.</p>
<p>Jest to katalog, na który powinien wskazywać <var>DocumentRoot</var> naszej domeny - to w nim 
    znajduje się <var>.htaccess</var>,
    który kieruje wszystkie zapytania do <var>index.php</var>, który uruchamia cały framework.</p>
<p>Oprócz tego w katalogu mamy jeszcze dwa pliki, które mają na celu obsługę robotów 
    wedrujących w sieci.</p>
<table>
    <thead>
        <tr>
            <th>Plik</th>
            <th>Opis</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><var>.htaccess</var></td>
            <td>plik konfiguracji serwera apache; w pliku zakomentowane ("#") zostały 
                przykładowe zmiany; więcej na 
                <?php echo_link_remote('http://httpd.apache.org/docs/2.2/howto/htaccess.html', 'httpd.apache.org') ?>
            </td>
        </tr>
        <tr>
            <td><var>index.php</var></td>
            <td>plik startowy, z którego uruchmiany jest cały framework; to tutaj można
                zmienić definicje układu katalogów</td>
        </tr>
        <tr>
            <td><var>robots.txt</var></td>
            <td>zawiera instrukcje dla robotów; domyślny układ katalogów 
                pozwala na maksymalne uproszczenie jego zawartości</td>
        </tr>
        <tr>
            <td><var>sitemap.xml</var></td>
            <td>zawiera mapę strony, więcej 
                <?php echo_link_remote('http://pl.wikipedia.org/wiki/Sitemap', 'tutaj') ?>
            </td>
        </tr>
    </tbody>
</table>
<h4 class="subsection-title">application</h4>
<p>W tej części mamy wszystkie katalogi pozwalające na prawidłowe działanie frameworka.</p>
<table>
    <thead>
        <tr>
            <th>Katalog</th>
            <th>Opis</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><var>cache</var></td>
            <td>zawiera wszystkie wygenerowane strony przy włączonym cache, 
                    w celu odświeżenia wszystkich stron należy opróżnić ten katalog</td>
        </tr>
        <tr>
            <td><var>config</var></td>
            <td>zawiera wszystkie podstawowe pliki konfiguracyjne, pliki w tym katalogu są opisane
                    na stronie <?php echo_link('tutorial/config', 'Konfiguracja') ?></td>
        </tr>
        <tr>
            <td><var>content</var></td>
            <td>
                zawiera trzy podkatalogi:
                <ul class="dash-list">
                    <li><var>pages</var> zawiera wszystkie nasze plik stron, do których 
                            można się odwoływać i tworzyć linki</li>
                    <li><var>parts</var> to katalog plików, które możemy łatwo włączać 
                            do inncyh plików za pomocą funkcji 
                            <?php echo_link('documentation/functions-other', 'partial') ?></li>
                    <li><var>templates</var> to szablony stron, do których włączane są
                            nasze "pages";</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><var>library</var></td>
            <td>zawiera wszystkie pliki, które umożliwają działanie frameworka, 
                    <span class="warning">modyfikacja na własną odpowiedzialność</span></td>
        </tr>
        <tr>
            <td><var>logs</var></td>
            <td>przechowuje wszystkie logi plików, zapełniane funkcją 
                    <?php echo_link('documentation/functions-other', 'log_message') ?>.</td>
        </tr>
    </tbody>
</table>