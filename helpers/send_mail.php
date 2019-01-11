<?php

function sendMail($email)
{
    require ROOT.DS.'PHPMailer/src/PHPMailer.php';
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->IsHTML(true);
    $mail->Host = $email;
    $mail->SMTPAuth = true;
    $mail->Username = 'amine';
    $mail->Password = 'amine';
    $mail->FromName = 'Mailer';
    $mail->From = 'amine.mehdaoui@gmail.com';
    $mail->AddAddress('abdelamine.mehdoaui@gmail', 'MEHDAOUI Abdelamine');
    $mail->Subject = 'Here is the subject';
    $mail->Body = 'le message en html <b>Alert</b>';
    $mail->AltBody = 'Quelqun  est inscrit dans notre site nous vous prié de bien vouloir verifier ça avec le lien que nous allons vous evoyer';
    $mail->Send();
}
