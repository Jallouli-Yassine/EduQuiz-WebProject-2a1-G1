<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'mailer/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();

    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                
    //Enable verbose debug output

    $mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = '';                      //email mteik
$mail->Password   = '';             //SMTP password
$mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

$mail->isHTML(true);  

$lien = $_POST['lienJeu'];
    $mail->setFrom('admin@eduquiz.tn', 'Event');   // email eli bch tabath bih
    $mail->addAddress($_POST["email"]);   // email leli theb tabaathloo

    $mail->Subject = 'event';
    $mail->Body    = "<a href='$lien'> this is your event </a>";
    $mail->send();
?>