<?php 
error_reporting(E_ALL);
require_once 'vendor/autoload.php';


  function sendMail($email, $subject, $body){ //function parameters, 3 variables.
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	
	$mail->Host = "smtp.gmail.com";
	$mail->Username = "abc@gmail.com";
	$mail->Password = "abc";
	$mail->SMTPSecure = "ssl";
	$mail->Port = 465;
	$mail->From = "abc@gmail.com";
	$mail->FromName = "ABC R&D International";
	$mail->AddReplyTo("abc@gmail.com","ABC");
	$mail->addBCC("$email");
	$mail->WordWrap = 50;
	$mail->IsHTML(true);
	
	
	$mail->Subject = $subject;
	$mail->Body = $body;
	
	if($mail->send())
	{
		echo "Mail sent successfully.";
		

	}else{
		echo "Send mail failed.Check the provided info and try again. " . $mail->ErrorInfo;
		
	}
}

?>