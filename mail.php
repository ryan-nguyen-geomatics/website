<?php
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		
		$to='ryangeomatic@gmail.com';
		$subject='Form Submission';
		$txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\nMessage =" . $message .";
		$headers = "From: noreply@yorsite.com" . "\r\n" .
		"CC: somebodyelse@example.com";
		if($email!=NULL){
			mail($to,$subject,$txt,$headers);
		}
   
?>