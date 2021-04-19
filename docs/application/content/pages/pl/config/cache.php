<?php $content['template'] = 'config'; ?>
<p>Czasem może zdarzyć się tak, że pojedyncze żadąnie (strona) generuje duże ilości treści
    - nie tylko sam HTML ale też css, js, grafiki. Z tego powodu czas odpowiedzi klientowi
    (a przez to i same wrażenia klienta) przez serwer może się znacząco pogorszyć. 
    TinyWeb pozwala na rozwiązanie tego problemu za pomocą ogólnie dostępnych metod, 
    które nie wymagają specjalnej konfiguracji.</p>
<p>Pierwszą opcją, domyślnie włączoną jest moduł apache o nazwie <var>mod_expires</var>, 
    który, skrótowo opisując, powoduje, że klient (przeglądarka internetowa) pytając o treści, 
    otrzymuje odpowiedź, że treści się nie zmieniły i może skorzystać z treści w swojej pamięci.
    Ustawienia zarówno tego, jakie dokładnie treści przeglądarka ma pobierać ze swojej 
    pamięci, oraz jak długo te treści pozostają świeże, można zmienić w pliku
    <var>public_html&bsol;.htaccess</var>. Więcej o 
    <?php echo_link_remote('http://httpd.apache.org/docs/current/mod/mod_expires.html', 'mod_expires') ?>.</p>
<p>Drugą opcją jest cache programowe, wbudowane w TinyWeb. Konfiguracja dostępna jest 
    w pliku <var>application&bsol;config&bsol;cache.php</var>. Włączenie cache powoduje, 
    że przy każdym żądaniu, sprawdzane jest, czy strona jest już w cache, domyślnie w
    <var>application&bsol;cache</var>. Jeśli tak, to zwracana jest treść z cache. Jeśli nie,
    to strona jest generowana, zapisywana w cache i zwracana klientowi. W konfiguracji można
    ustawić, które strony mają być wyłączone z cache, oraz jak długo strony pozostają 
    świeże w cache.</p>
<p>Oprócz powyższych opcji, można skorzystać z innych modułów apache (po sprawdzeniu, czy są
    dostępne) lub na przykład <?php echo_link_remote('http://www.php.net/manual/en/book.apc.php', 'APC') ?>.</p>