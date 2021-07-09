<?php

//require("setting_mail.php");
ob_start();
require '../traitement/voir_mail.php';
$voir = ob_get_clean();
const DEMANDE_MAIL = "tounafyoung@gmail.com";
try {

    $mail->isSMTP();
//    $mail->Host = "127.0.0.1:1025";
//    $mail->SMTPAuth = false;
//    $mail->Username = "";
//    $mail->Password = '';
//    $mail->SMTPSecure = "ssl";

//email setting
    $mail->isHTML(true);
    $mail->AddAddress(DEMANDE_MAIL);
    $mail->Subject = "Nouvelle demande de ticket";

    $mail->Body = $voir;
    $mail->send();
} catch (Exception $e) {
//    print_r($e);die;
}

?>