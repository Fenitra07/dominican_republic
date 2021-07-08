<?php

require_once './vendor/autoload.php';
// Create the Transport
try {

    $transport = (new Swift_SmtpTransport('mail.go-dominican-republic.com', 2079))
//    ->setUsername('no-reply@go-dominican-republic.com')
//    ->setPassword('A741852*/')
    ;

// Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

// Create a message
    $message = (new Swift_Message('Wonderful Subject'))
        ->setFrom(['no-reply@go-dominican-republic.com' => 'John Doe'])
        ->setTo(['harinjatovo.fetra@gmail.com', 'tounafyoung@gmail.com' => 'Fetra'])
        ->setBody('Here is the message itself')
    ;

// Send the message
    $result = $mailer->send($message);
} catch (Exception $exception) {
    var_dump($exception);
}
