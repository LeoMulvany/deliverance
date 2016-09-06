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
            <a href="list.php" class="current_page">Cat Videos</a>
        </li>

        <li>
            <a href="contact.php">Contact Us</a>
        </li>

        <li>
            <a href="sitemap.php">Site Map</a>
        </li>
    </ul>
</nav>

<!-- start table for displaying DVD details -->
<h2>Lists of Cat Videos and their destructive power</h2>

<table>
    <tr>
        <th> ID </th>
        <th> title </th>
        <th> category </th>
        <th> price </th>
        <th> vote average </th>
        <th> num votes </th>
        <th> stars </th>
    </tr>

    <!-- ********************* HTML for dvd items ****************** -->
    <!--
        //   	0 - 15 - 40 - 55 - 70 - 85 - 100 %age
        // 	      .5   1    2    3    4    5     stars
    -->
    <tr>
        <td>1</td>
        <td>Kittens 1</td>
        <td>cruel</td>
        <td>&euro; 18000</td>
        <td>5 %</td>
        <td>1</td>
        <td><img src="../public/images/starsHalf.png" alt="half star"></td>
    </tr>

    <tr>
        <td>2</td>
        <td>Cat and Wool 245</td>
        <td>Really Cruel</td>
        <td>&euro; 35000</td>
        <td>90 %</td>
        <td>77</td>
        <td><img src="../public/images/stars5.png" alt="5 star"></td>
    </tr>

    <tr>
        <td>3</td>
        <td>Two Kittens Playing</td>
        <td>Very Cruel</td>
        <td>&euro; 15999</td>
        <td>50 %</td>
        <td>5</td>
        <td><img src="../public/images/stars3.png" alt="3 star"></td>
    </tr>

    <tr>
        <td>4</td>
        <td>Shrek II</td>
        <td>Very Cruel</td>
        <td>&euro; 46000</td>
        <td>0 %</td>
        <td>0</td>
        <td>(no votes yet)</td>
    </tr>

    <tr>
        <td>5</td>
        <td>Cat Jumping</td>
        <td>Really Cruel</td>
        <td>&euro; 19999</td>
        <td>95 %</td>
        <td>201</td>
        <td><img src="../public/images/stars5.png" alt="5 star"></td>
    </tr>
</table>

<?php
//-------------------------------------------
require_once __DIR__ . '/footer.inc.php';
//  don't close the PHP tags