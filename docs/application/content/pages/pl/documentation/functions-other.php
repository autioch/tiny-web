<?php $content['template'] = 'documentation'; ?>
<p>W tabelach, argumenty oznaczone gwiazdką są wymagane.</p>

<h4 class="subsection-title">partial($name)</h4>
<p>Zwraca adres do części, który następnie powinien być wykorzystany do włączenia części do strony
    za pomocą "include" - include partial($name).</p>
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
            <td>name *</td>
            <td>string</td>
            <td>lokalizacja i nazwa pliku części z katalogu parts</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">log_message($file, $string)</h4>
<p>Zapisuje do wskazanego przez nas pliku w katalogu logs ustalony przez nas tekst, 
    razem z datą oraz godziną.</p>
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
            <td>nazwa pliku, do którego chcemy zapisać tekst, jeśli nie istnieje, zostanie utworzony</td>
        </tr>
        <tr>
            <td>string *</td>
            <td>string</td>
            <td>treść wiadomości, którą chcemy zapisać w pliku</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">get_link_remote($target, $description, $title, $class, $id)</h4>
<p>Działa podobnie do <var>get_link()</var>, z tym że wstawia link do strony zewnętrznej. </p>
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
            <td>cel linka, najlepiej podać razem z protokołem</td>
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

<h4 class="subsection-title">get_debug_info()</h4>
<p>Zwraca wszystkie istotne zmienne wykorzystywane przez framework.</p>

<h4 class="subsection-title">redirect($location)</h4>
<p>Za pomocą funkcji PHP <var>header</var> przekierowuje klienta (przeglądarkę) do wybranej przez nas strony.
    Każda taka operacja jest zapisywana w logu 'redirect'.</p>
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
            <td>location *</td>
            <td>string</td>
            <td>adres strony, na którą ma nastąpić przekierowanie</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">check_link($target)</h4>
<p>Funkcja pozwalająca sprawdzić, czy dla podanego celu istnieje plik. Aktualnie funkcja
    nie działa dla rozszerzeń oraz nie sprawdza kontrolerów. Wszystkie nieistniejące linki 
    zostają zapisane w logu 'check_link'.</p>
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
            <td>adres strony, która ma zostać sprawdzona.</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">echo_default_css(), echo_default_js()</h4>
<p>Funkcje wstawiające css/js, które zostały wpisane w <var>application&bsol;config&bsol;content.php</var>. 
    Powinny być wykorzystywane tylko i wyłącznie w szablonach, w obrębie tagu <var>&lt;head&gt;</var>.</p>

<h4 class="subsection-title">css_echo($file, $id, $media, $extension)</h4>
<p>Funkcja wstawiająca link do pliku css, znajdującego się w podkatalogu <var>public_html&bsol;css</var>. 
    Powinna być wykorzystywana tylko i wyłącznie w szablonach, w obrębie tagu <var>&lt;head&gt;</var>.</p>
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
            <td>name *</td>
            <td>string</td>
            <td>lokalizacja i nazwa pliku css z katalogu <var>public_html&bsol;css</var></td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>atrybut id tagu, domyślnie pusty</td>
        </tr>
        <tr>
            <td>media</td>
            <td>string</td>
            <td>określa, dla jakiego typu medium ma być stosowany styl (np. print, screen)</td>
        </tr>
        <tr>
            <td>extension</td>
            <td>string</td>
            <td>określa rozszerzenie pliku css, domyślnie po prostu 'css'</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">js_echo($name, $id, $defer, $extension)</h4>
<p>Funkcja wstawiająca link do pliku js, znajdującego się w podkatalogu <var>public_html&bsol;js</var>. 
    Powinna być wykorzystywana tylko i wyłącznie w szablonach, w obrębie tagu <var>&lt;head&gt;</var>.</p>
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
            <td>name *</td>
            <td>string</td>
            <td>lokalizacja i nazwa pliku js z katalogu <var>public_html&bsol;js</var></td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>atrybut id tagu, domyślnie pusty</td>
        </tr>
        <tr>
            <td>defer</td>
            <td>boolean</td>
            <td>określa, czy ładowanie skryptu ma zostać opóźnione do czasu załadowania strony,
                domyślnie 'true'</td>
        </tr>
        <tr>
            <td>extension</td>
            <td>string</td>
            <td>określa rozszerzenie pliku js, domyślnie po prostu 'js'</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">css_add($file, $id, $media, $extension)</h4>
<p>Funkcja kolejkująca plik css, znajdujący się w podkatalogu <var>public_html&bsol;css</var>. 
    Wszystkie skolejkowane pliki wypisywane są za pomocą echo_default_css.</p>
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
            <td>name *</td>
            <td>string</td>
            <td>lokalizacja i nazwa pliku css z katalogu <var>public_html&bsol;css</var></td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>atrybut id tagu, domyślnie pusty</td>
        </tr>
        <tr>
            <td>media</td>
            <td>string</td>
            <td>określa, dla jakiego typu medium ma być stosowany styl (np. print, screen)</td>
        </tr>
        <tr>
            <td>extension</td>
            <td>string</td>
            <td>określa rozszerzenie pliku css, domyślnie po prostu 'css'</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">js_add($name, $id, $defer, $extension)</h4>
<p>Funkcja kolejkująca plik js, znajdujący się w podkatalogu <var>public_html&bsol;js</var>. 
    Wszystkie skolejkowane pliki wypisywane są za pomocą echo_default_js.</p>
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
            <td>name *</td>
            <td>string</td>
            <td>lokalizacja i nazwa pliku js z katalogu <var>public_html&bsol;js</var></td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>atrybut id tagu, domyślnie pusty</td>
        </tr>
        <tr>
            <td>defer</td>
            <td>boolean</td>
            <td>określa, czy ładowanie skryptu ma zostać opóźnione do czasu załadowania strony,
                domyślnie 'true'</td>
        </tr>
        <tr>
            <td>extension</td>
            <td>string</td>
            <td>określa rozszerzenie pliku js, domyślnie po prostu 'js'</td>
        </tr>
    </tbody>
</table>

<h4 class="subsection-title">css_ignore($name), js_ignore($name)</h4>
<p>Funkcje usuwające z kolejki pliki css/js.</p>
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
            <td>name *</td>
            <td>string</td>
            <td>azwa pliku css/js do usunięcia z kolejki</td>
        </tr>
    </tbody>
</table>