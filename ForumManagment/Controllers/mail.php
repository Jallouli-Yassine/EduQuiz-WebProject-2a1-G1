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
    $mail->Username   = 'salma.saidi@esprit.tn';                  //SMTP username
    $mail->Password   = '201JFT2477';                     //SMTP password
    $mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Content
    $mail->isHTML(true);  


    $mail->setFrom('salma.saidi@esprit.tn', 'EDUQUIZ ADMIN');
    $mail->addAddress('salma.saidi@esprit.tn');   // l eamil mtaa l user li tfasakhlou l post

    $mail->Subject = 'EDUQUIZ COURSE MANAGMENT';
    $mail->Body    = "<h1> your post was deleted !! </h1>";
    $mail->send();


    header('Location:./../view/all-courses.php');
    
?>