<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from ="info@yoursite.com";

$email_subject ="new form submession";
$email_body ="User name :$name .\n".
                "User email :$visitor_email .\n".
                "User subject :$subject .\n".
                "User message :$message. \n";

$to ="nesrineobey@gmail.com";
$headers = "from : $email_from \r\n";
$headers .= "Replay-To :$visitor_email \r\n ";
mail($to,$email_subject,$email_body,$headers);
header("location : contact.html");
?>