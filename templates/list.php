<?php
require_once __DIR__ . '/../templates/header.inc.php';
require_once __DIR__ . '/../templates/nav.inc.php';
//-------------------------------------------
?>

<!-- start table for displaying CatVideo details -->
<h2>Here are some of the motorbikes we currently have for sale:</h2>

<table>
    <tr>
        <th> Make </th>
        <th> Model </th>
        <th> Engine Size </th>
        <th> Price </th>
        <th> Customer Reviews </th>
        <th> Our Rating </th>
    </tr>

    <!-- ********************* HTML for dvd items ****************** -->
    <!--
        //   	0 - 15 - 40 - 55 - 70 - 85 - 100 %age
        // 	      .5   1    2    3    4    5     stars
    -->
    <tr>
        <td>Honda</td>
        <td>Fireblade CBR1000RR</td>
        <td>999cc</td>
        <td>£8,995</td>
        <td>86%</td>
        <td><img src="../public/images/stars4.png" alt="4 star"></td>
    </tr>

    <tr>
        <td>Suzuki Hayabusa GSX1300R Supersport</td>
        <td>Hayabusa GSX1300R Supersport</td>
        <td>1340cc</td>
        <td>£11,495</td>
        <td>90 %</td>
        <td><img src="../public/images/stars5.png" alt="5 star"></td>
    </tr>

    <tr>
        <td>Yamaha</td>
        <td>YZF-R1</td>
        <td>998cc</td>
        <td>14,995</td>
        <td>97%</td>
        <td><img src="../public/images/stars5.png" alt="5 star"></td>
    </tr>

    <tr>
        <td>Aprilia</td>
        <td>Mana 850 GT</td>
        <td>839</td>
        <td>£7,495</td>
        <td>64%</td>
        <td><img src="../public/images/stars3.png" alt="3 star"></td>
    </tr>

    <tr>
        <td>Ducati</td>
        <td>1299 Panigale</td>
        <td>1285cc</td>
        <td>£17,495</td>
        <td>95 %</td>
        <td><img src="../public/images/stars4.png" alt="4 star"></td>
    </tr>
</table>

<?php
//-------------------------------------------
require_once __DIR__ . '/footer.inc.php';
//  don't close the PHP tags