<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@bankhart.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n". 
              "User Email: $visitor_name.\n".
              "Subject: $subject.\n".
              "User message: $message.\n";

$to = 'bankhart2@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_from \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>