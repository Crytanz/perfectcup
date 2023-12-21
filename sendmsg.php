<?php
$mysqli = new mysqli("localhost", "root", "", "perfectcup");

if ($mysqli->connect_error) {
    die('Error: (' . $mysqli->connect_errno .')'. $mysqli->connect_error);
}

$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$message = mysqli_real_escape_string($mysqli, $_POST['message']);

$email2 = "chickenhotdog423@gmail.com";
$subject = "Test Message";

if (strlen($fname) > 50) {
    echo "fname_long";
} else if (strlen($fname) < 2) {
    echo "fname_short";
} else if (strlen($email) > 50) {
    echo "email_long";
} else if (strlen($email) < 2) {
    echo "email_short";
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo "eformat";
} elseif (strlen($message) > 500) {
    echo "message_long";
} elseif (strlen($message) < 3) {
    echo "message_short";
} else {
    
    require 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = ''; // Replace with your Gmail password
    $mail->SMTPSecure = 'tls'; // Corrected
    $mail->Port = 587;

    $mail->addReplyTo($email);
    $mail->From = $email2;
    $mail->FromName = $fname;
    $mail->addAddress('mateo.m', 'Admin');
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

    if (!$mail->send()) {
        echo "Message could not be sent.";
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "true";
    }
}
?>
