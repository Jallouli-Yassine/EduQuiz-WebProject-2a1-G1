<?php 

    require_once "./mail.php";
    $mail->setFrom('EduQuiz@gmail.com', 'BIG J1');   // email eli bch tabath bih
    $mail->addAddress('azizbouharb7@gmail.com');   // email leli theb tabaathloo

    $mail->Subject = 'test title email';
    $mail->Body    = 'body email lena thot el text li theb alih</b>';
    try {
        $mail->send();
        echo "Message has been sent successfully";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }

?>