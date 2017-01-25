<!doctype html>
<html lang="<?php echo $kieli; ?>">
<head>
    <title>Jessen kotisivut - <?php echo $otsikko; ?></title>
<?php include "style/normi.php"; ?>
    <?php
    //Error sivun kulmien siistintä
    if(isset($_GET['e'])){
        echo "<style>.sisalto{border-radius:0 0 30px 30px;}</style>";
    }
    ?>
    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville%7CLato%7CWork+Sans:200' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <meta name="description" content="Jesse Siekkisen kotisivut">
    <meta name="keywords" content="Jesse,Siekkinen, Kotisivut">
    <meta name="author" content="Jesse Siekkinen">
    <?php
    if($_SERVER['REQUEST_URI'] == "/fi/" or $_SERVER['REQUEST_URI'] == "/en/") {
        echo "<meta name=\"robots\" content=\"index, nofollow\" />";
    }
    else {
        echo "<meta name=\"robots\" content=\"nofollow, noindex\" />";
    }
    echo "\n";
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/favicon.png" rel="shortcut icon">
    <script src='/js/valikko.js'></script>
<?php
if(file_exists("js/".$script) && $script <> "none"){
    echo "    <script src='/js/".$script."'></script>";
}
?>
</head>
<body>
<header>
    <select onchange="window.location.href=this.value">
        <option<?php if($kieli=="fi") echo " selected='selected'"; ?> value="/<?php echo $kieli; ?>/lang/?topage=<?php echo $sivu ?>&tolang=fi">Suomeksi</option>
        <option<?php if($kieli=="en") echo " selected='selected'"; ?> value="/<?php echo $kieli; ?>/lang/?topage=<?php echo $sivu ?>&tolang=en">In english</option>
    </select>
</header>
<nav><!-- Valikko -->
<?php
if($kieli=="fi") echo "<div>Valikko</div>";
else echo "<div>Menu</div>";
?>
<?php
    if(!isset($_GET['e'])) printMenu($kieli);
?>
</nav>
<div class="sisalto">
<main>
