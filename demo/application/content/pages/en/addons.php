<h3 class="section-title"><?php echo $dict['addons'] ?></h3>
<p>Poniżej znajdują się trzy listy addonów. "Wymagane" powinien mieć zainstalowane każdy
    członek gildii, "Polecane" są odpowiednie dla poszczególnych klas/ról lub po prostu 
    użyteczne, natomiast "Niedozwololne" powinny być wyłączone w czasie rajdów.</p>
<?php
include partial('addons/list');
include partial('addons/functions');

addon_tables($dict['required'], $required);
addon_tables($dict['advised'], $advised);
addon_tables($dict['miscellaneous'], $miscellaneous);
addon_tables($dict['banned'], $banned);









