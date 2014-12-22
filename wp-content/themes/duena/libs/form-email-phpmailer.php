<?php

	/*require_once '/wp-content/themes/duena/libs/PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;
	$mail->IsSMTP();
	$mail->Host = '575l-5qzm.accessdomain.com';
	$mail->Username = 'noreply@new.westliving.net';
	$mail->Password = 'FZ"+62g~';
	$mail->SMTPSecure = 'tls';*/

	//$emailTo = $_POST['to'];
	$emailTo = "info@westliving.net,westlivingleads@leadinsite.com";
	
	$nameTitle = "Name: ";
	$name = $_POST['name'];
	$nameEmail = $nameTitle . $name . "\r\n";
	
	$emailTitle = "Email: ";
	$email = $_POST['email'];
	$emailEmail = $emailTitle . $email . "\r\n";
	
	$phoneTitle = "Phone: ";
	$phone = $_POST['phone'];
	$phoneEmail = $phoneTitle . $phone . "\r\n";
	
	$addressTitle = "Address: ";
	$address = $_POST['address'];
	$addressSeparator = ", ";
	if($_POST['city'] == "") $addressSeparator = "";
	$city = $_POST['city'];
	$citySeparator = ", ";
	if($_POST['state'] == "") $citySeparator = "";
	$state = $_POST['state'];
	$stateSeparator = ", ";
	if($_POST['zip'] == "") $stateSeparator = "";
	$zip = $_POST['zip'];
	$fullAddressEmail = $addressTitle . $address . $addressSeparator . $city . $citySeparator . $state . $stateSeparator . $zip . "\r\n";
	
	$messageTitle = "Message:\r\n";
	$message = $_POST['message'];
	$messageEmail = $messageTitle . $message . "\r\n";
	
	/* Primary email */
	$subject = "WESTliving Contact Form";
	$body .= $nameEmail;
	$body .= $emailEmail;
	$body .= $phoneEmail;
	$body .= $fullAddressEmail;
	$body .= $messageEmail;
	
	$headers   = "From: no-reply@westliving.net\r\n";
	$headers  .= "Reply-To: {no-reply@westliving.net}\r\n";
	
	/*$mail->From = "noreply@new.westliving.net";
	$mail->FromName = $email;
	$mail->AddAddress($emailTo, 'Service Desk Team');
	$mail->AddReplyTo('noreply@new.westliving.net', $name);
	$mail->IsHTML(true);
	$mail->Subject = "$subject";
	$mail->Body = $body;
	$mail->AltBody = $body;*/
	
	//var_dump($mail->send());
	//$mail->send();
	mail($emailTo,$subject,$body,$headers);

?>