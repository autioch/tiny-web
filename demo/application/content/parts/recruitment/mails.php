<?php
$client_mail = array();
$client_mail['to'] = $form->fields['email']['value'];
$client_mail['subject'] = '=?UTF-8?B?' . base64_encode('Potwierdzenie złożenia podania do gildii Preatorians') . '?=';
$client_mail['message'] = "Dziękujemy za złożenie podania do naszej gildii.
    W najbliższym czasie skontakuje się z Tobą nasz rekrutant. Jeśli nie spotka Cię online, skontakuje się na ten adres mailowy.";

$client_mail['headers'] = 'MIME-Version: 1.0' . "\r\n";
$client_mail['headers'] .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$client_mail['headers'] .= 'From: Praetorians <autioch@go2.pl>' . "\r\n";
$client_mail['headers'] .= 'Return-Path: Praetorians <autioch@go2.pl>' . "\r\n";
$client_mail['headers'] .= 'Sender: Praetorians <autioch@go2.pl>' . "\r\n";
$client_mail['headers'] .= 'Reply-To: Praetorians <autioch@go2.pl>' . "\r\n";


$office_mail = array();
$office_mail['to'] = 'autioch@gmail.com';
$office_mail['subject'] = '=?UTF-8?B?' . base64_encode('Podanie do gildii Praetorians') . '?=';
$office_mail['message'] = 'Zostało złożone podanie.<br>';
$office_mail['message'] .= $form->dev_text() . '<br>';

$office_mail['headers'] = 'MIME-Version: 1.0' . "\r\n";
$office_mail['headers'] .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$office_mail['headers'] .= 'From: Praetorians <autioch@go2.pl>' . "\r\n";
$office_mail['headers'] .= 'Return-Path: Praetorians <autioch@go2.pl>' . "\r\n";
$office_mail['headers'] .= 'Sender: Praetorians <autioch@go2.pl>' . "\r\n";
$office_mail['headers'] .= 'Reply-To: Praetorians <autioch@go2.pl>' . "\r\n";

if (!mail($client_mail['to'], $client_mail['subject'], $client_mail['message'], $client_mail['headers'])) {
    log_error('mail_log.txt', 'MAIL: ' . $client_mail['to']);
}

if (!mail($office_mail['to'], $office_mail['subject'], $office_mail['message'], $office_mail['headers'])) {
    log_error('mail_log.txt', 'MAIL: ' . $office_mail['to']);
}

if (!mail('autioch@gmail.com', $office_mail['subject'], $office_mail['message'], $office_mail['headers'])) {
    log_error('mail_log.txt', 'MAIL: ' . 'autioch@gmail.com');
}
?>
<pre><?php //echo $form->dev_text(); ?></pre>