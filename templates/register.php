<?php
require_once __DIR__ . '/../templates/header.inc.php';
require_once __DIR__ . '/../templates/nav.inc.php';
//-------------------------------------------
?>

<p>Become a member of the Stroke City family!</p>
<p>Register today to join our mailing list and be entered into our monthly prize draw</p>


<form action="registration_confirmation.php" method=“post">

    <b>Please enter your username:</b>
    <input type="text" size="45" name="username">
    <br>
    <b>Please enter your email address:</b>
    <input type="text" size="45" name="email">
    <br>
    <b>Please select your password:</b>
    <input type="text" size="45" name="password">
    <br>
    <br>
    <input type="submit" name = “button” value="Submit This Form">
</form>


<?php
//-------------------------------------------
require_once __DIR__ . '/footer.inc.php';
//  don't close the PHP tags