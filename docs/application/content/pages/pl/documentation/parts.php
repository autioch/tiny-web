<?php $content['template'] = 'documentation'; ?>
<p>Części (ang. "parts") są to pliki, które mogą być załączane w dowolnej stronie, szablonie, lub
    nawet innej części. Dodatkowo, można je ustawić jako skrypty dołączane przed 
    lub po przetworzeniu strony.</p>
<p>Można je traktować jak helpery lub pluginy, porównując do innych skryptów/frameworków.</p>
<p>Części przechowujemy w katalogu <var>application&bsol;content&bsol;parts</var> (lub podkatalogach),
    natomiast żeby wstawić część do kodu, wystarczy w dowolnym miejscu umieścić linijkę:</p>
<pre>&lt;?php include partial('nazwa_parts'); ?&gt;</pre>
<p>Ta funkcjonalność frameworka daje olbrzymie możliwości. 
    Parts mogą zawierać powtarzalne elementy HTML, funkcje i fragmenty kodu PHP,
    a nawet odwołania do innych parts. Mogą wyświetlać gotowy kod HTML na stronie,
    zmieniać zaplanowany kod za pomocą JS i wiele innych. Granicą wykorzystania
    parts jest tylko granica wyobraźni.</p>