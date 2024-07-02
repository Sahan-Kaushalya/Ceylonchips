<?php

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_GET["e"])){

    $email = $_GET["e"];

    $d = new DateTime();
        $tz = new DateTimeZone("Asia/Colombo");
        $d->setTimezone($tz);
        $date = $d->format("Y-m-d H:i:s");

    
        
        $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'customerservice.shofymesh@gmail.com';
            $mail->Password = 'eter gfwo ifss vmux';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('customerservice.shofymesh@gmail.com', 'Subscribe for Newsletter');
            $mail->addReplyTo('customerservice.shofymesh@gmail.com', 'Subscribe for Newsletter');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Subscription Successful';
            $bodyContent = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Subscription Confirmed - Ceylon Banana Chips</title>
                <style>
                    /* Reset styles */
                    body, table, td, a {
                        -webkit-text-size-adjust: 100%;
                        -ms-text-size-adjust: 100%;
                        margin: 0;
                        padding: 0;
                    }
                    .footer {
                        background-color: #2AAA8A;
                        color: #ffffff;
                        padding: 10px 0;
                        text-align: center;
                    }
            
                    /* Responsive styles */
                    @media only screen and (max-width: 600px) {
                        .container {
                            width: 100% !important;
                        }
                    }
                </style>
            </head>
            <body style="font-family: Arial, sans-serif;">
            
                <!-- Email Container -->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="container">
                    <!-- Header -->
                    <tr>
                        <td align="center" bgcolor="#2AAA8A" style="padding: 20px;">
                            <h1 style="margin: 0; color: #ffffff;">Subscription Confirmed!</h1>
                        </td>
                    </tr>
                    <!-- Body -->
                    <tr>
                    
                        <td bgcolor="#ffffff" style="padding: 20px;">
                            <p>Welcome to Ceylon Chips Family! </p>
                            <p>Thank you for subscribing to updates from Ceylon Banana Chips! You&apos;re now part of our community, and you&apos;ll be the first to know about our delicious banana chip flavors, exclusive promotions, and more.</p>
                            <p>If you have any questions or just want to say hello, don&apos;t hesitate to reach out to us at <a href="mailto:ceylonchips@gmail.com">ceylonchips@gmail.com</a>.</p>
                            <p>Get ready to enjoy the crunchiest, tastiest banana chips straight from Ceylon!</p>
                            <p>Warm regards,<br>The Ceylon Banana Chips Team</p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td bgcolor="#f7f7f7" style="padding: 20px;">
                            <p style="font-size: 12px; color: #777777; margin: 0;">You are receiving this email because you subscribed to our newsletter. If you wish to unsubscribe, <a href="#">click here</a>.</p>
                        </td>
                    </tr>
                    <div class="footer">
                    <P>ceylonchips.kesug.com&copy; 2023 -2024. All rights reserved.</P>
                    <p>Contact Us:<a href="mailto:ceylonchips@gmail.com" style="color:white;">Contact Now</a></p>
                    
                </div>
                </table>
            
            </body>
            </html>
            ';
            $mail->Body  = $bodyContent;


            if (!$mail->send()) {
                echo 'subscription failed';
            } else {
                echo 'Success';

            }

  

}

?>