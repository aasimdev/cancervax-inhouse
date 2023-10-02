<?php
if (!isset($_SESSION)) session_start();
if (!$_POST) exit;
include dirname(__FILE__) . '/settings/settings.php';
require 'phpmailertesting/PHPMailer/class.phpmailer.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$guestname = strip_tags(trim($_POST["name"]));
	$emailaddress = strip_tags(trim($_POST["email"]));
	$subject = strip_tags(trim($_POST["subject"]));
	$comment = strip_tags(trim($_POST["message"]));

	if ($errors) {
		//Output errors in a list
		$errortext = "";
		foreach ($errors as $error) {
			$errortext .= '<li>' . $error . "</li>";
		}

		echo '<div class="alert notification alert-error">Error:<br><ul>' . $errortext . '</ul></div>';
	} else {
		$mail = new PHPMailer;
		$mail->CharSet = "UTF-8";
		$mail->AddReplyTo($emailaddress, $guestname);
		$mail->addAddress('info@crowbarstudios.com');
		// $mail->Subject  = $guestname + '';
		$mail->Subject = $subject;
		$mail->IsHTML(true);
		$mail->Body    = '<html>

		 
		 <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
			
			     
            	 <p><span style="font-weight:bold;font-size:16px;padding-left:10px">Name:</span> ' . $guestname . '</p>
				 <p><span style="font-weight:bold;font-size:16px;padding-left:10px">E-Mail:</span> ' . $emailaddress . '</p>
				 <p><span style="font-weight:bold;font-size:16px;padding-left:10px">Subject:</span> ' . $subject . '</p>
			 <p><span style="font-weight:bold;font-size:16px;padding-left:10px">Message:</span> ' . $comment . ' </p>			
			
							 
				
			 
		 </body>
		 </html>';
		$mail->send();
		if ($redirectForm == true) {
			echo '<script>setTimeout(function () { window.location.replace("' . $redirectForm_url . '") }, 1000); </script>';
		}
	}
}
