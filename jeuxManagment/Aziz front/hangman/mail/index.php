<?php 
   
    require_once "mail.php";
    $add=$_POST['mail'];
    $mail->setFrom('medaziz.bouharb@esprit.tn', 'BIG J1');   // email eli bch tabath bih
    $mail->addAddress($add);   // email leli theb tabaathloo

    $mail->Subject = 'HANGMAN EduQuiz Game';
    $mail->Body    = 'Wellcome To HANGMAN </b>';
    try {
        $mail->send();
        echo "Message has been sent successfully";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }

?>