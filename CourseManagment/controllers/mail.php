<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require_once"./CourseController.php";
$courseC = new CourseC();
echo $_POST['courseIDD'];
$courseC->declineState($_POST['courseIDD']);

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
    $mail->Username   = '';                  //SMTP username
    $mail->Password   = '';                     //SMTP password
    $mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Content
    $mail->isHTML(true);  


    $mail->setFrom('jungloul1@gmail.com', 'EDUQUIZ ADMIN');
    $mail->addAddress('yassine.jallouli@esprit.tn');   

    $mail->Subject = 'EDUQUIZ COURSE MANAGMENT';
    $mail->Body    = "<h1>".$_POST['Description']."</h1>"."<br> <a style='color:orange;font-size:25px' href='http://localhost/php%20projects/esprit/EduQuiz-WebProject-2a1-G1/CourseManagment/view/myCourse.php'> my courses page </a>";
    $mail->send();


    header('Location:./../view/all-courses.php');
    
?>
