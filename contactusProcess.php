<?php


require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";


use PHPMailer\PHPMailer\PHPMailer;

$name = $_POST["name"];
$email = $_POST["email"];
$sub = $_POST["subject"];
$msg = $_POST["message"];

$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");

if (empty($name)) {
    echo "Please enter your Name.";
} elseif (empty($email)) {
    echo "Please enter your Email Address.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid Email Address";
} elseif (empty($sub)) {
    echo "Please enter your Subject.";
} elseif (empty($msg)) {
    echo "Please enter your Message.";
} else{

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'customerservice.shofymesh@gmail.com';
$mail->Password = 'eter gfwo ifss vmux';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('customerservice.shofymesh@gmail.com', 'Contact Us Message');
$mail->addReplyTo('customerservice.shofymesh@gmail.com', 'Contact Us Message');
$mail->addAddress('ceylonchips@gmail.com');
$mail->isHTML(true);
$mail->Subject = 'Message From '.$name.'';
$bodyContent = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Message</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">

    <div style="max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0px 2px 5px rgba(0,0,0,0.1);">
        <h2 style="color: #333;">Contact Us Message</h2>
        <p><strong>Date and Time:</strong> '.$date.'</p>
        <p><strong>Name:</strong> '.$name.'</p>
        <p><strong>Subject:</strong> '.$sub.' </p>
        <p><strong>Email:</strong> '.$email.'</p>
        <p><strong>Message:</strong></p>
        <p>'.$msg.'.</p>
        
        <hr style="border-top: 1px solid #ddd;">
        <p style="color: #777;">This message was sent from the Contact Us form on your website.</p>
        <p>Send Reply:<a href="mailto:'.$email.'" style="color:#0000FF;">Reply Now</a></p>
        
    </div>

</body>
</html>
';



$mail->Body  = $bodyContent;

if (!$mail->send()) {
    echo 'Message Sending failed';
} else {
    echo 'Your message was sent, thank you!';

}

}

?>