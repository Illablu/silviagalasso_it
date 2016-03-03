<?php
require "config.php";

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = $recipient_email;

        // Set the email subject.
        $subject = "Nuovo contatto da silviagalasso.it da $name";

        // Build the email content.
        $email_content = "Nome: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Messaggio:\n$message\n";

        // Build the email headers.
        $email_headers = "Date: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
    }

?>