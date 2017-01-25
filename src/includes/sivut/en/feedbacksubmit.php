<?php
require_once("includes/sendMail.php");
require_once("includes/recaptcha.php");

//http://www.google.com/recaptcha
$url = 'https://www.google.com/recaptcha/api/siteverify';

// Create map with request parameters
$params = array ('secret' => $recaptchaSecret, 'response' => $_POST['g-recaptcha-response'], 'remoteip ' => $_SERVER['REMOTE_ADDR']);

if(strlen($_POST['viesti']) < 10) {
    header("location: /en/feedback?err=v");
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
    $tama = json_decode($result);
    $succ = $tama->{'success'};
    $errorit = $tama->{'error-codes'};
    if($succ){
        sendMail($_POST['otsikko'], $_POST['totsikko'], $_POST['nimi'], $_POST['maili'], $_POST['viesti']);
        $sivu = "Feedback send";
        echo "<section>";
        echo "<h1>Your feedback was send succesfully!</h1>";
        echo "<p>Thank you for your feedback :)</p>";
        echo "</section>";
    }
    else header("location: /en/feedback?err=rc");
}
?>
