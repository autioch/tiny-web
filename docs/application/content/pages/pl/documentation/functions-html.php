<?php $content['template'] = 'documentation'; ?>
<p>TinyWeb nie ma swojego silnika szablonów, więc nie trzeba się uczyć nowego formatu.
    Zamiast tego oferuje kilka funkcji php, które można łatwo wstawić w kodzie/szablonie HTML.</p>
<p>W tabelach, argumenty oznaczone gwiazdką są wymagane. Wszystkie funkcje wymienione 
    w tej części są dostępne w dwóch wersjach:</p>
<ul class="dash-list">
    <li>echo_[nazwa] - wypisuje od razu wynik funkcji,</li>
    <li>get_[nazwa] - zwraca wynik funkcji, który można przechować lub wykorzystać w innej funkcji.</li>
</ul>
<p>Korzystając z wersji get_[nazwa] można łączyć ze sobą funkcje - używać jednej jako 
    argumentu innej, na przykład grafiki jako opisu linka. W przypadku pojawienia 
    się nieprawidłowego kodu, można spróbować uzupełnić opcjonalne argumenty. Bądź
    uprościć to, co planuje się przedstawić.</p>



<h4 class="subsection-title">get_link($target, $description, $title, $class, $id)</h4>
<p>Wstawia link do strony z katalogu pages. Wszystkie linki wstawiane w ten sposób są
    automatycznie sprawdzane i jeśli prowadzą do aktualnej strony lub strony po drodze, otrzymują klasę 
    <var>active</var> w dodatku do pozostałych swoich klas.</p>
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
            <td>target *</td>
            <td>string</td>
            <td>cel linka, wskazujemy na plik strony w katalogu pages</td>
        </tr>
        <tr>
            <td>description</td>
            <td>string</td>
            <td>opis, który ma się pojawić w linku</td>
        </tr>
        <tr>
            <td>title</td>
            <td>string</td>
            <td>tytuł, który wyświetli się po najechaniu myszką na link</td>
        </tr>
        <tr>
            <td>class</td>
            <td>string</td>
            <td>klasa css linku</td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>id css linku</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">get_download($file, $description, $title, $class, $id</h4>
<p>Wstawia link do pliku do pobrania z katalogu download.</p>
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
            <td>file *</td>
            <td>string</td>
            <td>nazwa pliku z katalogu <var>public_html&sol;download</var></td>
        </tr>
        <tr>
            <td>description</td>
            <td>string</td>
            <td>opis, który ma się pojawić w linku</td>
        </tr>
        <tr>
            <td>title</td>
            <td>string</td>
            <td>tytuł, który wyświetli się po najechaniu myszką na link</td>
        </tr>
        <tr>
            <td>class</td>
            <td>string</td>
            <td>klasa css linku</td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>id css linku</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">get_email($email, $description, $title, $class, $id)</h4>
<p>Wstawia adres email do strony, z prostym zabezpieczeniem przeciw spamerom.</p>
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
            <td>email *</td>
            <td>string</td>
            <td>email, który chcemy podać</td>
        </tr>
        <tr>
            <td>description</td>
            <td>string</td>
            <td>opis, który ma się pojawić w linku do maila</td>
        </tr>
        <tr>
            <td>title</td>
            <td>string</td>
            <td>tytuł, który wyświetli się po najechaniu myszką na link</td>
        </tr>
        <tr>
            <td>class</td>
            <td>string</td>
            <td>klasa css linku</td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>id css linku</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">get_image($src, $title, $class, $id, $width, $height)</h4>
<p>Wstawia obraz na stronie.</p>
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
            <td>src *</td>
            <td>string</td>
            <td>ścieżka do pliku z katalogu <var>public_html&sol;images</var></td>
        </tr>
        <tr>
            <td>title</td>
            <td>string</td>
            <td>tytuł, który wyświetli się po najechaniu myszką na obraz lub jako 
                tekst w przypadku niewyświetlenia obrazu</td>
        </tr>
        <tr>
            <td>class</td>
            <td>string</td>
            <td>klasa css obrazu</td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>id css obrazu</td>
        </tr>
        <tr>
            <td>width</td>
            <td>integer</td>
            <td>szerokość grafiki</td>
        </tr>
        <tr>
            <td>height</td>
            <td>integer</td>
            <td>wysokość grafiki</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">get_flash($data, $width, $height, $class, $id)</h4>
<p>Wstawia flash do strony z katalogu flash</p>
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
            <td>src *</td>
            <td>string</td>
            <td>ścieżka do pliku .swf, który chcemy załączyć z katalogu <var>public_html&sol;flash</var></td>
        </tr>
        <tr>
            <td>width *</td>
            <td>integer</td>
            <td>szerokość grafiki</td>
        </tr>
        <tr>
            <td>height *</td>
            <td>integer</td>
            <td>wysokość grafiki</td>
        </tr>        
        <tr>
            <td>title</td>
            <td>string</td>
            <td>tytuł, który wyświetli się w przypadku niewyświetlenia flasha</td>
        </tr>
        <tr>
            <td>class</td>
            <td>string</td>
            <td>klasa css</td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>id css</td>
        </tr>

    </tbody>
</table>

<h4 class="subsection-title">get_address($target)</h4>
<p>Zwraca pełen adres do wybranego celu, niezależnie od tego, czy jest to
    strona, grafika, czy też dowolny inny plik z podkatalogu <var>public_html</var>.</p>
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
            <td>target *</td>
            <td>string</td>
            <td>cel, którego adres chcemy otrzymać</td>
        </tr>
    </tbody>
</table>