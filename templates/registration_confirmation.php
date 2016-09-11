<?php
require_once __DIR__ . '/../templates/header.inc.php';
require_once __DIR__ . '/../templates/nav.inc.php';
//-------------------------------------------
?>


<?php
$username = $_REQUEST['username'];
$password =    $_REQUEST['password'];
$email =     $_REQUEST['email'];

if( $username != null )
{ echo  "Thanks for registering, $username !<hr/>" ; }

$db = mysqli_connect('localhost','root','','strokelogin')
or die('Error connecting to MySQL server.');

$sql = "INSERT INTO users (Username, EmailAddress, Password)
    VALUES ( '$username', '$email', '$password'); ";
$result = mysqli_query($db, $sql);


?>

<?php
//-------------------------------------------
require_once __DIR__ . '/footer.inc.php';
//  don't close the PHP tags