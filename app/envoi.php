<?php
$email = $_POST["email"];
$nom = $_POST["nom"];

$to = "jerome.dehertogh@gmail.com";
$subject = $_POST;
$msg = "Comment ça va?";
$headers = "Form:" . $_POST . "\r\n";
mail($to,$subject,$msg,$headers);

/*header('Location: index.html');*/
?>

