<?php
header("Content-type: text/xml");
?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php
include "includes/pagelist.php";
foreach (getAllPages() as $url) {
    echo "\n<url><loc>https://jesse.siekkiset.net" . $url . "</loc></url>";
}
?>
</urlset>
