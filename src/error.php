<?php
if($_GET['e']==401){
    $otsikko="Authorization Required";
    include "includes/yla.php";
    include "includes/error/401.php";
    include "includes/ala.php";
    }
elseif($_GET['e']==403){
    $otsikko="Forbidden";
    include "includes/yla.php";
    include "includes/error/403.php";
    include "includes/ala.php";
    }
elseif($_GET['e']==4033){
    $otsikko="Forbidden";
    include "includes/yla.php";
    include "includes/error/4033.php";
    include "includes/ala.php";
    }
else {
    if($_GET['e']==404){
        $otsikko="Not found";
        include "includes/yla.php";
        include "includes/error/404.php";
        include "includes/ala.php";
    }
    else{
        $_GET['e']=418;
        $otsikko="I'm a Teapot";
        include "includes/yla.php";
        include "includes/error/418.php";
        include "includes/ala.php";
    }
}
?>
