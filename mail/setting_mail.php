<?php
    require_once "./PHPMailer/PHPMailer.php";
    require_once "./PHPMailer/SMTP.php";
    require_once "./PHPMailer/Exception.php";

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;


	$mail = new PHPMailer(true);
	$mail->CharSet = PHPMailer::CHARSET_UTF8;
	$mail->SMTPDebug = SMTP::DEBUG_LOWLEVEL;
    //Server settings
    $mail->isSMTP();
    $mail->Host = "mail.go-dominican-republic.com";
//    $mail->SMTPAuth = true;
    $mail->Username = "no-reply@go-dominican-republic.com";
    $mail->Password = 'A741852*/';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";
 ?>