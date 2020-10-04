<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_form = '1900300100051@ipec.org.in';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
			   "User Email: $visitor_email.\n".
			   "User Message: $message.\n".;

			   $to = "atifmoin19@gmail.com";

			   $header = "Form: $email_form \r\n";

			   $header .= "Reply-To: $visitor_email \r\n";

			   mail($to,$email_subject,$email_body);
			   
			   header("Location: index.html");


?>
