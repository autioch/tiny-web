<?php $content['template'] = 'config'; ?>
<p>TinyWeb umożliwa ustawienie dowolnej bezpośredniej podstrony, żeby działała niczym 
    kontroler - jeśli żądanie zaczyna się od ustawionej podstrony, ustawiona zostaje jako 
    aktualna, natomiast cała reszta żądania zostaje przekazana jako parametry.</p>
<p class="warning">Kontrolery nie działają z ustawionym rozszerzeniem stron.</p>
<p>Strony, które mają być kontrolerami, można zdefiniować w pliku 
    <var>application&bsol;config&bsol;routing.php</var>. Ustawiając na przykład stronę
    <var>test</var> jako kontroler, wykonajmy takie żądanie:</p>
<pre>domena.net&sol;test&sol;zapytanie&sol;szczegoly</pre>
<p>To żądanie zostanie przekierowane do strony <var>test</var>, natomiast cała reszta
    zostanie przeniesiona do tabeli <var>$routing['params']</var>.</p>
<pre>$routing['params'] = Array([0] => 'zapytanie', [1] => 'szczegoly'); </pre>
<p>W ten sposób można samodzielnie obsłużyć takie żądanie na podstawie tych parametrów. 
    Mniej więcej w ten sposób działają klasyczne kontrolery w MVC - 'test' byłoby kontrolerem,
    'zapytanie' metodą tego kontrolera, natomiast 'szczegoly' określonym argumentem dla metody.</p>