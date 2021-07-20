<?php
//require("setting_mail.php");
//require_once("swift_mailer.php");
ob_start();
if ($lang == "fr") {
  require '../facture-fr.php';	
} else {
  require '../facture-us.php';
}
$voir = ob_get_clean();


// Create a message
echo ("facture destin =>>>>>>>>>>" .$email);
echo "<br>";
echo ("facture EXP =>>>>>>>>>>" .FROM);
echo "<br>";
$message = (new Swift_Message('Bill from : go-dominican-republic.com'))
    ->setFrom([FROM => 'Dominican'])
    ->setTo([$email])
    ->setContentType('text/html')
    ->setBody($voir, "text/html")
;

// Send the message
$result = $mailer->send($message);
echo ("facture maile =>>>>>>>>>" . $result);

//
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
//    $mail->Subject = "Demande de facture";
//
//    $mail->Body = $voir;
//    $mail->send();
//} catch (Exception $e) {
////    print_r($e);die;
//}


?>
