<?php
require_once __DIR__ . '/header1.inc.php';
print '<title>Cat Videos - about page</title>';
require_once __DIR__ . '/header2.inc.php';
//-------------------------------------------
?>


<nav>
    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>

        <li>
            <a href="about.php">About Us</a>
        </li>

        <li>
            <a href="list.php">Cat Videos</a>
        </li>

        <li>
            <a href="contact.php">Contact Us</a>
        </li>

        <li>
            <a href="sitemap.php" class="current_page">Site Map</a>
        </li>
    </ul>
</nav>

<h1>
    Site Map
</h1>

<ul>
    <li><a href="index.php">Home</a>
    <li><a href="about.php">About us</a>
    <li><a href="list.php">Cat Videos</a>
    <li><a href="contact.php">Contact us</a>
    <li><a href="sitemap.php">Site Map</a>
</ul>


<?php
//-------------------------------------------
require_once __DIR__ . '/footer.inc.php';
//  don't close the PHP tags