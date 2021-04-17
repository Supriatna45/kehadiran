<?php
/*##########Script Information#########
  # Purpose: Send mail Using PHPMailer#
  #          & Gmail SMTP Server 	  #
  # Created: 24-11-2019 			  #
  #	Author : Hafiz Haider			  #
  # Version: 1.0					  #
  # Website: www.BroExperts.com 	  #
  #####################################*/

//Include required PHPMailer files
	require_once 'PHPMailer/PHPMailerAutoload.php';
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "ssl";
//Port to connect smtp
	$mail->Port = "465";
//Set gmail username
	$mail->Username = "agumonxtra@gmail.com";
//Set gmail password
	$mail->Password = "Supriatna1234";
//Email subject
	$mail->Subject = "Email Confirmation";
//Set sender email
	$mail->setFrom('agumonxtra@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	$mail->addAttachment('attach/logo.png');
//Email body
	$mail->Body = "<h1>You joined IT Conference</h1></br><p>Thank you for applying to this year IT conference, see you!</p>";
//Add recipient
	$mail->addAddress('supriatnaxv45@gmail.com');
//Sending email
    $mail->Send();
//Closing smtp connection
	$mail->smtpClose();
?>