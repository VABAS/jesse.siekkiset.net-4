<?php
require_once("includes/sendMail.php");
require_once("includes/recaptcha.php");

if(strlen($_POST['viesti'])<10) {
    header("location: palaute?err=v");
}
else {
    // Build Http query using params
    $query = http_build_query ($params);

    // Create Http context details
    $contextData = array (
                    'method' => 'POST',
                    'header' => "Connection: close\r\n".
                                "Content-Length: ".strlen($query)."\r\n",
                    'content'=> $query );

    // Create context resource for our request
    $context = stream_context_create (array ( 'http' => $contextData ));

    // Read page rendered as result of your POST request
    $result =  file_get_contents (
                      $url,  // page url
                      false,
                      $context);

    // Server response is now stored in $result variable so you can process it
    $tama=json_decode($result);
    $succ = $tama->{'success'};
    $errorit = $tama->{'error-codes'};
    if($succ){
        laheta($_POST['otsikko'],$_POST['totsikko'],$_POST['nimi'],$_POST['maili'],$_POST['viesti']);
        $sivu="Palaute lähetetty";
        echo "<section>";
        echo "<h1>Palaute lähetetty onnistuneesti!</h1>";
        echo "<p>Kiitos palautteestasi :)</p>";
        echo "</section>";
    }
    else header("location: palaute?err=rc");
}
?>
