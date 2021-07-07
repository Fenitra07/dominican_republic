<?php

ob_start();
require 'dashboard_mail.php';
$voir = ob_get_clean();

try {

    $mail->isSMTP();
//    $mail->Host = "127.0.0.1:1025";
//    $mail->SMTPAuth = false;
//    $mail->Username = "";
//    $mail->Password = '';
    $mail->Port = 1025;
//    $mail->SMTPSecure = "ssl";

//email setting
    $mail->isHTML(true);
    $mail->setFrom("test@est.com", "tst");
    $mail->AddAddress("kama@tes.mg");
    $mail->Subject = "envoi mail";

    $mail->Body = $voir;
    echo $mail->send();
} catch (Exception $e) {
    print_r($e);die;
}


?>