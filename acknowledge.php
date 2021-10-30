<?php
//if the form has been submitted
if (isset($_POST['send'])) {
	/*$to = 'cglass1@walla.co.il';*/ 
	// $to = 'cjglassinfo@cjglassmusic.com';
	$to = 'itsik_dg123@walla.co.il';
    $subject = 'Contact Request from my site';
	$message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
    $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
	$message .= 'Comment: ' . $_POST['comment'];
	//echo $message;
	$headers = "From: cjglassinfo@cjglassmusic.com\r\n";
	$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	if ($email) {
   		$headers .= "\r\nReply-To: " . $email;
	}
	//echo $headers;
	//echo $email;
	//echo $success;

	//variable "success" is only to tell us if the mail function whether managed to pass it mail transport agent. After that, it has no responsibility whatsoever for the mail.
	$success = mail($to, $subject, $message, $headers, '-fcjglassinfo@cjglassmusic.com');
	//$success = mail($to, $subject, $message, $headers);
	//$success = mail($to, $subject, $message);
}

/*if (isset($success) && $success) {
		header('Location: resultContact.html');
	} else { 
		header('Location: resultContact.html');
	}*/

?>


<body style="background-color:  #384047; font-family: sans-serif; font-size: 16px; color: #fff; text-align: center; background-image: url(images/backgroundForms.svg);
            background-size: contain; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
    <?php if (isset($success) && $success) { ?>
		    <h1>Thank You</h1>
		    <p>Your message has been sent.</p>
		    <br>
		    <a href="index.html" style="text-decoration: none; color: #E8A317; border: 0.125em solid #3A5FCD; border-radius: 10px; font-weight: 700; margin: 2px; padding: 15px;
		                                background-color: rgb(0, 0, 0);">Return To Site</a>
	    <?php } else { ?>
		    <h1>Oops!</h1>
		    <p>Sorry, there was a problem sending your message.</p>
		    <br>
		    <a href="contact.html" style="text-decoration: none; color: #E8A317; border: 0.125em solid #3A5FCD; border-radius: 10px; font-weight: 700; margin: 2px; padding: 15px;
		                                  background-color: rgb(0, 0, 0);">Return to Contact</a>
		<?php } ?>
</body>

</body>