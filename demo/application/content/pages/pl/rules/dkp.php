<h3><?php echo $dict['rules/dkp'] ?></h3>
<p>DKP, czyli "Dragon Kill Points", to system nagradzania za rajdowanie z gildą.
    Punkty DKP otrzymuje się za pokonane bossy, skończone instancje oraz określone osiągnięcia.
    Za otrzymane punkty można licytować przedmioty na gildyjnych rajdach 25 osobowych.</p>
<p>Licytacja odbywa się poprzez wpisywanie <strong>/raid !bid &lt;liczba&gt;</strong>,
    gdzie &lt;liczba&gt; oznacza ilość punktów DKP, które chcemy wydać na przedmiot.
    Na przykład: /raid !bid 50</p>
<p>DKP to system nagradzania - im więcej rajdujesz z gildią, tym więcej DKP posiadasz, 
    co pozwala na wygrywanie większej ilości przedmiotów, na których Ci zależy.</p>
<p>Ilość posiadanych DKP można sprawdzić na stronie 
    <?php echo_link_remote('http://www.webdkp.com/dkp/Sunwell/' . $guildNameArmory . '/', 'webdkp.com/dkp/Sunwell/' . $guildNameArmory) ?>.</p>
<h3>Punktacja DKP za walki</h3>
<p>DKP przyznawane jest za rajdy w 100% składające się z członków gildii.</p>
<table id="dkp_table">
    <thead>
        <tr>
            <th>Rajd</th>
            <th>10n</th>
            <th>10hc</th>
            <th>25n</th>
            <th>25hc</th>
        </tr>        
    </thead>
    <tbody>
        <tr>
            <td class="title">Icecrown Citadel</td>
            <td>10</td>
            <td>15</td>
            <td>20</td>
            <td>25</td>
        </tr>
        <tr>
            <td class="title">Trial of the Crusader</td>
            <td>5</td>
            <td>10</td>
            <td>15</td>
            <td>20</td>
        </tr>
    </tbody>
</table>
<p>Wszystkie pozostale rajdy: 5 DKP za bossa.</p>
<h3>Zasady otrzymywania i wydawania DKP</h3>
<ol>
    <li>Licytacja odbywa się wedle kolejki do lootu zgodnej z <?php echo get_link('zasady/rangi', 'rangami'); ?>.</li>
    <li>Punktualność, oraz obecność od początku zbierania rajdu aż do momentu
        ogłoszenia przez osobę prowadzącą zakończenia rajdu, liczy się jak 
        pojedynczy boss w danym rajdzie.</li>
    <li>Nieobecność w momencie rozpoczęcia rajdu (na który jest się zapisanym w GC),
        bez poinformowania kogokolwiek o możliwym spóźnieniu, oznacza karę -20 DKP.
        Po 10 minutach spóźnienia kolejne -20 DKP. Po 20 minutach osoba uznawana 
        jest za nieobecną, co skutkuje karą -60 DKP, czyli sumując ze spóźnieniem, -100 DKP.</li>
    <li>Brak kultury na rajdzie, wprowadzanie zamieszania na rajdzie, 
        obraza innych graczy, opuszczenie rajdu bez podania przyczyny oznacza karę od -10 do -500 DKP.</li>
    <li>W przypadku braku osoby z możliwością przydzielania DKP, podstawą do
        otrzymania DKP jest przekazanie oficerowi screenów za pokonanie 
        poszczególnych bossow, oraz screenów stanowiących podstawę do 
        otrzymania DKP za pozostałe zasady (punktualność, spóźnienie, 
        progress, obecność na całym rajdzie). 
        Jeśli na screenie brak składu rajdu, należy wypisać te osoby.</li>        
    <li>W sytuacjach niejednoznacznych decyzję podejmuje członek rajdu
        o najwyższej randze w gildii.</li>
    <li>Za wymienione poniżej osiągnięcia przyznawane są dodatkowe DKP:
        <ul>
            <li>Glory of Ulduar 10 &nbsp; 100 DKP</li> 
            <li>Glory of Ulduar 25 &nbsp; 200 DKP</li> 
            <li>Undying &nbsp; 100 DKP</li> 
            <li>The Immortal &nbsp; 200 DKP</li> 
            <li>Insanity 10 &nbsp; 100 DKP</li> 
            <li>Insanity 25 &nbsp; 200 DKP</li> 
        </ul>
    </li>     
    <li>Za pierwsze zabicie niżej wymienionych bossów w danej grupie Icc10 przyznawane są dodatkowe DKP:
        <ul>
            <li>Pierwsze zabicie Prince, Valithira na 10hc &nbsp; 75 DKP</li>
            <li>Pierwsze zabicie Putrice, BQ, Sindragosa na 10hc &nbsp; 150 DKP</li>
            <li>Pierwsze zabicie Lich Kinga 10hc &nbsp; 75 DKP</li>
        </ul>
    </li>
</ol>