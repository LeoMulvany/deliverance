<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 07/09/2016
 * Time: 15:36
 */

//-----------------------------
if (empty($indexLinkStyle)){
    $indexLinkStyle = '';
}
if (empty($aboutLinkStyle)){
    $aboutLinkStyle = '';
}
if (empty($listLinkStyle)){
    $listLinkStyle = '';
}
if (empty($contactLinkStyle)){
    $contactLinkStyle = '';
}
if (empty($sitemapLinkStyle)){
    $sitemapLinkStyle = '';
}
?>

<nav>
    <ul>
        <li>
            <a href="index.php" class="<?= $indexLinkStyle ?>">Home</a>
        </li>

        <li>
            <a href="index.php?action=about" class="<?= $aboutLinkStyle ?>">About Us</a>
        </li>

        <li>
            <a href="index.php?action=list" class="<?= $listLinkStyle ?>">Motorbikes for Sale</a>
        </li>

        <li>
            <a href="index.php?action=contact" class="<?= $contactLinkStyle ?>">Contact Us</a>
        </li>

        <li>
            <a href="index.php?action=sitemap" class="<?= $sitemapLinkStyle ?>">Site Map</a>
        </li>
    </ul>
</nav>