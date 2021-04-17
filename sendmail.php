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
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "supriatnaxv45@gmail.com";
//Set gmail password
	$mail->Password = "netralizer35";
//Email subject
	$mail->Subject = "Email Confirmation";
//Set sender email
	$mail->setFrom('supriatnaxv45@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	$mail->addAttachment('attach/logo.png');
//Email body
	$mail->Body = "<h1>You joined IT Conference</h1></br><p>Thank you for applying to this year IT conference, see you!</p>";
//Add recipient
	$mail->addAddress('agumonxtra@gmail.com');
//Closing smtp connection
	$mail->smtpClose();
?>