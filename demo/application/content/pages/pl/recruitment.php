<h3 class="section-title"><?php echo $dict['recruitment'] ?></h3>
<p>Poniżej znajduje się tabela klas i specjalizacji, dla których aktualnie prowadzimy rekrutację.</p>
<?php include partial('recruitment/recruitment-table') ?>
<p>Jeśli nie grasz żadną z aktualnych powyżej, nadal możesz złożyć podanie, 
    jednak szanse na przyjęcie znacznie się zmniejszają.</p>
<h4 class="subsection-title">Składanie podań</h4>
<p>Pierwszym etapem jest wypełnienie formularza. Prosimy o podanie 
    prawidłowego adresu email - posłuży do kontaktu w sprawie drugiego etapu rekrutacji.
<p>Po wypełnieniu formularza, na podany <strong>nick oraz adres mailowy</strong> skontaktuje się z Tobą nasz rekrutant, aby przeprowadzić drugi 
    etap rekrutacji, którym jest rozmowa poprzez TS.</p>
<h4 class="subsection-title">Uwaga!</h4>
<p>Nie przyjmujemy graczy, którzy uczestniczyli w jakichkolwiek oszustwach na serwerze Sunwell.
    W przypadku ukrycia takich informacji, następuje natychmiastowe usunięcie z 
    gildii w momencie wykrycia.</p>
<p id="recruitment-link"><?php echo get_link('recruitment/form', 'Przejdź do formularza rekrutacyjnego','','important-link') ?></p>