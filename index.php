<?php

    require ('phpmailer/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    $mail->isSMTP();
    

    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';

    $mail->Username='danishalam002@gmail.com';
    $mail->Password='Danish@11709';

    $mail->setFrom('danishalam002@gmail.com','danish');
    $mail->addAddress('iamdanish8102@gmail.com');
    $mail->addReplyTo('iamdanish8102@gmail.com');

    $mail->isHTML(true);
    $mail->Subject='PHP Mailer Subject';
    $mail->Body='<h1 align=center>Subscribe my channel</h1><br><h4 align=center>Like this video</h4>';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }

?>