<?php
	if(isset($_POST['submit'])){
		$name = $_POST['userName'];
		$mailFrom = $_POST['userEmail'];
		$message = $_POST['message'];
		
		$mailTo = "nickhildebrant09@gmail.com";
		$headers = "From: ".$mailFrom;
		$email_body = "You have recieved a new message from the user name $userName.\n". "Here is the message:\n $message".
		
		mail("nickhildebrant09@gmail.com", "Website Form Submission", $email_body, $headers);
		header("Location: index.php?mailsend");
	}
?>