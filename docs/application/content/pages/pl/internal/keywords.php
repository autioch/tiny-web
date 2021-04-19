<?php $content['template'] = 'internal'; ?>
<p>TinyWeb wykorzystuje kilka zmiennych, przechowujących wszystkie ustawienia. 
    Zgodnie z założeniami, jest napisany prosto, bez obiektowości. Oczywiście dzięki OOP można by
    bardziej elegancko zrobić niektóre rzeczy, ale ten framework po prostu ma działać.</p>
<p>Wartości tych zmiennych są ustalane przed i/lub po parsowaniu treści strony, tak więc 
    nie radzę ich zmieniać, chociaż samo odczytywanie jest jak najbardziej w porządku.</p>
<h4 class="subsection-title">routing</h4>
<p>W tej tablicy są wszystkie zmienne odpowiadające za wybór strony do zeserwowania 
    przeglądarce. To w niej można ustawić domyślną stronę, strony-kontrolery oraz 
    rozszerzenie strony widoczne w przeglądarce.</p>
<h4 class="subsection-title">cache, nocache</h4>
<p>W tych tablicach są wszystkie zmienne decydujące o tym, czy i jak ma być użyte cache.</p>
<h4 class="subsection-title">content</h4>
<p>W tej tablicy są wszystkie informacje, które mają posłużyć do wypełnienia szablonu strony.
    Najważniejsza z nich to <var>$content['value']</var> - zawiera kod przygotowanej strony, który zostanie 
    wstawiony do szablonu.</p>
<h4 class="subsection-title">css, css_add, css_ignore, js, js_add, js_ignore</h4>
<p>Tablice służące do wyboru odpowiednich css i skryptów, załączanych w szablonach za 
    pomocą funkcji <var>get_default_css()</var> oraz <var>get_default_js()</var>.</p>
<h4 class="subsection-title">Pozostałe zmienne</h4>
<p>Oprócz powyższych, ważnych zmiennych wykorzystywane są również mniej istotne, modyfikowalne
    zmienne: <var>$i</var> oraz <var>$length</var>.</p>
<h4 class="subsection-title">script_before, script_after</h4>
<p>Tablice zawierające listę "parts", które mają być załączane przed i po przygotowywaniu strony, 
    zanim ta zostanie wstawiona do szablonu.</p>
<p>Listę wszystkich zmiennych zadeklarowanych przez użytkownika można uzyskać wykonując kod:</p>
<pre>
&lt;?php
$ignore = array('GLOBALS', '_FILES', '_COOKIE', '_POST', '_GET', '_SERVER', '_ENV', 'ignore');
$vars = array_diff_key(get_defined_vars() + array_flip($ignore), array_flip($ignore));
echo '&lt;pre&gt;' , print_r($vars, true) , '&lt;/pre&gt;';
?&gt;
</pre>