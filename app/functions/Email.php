<?php

use PHPMailer\PHPMailer\PHPMailer;

use function PHPSTORM_META\map;

// function send($data){
//     $to = 'guizaomtz@gmail.com';
//     $subject = $data->subject;
//     $message = $data->message;
//     $headers = "From: {$data->email}"."\r\n".
//     "Reply-To: contato@devclass.com.br". "\r\n".
//     "X-Mailer: PHP/". phpversion();

//     return  mail($to,$subject,$message,$headers);
// }

function send(array $data){
    $email = new PHPMailer();
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'plain'; //plain
    $email->isSMTP();
    $email->Host = 'sandbox.smtp.mailtrap.io';
    $email->Port = 2525;
    $email->SMTPAuth = true;
    $email->Username = 'd03dfde1efa750';
    $email->Password = '47e3411ebbed92';
    $email->isHTML(true);
    $email->setFrom('guizaomtz@gmail.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita HTML';
    $email->msgHTML($data['mensagem']);
    
    return $email->send();
}