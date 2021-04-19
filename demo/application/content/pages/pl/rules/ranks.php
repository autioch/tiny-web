<?php
$ranks = array();
$ranks['gm'] = array(
    'title' => 'Lider Gildii', 'ms' => 1, 'os' => 2,
    'description' => 'Osoba odpowiedzialna za gildię.',
);

$ranks['oficer'] = array(
    'title' => 'Oficer', 'ms' => 1, 'os' => 2,
    'description' => 'Osoby odpowiedzialne za porządek w gildii, służące radą 
        i pomocą Liderowi Gildii.',
);

$ranks['weteran'] = array(
    'title' => 'Weteran', 'ms' => 1, 'os' => 2,
    'description' => 'Starszy członek gildii. Każdy "Weteran" ma dostęp do flaszek z gildii.',
);

$ranks['member'] = array(
    'title' => 'Member', 'ms' => 1, 'os' => 2,
    'description' => 'Stały członek gildii. Każdy "Member" należy do jednej z grup rajdowych.',
);

$ranks['novuo'] = array(
    'title' => 'Novuo', 'ms' => 2, 'os' => 3,
    'description' => 'Nowy członek gildii. Przyjęty czasowo, aż się wykaże poprzez udział w rajdach.',
);

$ranks['alt'] = array(
    'title' => 'Alt', 'ms' => 2, 'os' => 3,
    'description' => 'Każdy GM, Oficer oraz Member mogą posiadać 1 Alta. Jeśli potrzebna jest
            osoba na zastępstwo w jednej z grup rajdowych, Alt ma pierwszeństwo przed gościem.',
);

$ranks['guest'] = array(
    'title' => 'Gość', 'ms' => 3, 'os' => 3,
    'description' => 'Każdy członel gildii może posiadać dowolną ilość gości w gildii.
            Są to postacie zapraszane są bardziej "do towarzystwa", niż do rajdowania.
            Zapraszane na rajdy w przypadku braku innych chętnych.',
);

$ranks['jail'] = array(
    'title' => 'Bedę grzeczny', 'ms' => 4, 'os' => 4,
    'description' => 'Ranga blokująca czat gildii, otrzymywana za łamanie
            regulaminu gildii lub serwera.',
);
?>
<div class="side-box">
    <h3 class="side-box-title">Uwagi</h3>
    <ul class="side-box-list">
        <li class="side-box-item">W nawiasach jest podana kolejka do lootu.</li>
    </ul>    
</div>
<h3 class="section-title"><?php echo $dict['rules/ranks'] ?></h3>
<ol>
    <?php foreach ($ranks as $key => $val): ?>
        <li>
            <p><?php echo $val['title'], ' (', $val['ms'], '/', $val['os'], ')' ?></p> 
            <p><?php echo $val['description']; ?></p>
        </li>
    <?php endforeach ?>
</ol>
<p>Zmiana rang jest ustalana pomiędzy oficerami oraz liderem gildii, wyjątkiem jest zmiana na Karniaka.</p>

<h3 class="section-title">Zasady lootu</h3>
<ol>
    <li>
        <p>Loot licytowany jest wedle kolejki do lootu.</p>
    </li>
    <li>
        <p>Jeśli gracz dobrowolnie wybrał się na rajd Altem bądź Gościem, 
            obowiązuje go kolejka do lootu.</p>
    </li>
    <li>
        <p>Jeśli gracz z potrzeby rajdu idzie Altem, ma prawo do lootu
            na równi z Memberami.</p>
    </li>
    <li>
        <p>Jeśli gracz z potrzeby rajdu idzie Gościem, ma prawo do lootu
            na równi z Nowymi.</p>
    </li>
</ol>