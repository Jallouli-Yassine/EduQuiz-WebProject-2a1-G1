<?php



//include required files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

//define names spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//creat instance of phpmailer
$mail= new PHPMailer();
//set mailer to use smtp
$mail->isSMTP();
//define stmp host
$mail->Host ="smtp.gmail.com";
//enable smtp authentication
$mail->SMTPAuth ="true";
//set type of encryption(ssl/tls)
$mail->SMTPSecure = "tls";
//set port to connect smtp
$mail->Port ="587";
//set gmail username
$mail->Username = "projetweb74@gmail.com";
//set gmail password
$mail->Password = "azerty123.";
//set email subject
$mail->Subject = "Test Email Us";
//set sender email
$mail->setFrom("projetweb74@gmail.com");
//Enable HTML
$mail->isHTML(true);
//email body
$mail->Body = "<h1>pour ameliorez votre niveau veillez consultez notre cours <br> cordialement.<h1> ";
//Attachement
//$mail->addAttachement('C:\wamp64\www\superb-html-template\Dashboard\pages\logo2.png');
//add recipient
$mail->addAddress("ameni.drira@esprit.tn");
//finaly send email
if ( $mail->Send() ){
    echo "Email Sent..!";}
    else{
        echo"Error";
    }

//closing smtp connection
$mail->smtpClose();
?>