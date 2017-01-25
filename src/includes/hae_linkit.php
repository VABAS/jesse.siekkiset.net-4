<?php
function hae_linkit($kieli) {
  $xml = simplexml_load_file("xml/linkit.xml");
  $linkkilista = $xml->linkki;
  for($i = 0; $i < count($linkkilista); $i++) {
    $kat = (string)$linkkilista[$i]['kategoria'];
    $linkit[$kat] = $linkit[$kat].'<a href="'.$linkkilista[$i]->osoite.'" target="_blank"';
    if($linkkilista[$i]['tyyppi'] == "https") {
        $linkit[$kat]=$linkit[$kat].' class="https"';
   	}
    $linkit[$kat] = $linkit[$kat].'>'.$linkkilista[$i]->teksti->$kieli.' ('.str_replace(["http://","/","https:"],["","","https://"],$linkkilista[$i]->osoite).')</a>';
  }
  return $linkit;
}
?>
