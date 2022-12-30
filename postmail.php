<?php
@include_once("Mail.php");

$name = $_POST["Nom"];
$objet = $_POST["Objet"];
$message = $_POST["Message"];
$from = $_POST["Email"];

// remove the backslashes that normally appears when entering " or '
$name = stripslashes($name);
$message = stripslashes($message);
$objet = stripslashes($objet);
$from = stripslashes($from);

$to_address = "hugondo73@gmail.com";

// Check to see if a message was recieved
if(isset($message) and $message!="") {
    // send the message and show this page
    mail($to_address, 'Online Form: '.$objet, $_SERVER['REMOTE_ADDR']."\n\nName: ".$name."\n\n".$message, "From: $from");
} else {
    echo "no variables received, this page cannot be accessed directly";
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>dom73's contact</title>
    </head>
    <body>
        <p>Merci de votre intérêt, nous vous répondrons au plus tôt.</p>
    </body>
</html>
