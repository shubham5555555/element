<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// redirect url 
$redirect = "/";

if (isset($_POST['submit'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['subject']) && !empty($_POST['msg'])) {
        extract($_POST);
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //============== only change here==============
            // website name
            $webName = "housing cart";
            //Set the SMTP server to send through
            $host = "mail.beamingindia.com";
            // SMTP password
            $pass = "Admin@1234#!";
            // SMTP username
            $fromMail = 'hc@beamingindia.com';
            // from Mail Name 
            $fromMailName = 'hc';
            // recipient Mail $email
            $toEmail = 'niteshkumarpvt1@gmail.com';
            // recipient Mail Name
            $toName = $name;
            // Subject
            $subject = $subject;
            // Mail Success messege
            $successMsg = "<script>alert('Alert: Mail Send Successfully We are Contact You Soon!');location='" . $redirect . "';</script>";
            // mail body
            $body = '
<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
    <div style="margin:50px auto;width:70%;padding:20px 0">
    <div style="display: flex; justify-content:center">
       <span>
            <h2 style="background: #4caf50;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;"> New Enquiry</h2>
                    </span> <hr> <img alt="PHPMailer" src="cid:my-attach" width="200" height="100" style="background-color:red;">
                </div>
        
                <p>You Have Recieve New Enquiry From Your Website details are below:</p>
            </tbody>
                <div style="line-height: 10px;">
                    <h3 style="color: #00466a; font-weight: bold;">Client Name: <span style="color:#000">' . $name . '</span></h3>
                    <h3 style="color: #00466a; font-weight: bold;">Email: <span style="color:#000">' . $email . '</span></h3>
                    <h3 style="color: #00466a; font-weight: bold;">Subject: <span style="color:#000">' . $subject . '</span></h3>
                    <h3 style="color: #00466a; font-weight: bold;">Contact: <span style="color:#000">' . $contact . '</span></h3>
                    <h3 style="color: #00466a; font-weight: bold;">Messege: <span style="color:#000">' . $msg . '</span></h3>
                </div>
                <p style="font-size:0.9em;">Regards,<br> Beaming India</p>
            </div>
        </div>';
            //============== only change here END==============
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = $host;                                   //Set the SMTP server to send through
            $mail->CharSet = 'utf-8';
            $mail->AddEmbeddedImage("logo.png", "my-attach", "logo.png");
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $fromMail;                               //SMTP username
            $mail->Password   = $pass;                                     //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            //Recipients
            $mail->setFrom($fromMail, $webName);
            $mail->addAddress($toEmail, $toName);     //Add a recipient
            // Use This For Attacments.
            // $mail->addAttachment('/tmp/image.jpg', 'file.jpg');    //Optional name
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->send();
            echo $successMsg;
        } catch (Exception $e) {
            echo "<script>alert('Alert: Message could not be sent. Mailer Error: {$mail->ErrorInfo}');location='" . $redirect . "';</script>";
        }
    } else {
        echo "<script>alert('Alert: Please Fill All the Details.');location='" . $redirect . "';</script>";
    }
}
