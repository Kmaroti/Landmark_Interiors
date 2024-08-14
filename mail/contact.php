<?php
if(empty($_POST['name']) || empty($_POST['tel']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['tel']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = "sagarkasbe1432@gmail.com"; // Change this email to your //
$tel = "$m_tel:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\nTel: $m_tel\n\nMessage: $message";
$header = "From: $email";
$header .= "Reply-To: $email";	

if(!mail($to, $tel, $body, $header))
  http_response_code(500);
?>
