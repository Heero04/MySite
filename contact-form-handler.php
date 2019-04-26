<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'lawrencedavis1010@gmail.com';
    $email_subject = 'New from Submission';
    $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                  "user Message: $message.\n";

    $to = "lawrencedavis1010@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");

?>