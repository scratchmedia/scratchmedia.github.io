<?php
require '../PHPMailer/PHPMailerAutoload.php';

//gather all form fields
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$radio = $_POST['radio'];	
$message = $_POST['message'];

	$mail = new PHPMailer;

	$mail->isMail();

	$mail->setFrom('form@scratchmediaohio.com', 'Mailer');
	$mail->addAddress('renegade13design@gmail.com', 'Ashley Duncan');     // Add a recipient


	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = 'Contact Form Submission';
	$mail->Body    = '
		<html>
		<head>
		<link rel="stylesheet" href="" type="text/css" media="screen, projection" />
		</head>
		<body>
		
		<table style="width: 600px; padding: 12px; border: 1px solid #ddd;" align="center">
			<tr>
				<td><img src="http://scratchmediaohio.com/img/form.jpg"></td>
			</tr>
			<tr>
        		<td style="padding: 10px 0px; border-bottom: 1px dotted #b4996d;"><span style="background: #37afe1; padding: 7px 10px; color: white;">1</span>
				&nbsp;&nbsp;<strong>Full Name:</strong> '.$name.'</td>
			</tr>
			<tr>
				<td style="padding: 10px 0px; border-bottom: 1px dotted #b4996d;"><span style="background: #37afe1; padding: 7px 10px; color: white;">2</span>
				&nbsp;&nbsp;<strong>Email Address:</strong> '.$email.'</td>
			</tr>
			<tr>
				<td style="padding: 10px 0px; border-bottom: 1px dotted #b4996d;"><span style="background: #37afe1; padding: 7px 10px; color: white;">3</span>
				&nbsp;&nbsp;<strong>Phone Number:</strong> '.$phone.'</td>
			</tr>
			<tr>
				<td style="padding: 10px 0px; border-bottom: 1px dotted #b4996d;"><span style="background: #37afe1; padding: 7px 10px; color: white;">4</span>
				&nbsp;&nbsp;<strong>Company:</strong> '.$company.'</td>
			</tr>
			<tr>
				<td style="padding: 10px 0px; border-bottom: 1px dotted #b4996d;"><span style="background: #37afe1; padding: 7px 10px; color: white;">5</span>
				&nbsp;&nbsp;<strong>What do you want?:</strong> '.$radio.'</td>
			</tr>
			<tr>
				<td style="padding: 10px 0px; border-bottom: none;"><span style="background: #37afe1; padding: 7px 10px; color: white;">6</span>
				&nbsp;&nbsp;<strong>What do you need?:</strong> '.$message.'</td>
			</tr>
		</table>
		
		</body>
		</html>			
	';
	
	if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
		$redirect = 'http://scratchmediaohio.com/contact.php';
		$alert = 'Request has been sent';
    header( 'http://scratchmediaohio.com/contact.php' );
}

$alert = 'Request has  been sent successfully';
$redirect = "http://scratchmediaohio.com/contact.php";

unset($_POST);
header("location: $redirect");
exit;
?>	
