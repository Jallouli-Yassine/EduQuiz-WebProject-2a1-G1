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
    $mail->Username   = 'jungloul1@gmail.com';                  //SMTP username
    $mail->Password   = 'azaazaA123456789';                     //SMTP password
    $mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Content
    $mail->isHTML(true);  


    $mail->setFrom('jungloul1@gmail.com', 'EDUQUIZ ADMIN');
    $mail->addAddress('yassine.jallouli@esprit.tn');   

    $mail->Subject = 'EDUQUIZ COURSE MANAGMENT';
    $mail->Body    = "<h1 style='color:black;'>your course was activated successfuly :D </h1> <br> <a style='color:orange;font-size:25px' href='http://localhost/php%20projects/esprit/EduQuiz-WebProject-2a1-G1/CourseManagment/view/myCourse.php'> my courses page </a>";
    $mail->send();


    header('Location:./../view/all-courses.php');
    
?>