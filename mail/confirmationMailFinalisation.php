<?php
require("./setting_mail.php");
ob_start();
require '../dashboard_mail.php';
$voir = ob_get_clean();

try {

    $mail->isSMTP();
//    $mail->Host = "127.0.0.1:1025";
//    $mail->SMTPAuth = false;
//    $mail->Username = "";
//    $mail->Password = '';
//    $mail->SMTPSecure = "ssl";

//email setting
    $mail->isHTML(true);
    $mail->AddAddress($email);
    $mail->Subject = "Confirmation";

    $mail->Body = $voir;
    $mail->send();
} catch (Exception $e) {
    print_r($e);die;
}


?>