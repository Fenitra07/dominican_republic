<?php
    require_once "../PHPMailer/PHPMailer.php";
    require_once "../PHPMailer/SMTP.php";
    require_once "../PHPMailer/Exception.php";

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	const HOST = "mail.go-dominican-republic.com";
	const PORT = 25;
    const SENDER = "no-reply@go-dominican-republic.com";
	$mail = new PHPMailer(true);
	$mail->CharSet = PHPMailer::CHARSET_UTF8;
	$mail->SMTPDebug = SMTP::DEBUG_LOWLEVEL;
    //Server settings
    $mail->isSMTP();
    $mail->Host = HOST;
//    $mail->SMTPAuth = true;
//    $mail->Username = "no-reply@go-dominican-republic.com";
//    $mail->Password = 'A741852*/';
    $mail->Port = PORT;
    $mail->setFrom(SENDER);
//    $mail->SMTPSecure = "ssl";
 ?>