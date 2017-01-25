<?php
// Hakee tt-produktiotiedot xml-tiedostosta. Palauttaa false jos yhtään ei löytynyt.
function hae_tt ($kumpi,$lang) {
  $status = false;
  $xml = simplexml_load_file("xml/ttlista.xml");
  $produktio = $xml->produktio;
  echo '<ul class="lista_lamppu tt_lista">';
  for ($i = 0; $i < count($produktio); $i++) {
    if($produktio[$i]['status'] == $kumpi) {
      $status = true;
      echo "<li>".$produktio[$i]->nimi." - ".$produktio[$i]->teatteri." (".$produktio[$i]->aika->$lang." ".$produktio[$i]->aika->vuosi.")";
      echo '<ul class="lista_nuoli alalista">';
      for($i2 = 0; $i2 < count($produktio[$i]->vastuu); $i2++) {
        echo "<li>";
        echo $produktio[$i]->vastuu[$i2]->$lang;
        if($produktio[$i]->vastuu[$i2]['yt'] == "yt"){
          if($lang=="fi") echo " (<abbr title=\"Yhteistyö\">YT</abbr>)";
          if($lang=="en") echo " (<abbr title=\"Cooperative\">CO</abbr>)";
        }
        echo "</li>";
      }
      echo "</ul></li>";
    }
  }
  echo "</ul>";
  return $status;
}
?>
