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

$sql = "SELECT UserID, Username, Password, EmailAddress, Admin FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["UserID"]. " - Name: " . $row["Username"]. " - Password: " . $row["Password"]. " - Email: " . $row["EmailAddress"]. " - Admin: " . $row["Admin"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


<?php
//-------------------------------------------
require_once __DIR__ . '/footer.inc.php';
//  don't close the PHP tags*/