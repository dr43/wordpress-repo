<?php
$to      = 'evgeny@otpotpotp.of.by';
$subject = 'the subject';
$message = 'hello';
$headers = 'evgen@otpotpotp.of.by' . "\r\n" .
    'Reply-To: evgen@otpotpotp.of.by' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>