<?php
include "includes/pagelist.php";
include "includes/hae_tt.php";
include "includes/hae_linkit.php";


$kieli = $_GET['kieli'];
$sivu = $_GET['sivu'];

$selaimen_kieli = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Olemassa olevat kielet.
$keksi_kieli=$_COOKIE["kieli"];
$kielet=[
    "fi",
    "en"
];
$oletuskieli = $kielet[0];
if($kieli == ""){
    if ($sivu <> "") {
        $matchedPage = pageMatchAny($sivu);
        if (count($matchedPage) > 0) {
            header("location: /" . $matchedPage[0] . "/" . $matchedPage[1] . "/");
        }
        else {
            header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");       
            $_GET['e'] = 404;                                           
            include "error.php"; 
        }
    }
    else {
        // Jos cookie on asetettu.
        if(in_array($keksi_kieli, $kielet)){
            $kieli = $keksi_kieli;
        }
        //Jos selaimen pyytämä kieli on saatavilla.
        elseif(in_array($selaimen_kieli, $kielet)){
            $kieli = $selaimen_kieli;
        }
        //Muutoin siirrytään oletuskieleen.
        else{
            $kieli = $oletuskieli;
        }
    
        header("location: /" . $kieli . "/");
    }
}
// Jos kieltä ei ole taulukossa siirrytään oletuskieleen.
elseif(!in_array($kieli, $kielet)){
    header("location: /".$oletuskieli."/");
}
else{
    // Jos sivua ei ole asetettu asetetaan etusivu.
    if($sivu == "") {
        $sivu = "index";
    }
    
    // Kielen vaihtaminen pyydetty.
    if($sivu == "lang") {
        // Laitetaan cookie joka vanhenee vuoden kuluttua.
        setcookie("kieli", $_GET['tolang'], time() + 3600 * 24 * 365,"/");
        $page = pageMatch($kieli, $_GET['tolang'], $_GET['topage']);
        if ($page <> "none") {
            header("location: /" . $_GET['tolang'] . "/" . $page);
        }
        else {
            header("location: /" . $_GET['tolang'] . "/");
        }
    }
    else {
        // Haetaan sivun tiedot.
		$pageDetails = getPageDetails ($sivu, $kieli);
		$otsikko = $pageDetails['title'];
		$script = $pageDetails['script'];

		if (file_exists("includes/sivut/". $pageDetails['location']) && count($pageDetails['location']) > 0) {
		  // Rakennetaan sivun ranka.
		  include "includes/yla.php";
		  include "includes/sivut/". $pageDetails['location'];
		  include "includes/ala.php";
		}
		else{
		    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
		    $_GET['e'] = 404;
		    include "error.php";
		}
    }
}
?>
