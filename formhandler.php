<?php
$name=$_post['name'];
$subject=$_post['email'];
$visitor_email=$_post['Subject'];
$message=$_post['Message'];
$email_from='mail@tistcochin.edu.in';
$email_subject='New Form Submission';


$email_body="User name: $name.\n".
"User email: $visitor_email.\n".
"Subject:$subject.\n".
"User message:$message.\n";


$to='ggourie2020@gmail.com';
$headers="from: $email_from \r\n";
$headers.= "reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: contact.html")
?>