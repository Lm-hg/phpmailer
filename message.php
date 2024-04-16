<?php

require_once "./vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



    $mail = new PHPMailer();
    $to="modestinhounga3@gmail.com";
    $message="coucou";
    
    // Authentification via SMTP
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    // Connexion
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->Username = "";//votre adresse mail;
    $mail->Password = "";//votre mot de passe
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    
    $mail->setFrom($to, 'IMADE');
    $mail->addAddress($to, 'IMADE');
    
    
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
    
    $mail->isHTML(true);
    $mail->Subject = 'Objet de votre email';
    $mail->Body = $message;
    $mail->AltBody = 'Le texte comme simple élément textuel';
    
    $mail->send();




    


?>