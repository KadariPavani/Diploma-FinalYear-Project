<? php
    $name= $_POST['name'];
    $visitor_email= $_POST['email'];
    $subject= $_POST['subject'];
    $message= $_POST['message'];


$email_from ='kadaripavani1@gmail.com';

$email_subject= 'New form Submission';

$email_body="User name: $name. \n";
            "User email: $visitor_email. \n";
            "User name: $subject. \n";
            "User name: $message. \n";

$to="pannubangaram123@gmail.com";
$headers ="From: $email_from \r\n";
$headers="reply-To: $visitor_email \r\n";

mail($to, $email_subject,$email_body,$headers);

header("Location: contact.html")

?>
