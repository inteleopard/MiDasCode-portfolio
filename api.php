<?php

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail = new PHPMailer();
$mail->SMTPDebug = 1;
$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com;';
$mail->SMTPAuth   = true;
$mail->Username   = 'blackleopard430@gmail.com';
$mail->Password   = "gygmprlhivozbpny";
$mail->SMTPSecure = 'tls';
$mail->Port       = 587;

$mail->setFrom('blackleopard430@gmail.com');
$mail->addAddress('darkcaesar0721@gmail.com');
$mail->isHTML(true);
$mail->Subject = 'contact with ' . $name;
$mail->Body = "<div><span>Name: " . $name . "</span><br><span>Email: " . $email . "</span><br><span>Message: " . $message . "</span></div>>";
$mail->send();

echo json_encode('success');
