<?php
if (isset($_POST['submit'])) {
	$to = 'jnokku@gmail.com';
	$subject = 'Feedback Care For Webdesign';
	$message = 'Name: ' . $_POST['myName'] . "\r\n\r\n";
	$message .= 'Email: ' . $_POST['myEmail'] . "\r\n\r\n";
	$message .= 'Feedback Page: ' . $_POST['myPage'] . "\r\n\r\n";
	$message .= 'Subject: ' . $_POST['mySubject'] . "\r\n\r\n";
	$message .= 'Suggestion: ' . $_POST['mySuggestions'];
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if ($email) {
   $headers .= "\r\nReply-To: $email";
}
	$headers = "From: myname@email.com\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';
	$success = mail($to, $subject, $message, $headers, '‑fmyname@email.com');
}
?>

<!DOCTYPE html>
<html>
	<body>
		<?php if (isset($success) && $success) { ?>
		<h1>Thank You</h1>
		<p>Your message has been sent.</p>
		<?php } else { ?>
		<h1>Oops!</h1>
		<p>Sorry, there was a problem sending your message.</p>
		<?php } ?>
	</body>
</html>
