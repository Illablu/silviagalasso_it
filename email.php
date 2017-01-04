<?php
require "config.php";
require 'class.phpmailer.php';
require 'class.smtp.php';

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        // Set the email subject.
        $subject = "Nuovo contatto da silviagalasso.it da $name";

        // Build the email content.
        $email_content = "";
        $email_content .= "Nome: $name<br />";
        $email_content .= "Email: $email<br />";
        $email_content .= "Messaggio:<br />$message<br />";

        // Build the email headers.
        
        date_default_timezone_set('Etc/UTC');

		$mail = new PHPMailer();

		$mail->IsSMTP();
		$mail->CharSet = 'UTF-8';

		$mail->Host       = $smtp_host;
		$mail->SMTPDebug  = 0;
		$mail->SMTPAuth   = true;
		$mail->Port       = $smtp_post;
		$mail->Username   = $smtp_user;
		$mail->Password   = $smtp_password;

		$mail->setFrom($email);
		$mail->addAddress($recipient_email);

		$mail->isHTML(true);

		$mail->Subject = $subject;
		$mail->Body    = $email_content;

        // Send the email.
       if ($mail->send()) {
           http_response_code(200);
        } else {
           	http_response_code(500);
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
    }

?>