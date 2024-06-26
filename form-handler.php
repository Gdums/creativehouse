<?php
$name = $_POST ['name'];
$visitor_email = $_POST ['email'];
$subject = $_POST ['subject'];
$message = $_POST ['message'];

$email_form = 'creative house.com';

$email_subject = 'New form Submission';

$email_body = "User Name: $name. \n".
                "user Email:$visitor_email. \n".
                "subject: $subject. \n".
                "user message: $message .\n";

$to = 'addamms001@students.unnes.ac.id';

$header = "Form: $email_form \r\n";

$header .= "Replay-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $header);

header("Location: Contact us.html");
?>