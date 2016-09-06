<?php
require_once __DIR__ . '/header1.inc.php';
print '<title>Cat Videos - about page</title>';
require_once __DIR__ . '/header2.inc.php';
//-------------------------------------------
?>

<nav>
    <ul>
        <li>
            <a href="index.php" class="current_page">Home</a>
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
            <a href="sitemap.php">Site Map</a>
        </li>
    </ul>
</nav>

<h1>
    Welcome to Cat Videos Home Page
</h1>

<p>
    This site offers you the chance to purchase cat videos of mass destruction...
</p>


<?php
//-------------------------------------------
require_once __DIR__ . '/footer.inc.php';
//  don't close the PHP tags