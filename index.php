<?php 
    require_once "./mail.php";
    $mail->setFrom('abdelkefikhadija1@gmail.com', 'BIG J1');   // email eli bch tabath bih
    $mail->addAddress('khadija.abdelkefi@esprit.tn');   // email leli theb tabaathloo

    $mail->Subject = 'test title email';
    $mail->Body    = 'body email lena thot el text li theb alih</b>';
    $mail->send();

?>