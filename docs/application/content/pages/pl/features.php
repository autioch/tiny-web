<p>TinyWeb jest niewielki i bardzo prosty. Można o nim pomyśleć jak o pojedynczym skrypcie PHP,
    który w trakcie swojego działania wybiera stronę do wyświetlenia, a następnie w razie potrzeby
    wykonuje ewentualny kod PHP zawarty w pliku strony. Bez klas, bez MVC. 
    Pomimo tak znaczącej prostoty i niewielkiej ilości kodu oferuje całkiem sporo możliwości.</p>
<h4 class="subsection-title">Kontrola nad wyborem treści strony</h4>
<ul class="dash-list">
    <li>definiowanie domyślnej strony,</li>
    <li>proste definiowanie strony wyświetlanej w przypadku jakiegokolwiek błędu,</li>
    <li>automatyczne tworzenie poprawnych, elegancko wyglądających linków.</li>    
</ul>

<h4 class="subsection-title">Kontrola wyglądu stron</h4>
<ul class="dash-list">
    <li>określanie plików css oraz js, które mają być załączane do każdej strony,
        do wybranej strony, bądź ignorowane na konkretnej stronie,</li>    
    <li>składanie stron z mniejszych elementów, tzw. "parts",</li>
    <li>kontrolę "parts" domyślnie załączanych do każdej strony przed i po właściwej
        treści strony,</li>
    <li>możliwość wyłączania określonych parts na wybranych przez siebie stronach.</li>
</ul>

<h4 class="subsection-title">Prosty mechanizm cache</h4>
<ul class="dash-list">
    <li>włączanie i wyłączanie cache,</li>
    <li>kontrolę, po jakim czasie cachowane strony zostaną automatycznie odświeżone,</li>
    <li>wyłączenie wybranych stron z cachowania, gdy to jest włączone.</li>
</ul>

<h4 class="subsection-title">Internacjonalizacja językowa</h4>
<ul class="dash-list">
    <li>proste linki w przypadku jednej wersji językowej,</li>
    <li>wbudowana obsługa dowolnej ilości wersji językowych,</li>
    <li>automatyczne generowanie zlokalizowanych linków.</li>
</ul>

<h4 class="subsection-title">Dodatkowo</h4>
<ul class="dash-list">
    <li>ustawienie dowolnego (w tym pustego) rozszerzenia adresów (.php, .html, .jsp, ...), </li>
    <li>możliwość działania wybranych stron jak klasyczne kontrolery,</li>
    <li>domyślna struktura katalogów pozwala na zabezpieczenie i ukrycie tych
    elementów frameworka, których postronne osoby oraz roboty nie powinny oglądać,</li>
    <li>możliwość zmiany układu swoich katalogów,</li>
    <li>logowanie wydarzeń.</li>
</ul>

<h4 class="subsection-title">TinyWeb nie posiada zintegrowanych metod dostępu do baz danych</h4>
<ul class="dash-list">
    <li>framework ma służyć przede wszystkich do tworzenia prostych stron ("wizytówek"), które
        nie powinny potrzebować dostępu do baz danych,</li>
    <li>w przypadku konieczności łączenia się z bazami danych, pozostawia wybór sposobu 
        osobie tworzącą stronę,</li>
    <li>dodanie obsługi baz danych znacząco zwiększyło by rozmiar, poziom skomplikowania 
        oraz ilość niebezpiecznych miejsc w kodzie strony,</li>
    <li>niezależnie od planowanego użycia baz danych, proponuję skorzystać z gotowych rozwiązań.</li>
</ul>
