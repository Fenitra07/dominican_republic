<?php
const DEMANDE_MAIL = "demandes@go-dominican-republic.com";
//require("setting_mail.php");
//require_once("swift_mailer.php");
ob_start();
require '../traitement/voir_mail.php';
$voir = ob_get_clean();



echo ("detail destin =>>>>>>>>>>" .DEMANDE_MAIL);
echo "<br>";
echo ("detail EXP =>>>>>>>>>>" .FROM);
echo "<br>";
// Create a message
$message = (new Swift_Message('New submission from : go-dominican-republic.com'))
    ->setFrom([FROM => 'Dominican'])
    ->setTo([DEMANDE_MAIL])
    ->setContentType('text/html')
    ->setBody($voir, 'text/html')
;

// Send the message
$result = $mailer->send($message);
echo ("detail EXP =>>>>>>>>>>" .FROM);

//try {
////    $mail->Host = "127.0.0.1:1025";
////    $mail->SMTPAuth = false;
////    $mail->Username = "";
////    $mail->Password = '';
////    $mail->SMTPSecure = "ssl";
//
////email setting
//    $mail->isHTML(true);
//    $mail->AddAddress(DEMANDE_MAIL);
//    $mail->Subject = "Nouvelle demande de ticket";
//
//    $mail->Body = $voir;
//    $mail->send();
//} catch (Exception $e) {
////    print_r($e);die;
//}

?>
