<?php

//require_once("swift_mailer.php");
ob_start();
require '../message.html';
$voir = ob_get_clean();


// Create a message

echo ("final destin =>>>>>>>>>>" . $email);
echo "<br>";
echo ("final EXP =>>>>>>>>>>" .FROM);
echo "<br>";
$message = (new Swift_Message('Confirmation message from : go-dominican-republic.com'))
    ->setFrom([FROM => 'Dominican'])
    ->setTo([$email])
    ->setContentType('text/html')
    ->setBody($voir, "text/html")
;

// Send the message
$result = $mailer->send($message);
echo "final resul ====>" . $result;

//try {
////    $mail->Host = "127.0.0.1:1025";
////    $mail->SMTPAuth = false;
////    $mail->Username = "";
////    $mail->Password = '';
////    $mail->SMTPSecure = "ssl";
//
////email setting
//    $mail->isHTML(true);
//    $mail->AddAddress($email);
//    $mail->Subject = "Confirmation";
//
//    $mail->Body = $voir;
//    $mail->send();
//} catch (Exception $e) {
//    //print_r($e);die;
//}


?>
