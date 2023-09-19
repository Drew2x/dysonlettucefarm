<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
	$mail = new PHPMailer(true);

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username ='dysonlettuce22@gmail.com';  //gmail accnt
	$mail->Password ='lgsyxkfejzdfjosr';	//passwrd of accnt
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;


	$mail->addAddress('dysonlettuce22@gmail.com');

	$mail->isHTML(true);

	$mail->Name = $_POST["fname"];
	$mail->Subject = $_POST["subject"];
	$mail->Body = $_POST["message"];

	$mail->send();

	echo
	"
	<script>
	alert('Sent Successfully');
	document.location.href = 'index.html';
	</script>
	";
}
?>