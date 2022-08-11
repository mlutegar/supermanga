<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once('vendor/autoload.php');

date_default_timezone_set('America/Sao_Paulo');

define('GUSER', 'joaosorremailsender@gmail.com');
define("GPWD", 'qexzgfucoflxyvqu'); #mymailsender

function send($user){
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = GUSER;
    $mail->Password = GPWD;

    $mail->setFrom('recuperar-senha@playlistshare.com.br', 'PlaylistShare|Admin');
    $mail->addAddress($user->email);
    $mail->Subject = 'Senha recuperada';

    $mail->msgHTML(messageConstructor($user->password));
    $mail->AltBody = "Sua nova senha é: {$user->password}";

    $response = $mail->send();

    if($response){
        $file = fopen('log_email.log', 'a');
        $date = date('Y-m-d H:i');
        fwrite($file, "Email enviado:{$user->email} - {$date} \r\n");
        fclose($file);
        redirect('sucesso', 'foi gerada uma senha e enviada a seu email');
    }

    if(!$response){
        $file = fopen('log_email.log', 'a');
        $date = date('Y-m-d H:i');
        fwrite($file, "{$mail->ErrorInfo}\r\n{$user->email}\r\n{$date}\r\n\r\n");
        fclose($file);
        redirect('falha', 'Ocorreu um erro ao recuperar a senha');
    }
}

function messageConstructor($pwd){
    return "<!DOCTYPE html>" 
    . "<html lang= 'pt-br'>"
    . "<head>"
    . "<meta charset='UTF-8'>"
    . "<meta http-equiv= 'X-UA-Compatible' content='IE=edge'"
    . "meta name='viewport' content= 'width=device-width, initial-scale=1'"
    . "<title>Document</title>"
    . "</head>"
    ."<body>"
    . "<h1>Recuperação de senha <strong>PlaylistShare</strong></h1>"
    . "<div align='center'>"
    . "<h3>Sua nova senha é: {$pwd}</h3>"
    . "</div>"
    ."</body>"
    ."</html>";
}

function redirect($status, $msg){
    $page = "recover_password.php";


    setcookie('notify', $msg, time() + 1, "/playlist_share/{$page}", 'localhost');
    setcookie('status', $status, time() + 1, "/playlist_share/{$page}", 'localhost');
    header("location: {$page}");
    exit;
}
    