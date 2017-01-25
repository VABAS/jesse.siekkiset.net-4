<?php
function sendMail ($otsikko, $totsikko, $nimi, $maili, $viesti){
    if($nimi=="") $nimi="ei tietoa";
    $to      = 'jesse.p@siekkiset.net';
    $subject = "jesse.siekkiset.net - ".$otsikko;
    $message = "Lähettäjä\r\n<br>Nimi: ".$nimi."\r\n<br>Sähköpostiosoite: ".$maili."\r\n<br>IP-osoite: ".$_SERVER['REMOTE_ADDR']."\r\n<br>Viesti:\r\n<br>".$viesti;
    $headers = "Content-Type:text/html;charset=utf-8" . "\r\n".
               "From: phpmailer@siekkiset.net" . "\r\n" .
               "Reply-To: " . $maili . "\r\n";
    mail($to, $subject, $message, $headers);
}
?>
