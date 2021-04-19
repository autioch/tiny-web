<?php $content['template'] = 'config'; ?>
<p>Internacjonalizacja, w skrócie i18n (i + 18 liter + n w języku angielskim), to 
    możliwość przedstawiania treści w różnych językach. Więcej na 
    <?php echo_link_remote('http://pl.wikipedia.org/wiki/Internacjonalizacja_%28informatyka%29', 'wikipedii.') ?>.</p>
<p>W pliku <var>config&bsol;content.php</var> można znaleźć trzy opcje odpowiadające za 
    internacjonalizację językową strony. Listę kodów można znaleźć na przykład 
    <?php echo_link_remote('http://www.loc.gov/standards/iso639-2/php/code_list.php', 'tutaj') ?>.</p>
<table>
    <thead>
        <tr>
            <th>Zmienna</th>
            <th>Opis</th>
            <th>Możliwe wartości</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><var>$content['language']</var></td>
            <td>Określa, w jakim języku napisana jest strona</td>
            <td>Dwuznakowy skrót nazwy języka, np. 'pl, 'en'</td>
        </tr>
        <tr>
            <td><var>$content['localize']</var></td>
            <td>Określa, czy framework ma działać na więcej niż jednej wersji językowej</td>
            <td><var>true</var> lub <var>false</var></td>
        </tr> 
        <tr>
            <td><var>$content['languages']</var></td>
            <td>Określa dostępne wersje językowe</td>
            <td>Tablica zawierająca nazwy języków</td>
        </tr>
    </tbody>
</table>
<p>Domyślnie, <var>$content['localize']</var> jest ustawione na <var>false</var>, co powoduje, 
    że framework normalnie poszukuje plików stron w katalogu <var>content&bsol;pages</var>, natomiast
    w szablonach ustawia język na wartość ustawioną w <var>$content['language']</var>.
    Zmienna <var>$content['languages']</var> nie jest w tej sytuacji wykorzystywana.</p>
<h4 class="subsection-title">Wielojęzykowa konfiguracja</h4>
<p>Jeśli wartość <var>$content['localize']</var> zostanie ustawiona na <var>true</var>,
    to framework przetwarzając żądanie będzie sprawdzał, czy pierwsza część ("katalog") odpowiada
    któremukolwiek z języków ustawionych w <var>$content['languages']</var>. Jeśli tak, 
    <var>$content['language']</var> zostaje ustawione na ten język, natomiast framework sprawdza 
    istnienie żądanej strony w podkatalogu <var>content&bsol;pages</var> o nazwie ustawionego języka.
    Na przykład, jeśli zapytanie ma postać:</p>
<pre>tinyweb.qb.net.pl&sol;pl&sol;docs&sol;localization</pre>
<p>To framework ustali, że strona ma być wyświetlona w języku polskim, natomiast poszukiwany 
    plik strony to <var>pages&bsol;pl&bsol;docs&bsol;localization.php</var>. Dla każdej wersji
    językowej musi istnieć katalog z plikami stron w danym języku.</p>
<p>Jeśli język nie został wybrany lub wybrany został język nie występujący w tablicy 
    <var>$content['languages']</var>, to ustawiony zostaje domyślnie język 
    <var>$content['language']</var>.</p>
<p>Funkcje <var>get_link</var> oraz <var>echo_link</var> automatycznie sprawdzają, czy 
    włączona jest internacjonalizacja językowa i samodzielnie dodają wybrany język do każdego linku, 
    co powoduje, że generując linki, nie trzeba przejmować się aktualnym językiem.</p>
<h4 class="subsection-title">Zmiana języka</h4>
<p>Dla ułatwienia przełączania pomiędzy językami, TinyWeb udostępnia specjalną funkcję,
    tworzącą link do aktualnej strony w wybranym przez nas języku. Jest to 
    <var>get_link_language</var>, występująca również w opcji <var>echo_link_language</var>.</p>
<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Typ</th>
            <th>Opis</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>language *</td>
            <td>string</td>
            <td>nazwa języka, na który ma być przełączona strona</td>
        </tr>
        <tr>
            <td>description</td>
            <td>string</td>
            <td>opis linku</td>
        </tr>
        <tr>
            <td>title</td>
            <td>string</td>
            <td>tytuł</td>
        </tr>
        <tr>
            <td>class</td>
            <td>string</td>
            <td>klasa linku</td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>id linku</td>
        </tr>
    </tbody>
</table>
<h4 class="subsection-title">Słownik</h4>
<p>Przy wersjach wielojęzykowych przydatne jest narzędzie, które automatycznie podaje nam
    określone treści w wybranym języku. Takim narzędziem jest klasa <var>qbDictionary</var>.
    Aby z niej skorzystać, potrzebna jest tablica z tłumaczeniami, na przykład:</p>
<pre>
$dictionary = array(
    'about' => array('pl' => 'O TinyWeb', 'en' => 'About'),
    'changelog' => array('pl' => 'Changelog', 'en' => 'Changelog')
);
</pre>
<p>Następnie należy dołączyć plik klasy (lub skorzystać z autoloadera) i stworzyć obiekt:</p>
<pre>
include_once LIB . 'qbDictionary.class.php';
$dict = new qbDictionary($dictionary, $content['language']);
</pre>
<p>W przykładzie powyżej jako drugi argument (język) przekazany jest język wybrany podczas
    przetwarzania żądania do strony. Żeby skorzystać ze słownika, wystarczy potraktować go jak
    tablicę:</p>
<pre>echo $dict['about'];   //wypisze "O TinyWeb" w naszym przykładzie</pre>
<p>Aby uzyskać tłumaczenie z innego niż aktualnego języka, wystarczy z korzystać z metody get:</p>
<pre>echo $dict->get('about', 'en');</pre>
<p>Taki słownik jest przydatny na przykład przy tworzeniu uniwersalnego menu, oraz przy
    tworzeniu "parts" niezależnych od wybranego języka.</p>