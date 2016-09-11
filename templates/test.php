<?php
require_once __DIR__ . '/../templates/header.inc.php';
require_once __DIR__ . '/../templates/nav.inc.php';
//-------------------------------------------
?>

    <p>This page shows the current list of users from the database</p>
    <p>It should be designed to be accessed only by admin accounts</p>
    <p>In the user table, default value of 'admin' = 0 while admin acounts have admin = 1 </p>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "strokelogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Make, Model, EngineSize, Price, Image FROM bikes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Make</th><th>Model</th><th>Engine Size</th><th>Price</th><th>Image</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Make"]. "</td><td>" . $row["Model"]. "</td><td>" . $row["EngineSize"]. "</td><td>" . $row["Price"]. "</td><td>" . $row["Image"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>


<?php
//-------------------------------------------
require_once __DIR__ . '/footer.inc.php';
//  don't close the PHP tags*/

