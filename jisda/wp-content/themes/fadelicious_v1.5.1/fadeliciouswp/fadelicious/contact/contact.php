<?php

// Do not edit this if you are not familiar with php
error_reporting (E_ALL ^ E_NOTICE);
$post = (!empty($_POST)) ? true : false;
if($post)
	{
	function ValidateEmail($email)
	{

$regex = "([a-z0-9_\.\-]+)". # name

"@". # at

"([a-z0-9\.\-]+){2,255}". # domain & possibly subdomains

"\.". # period

"([a-z]+){2,10}"; # domain extension 

$eregi = eregi_replace($regex, '', $email);

return empty($eregi) ? true : false;
}

$name = stripslashes($_POST['name']);
$to = trim($_POST['to']);
$email = trim($_POST['email']);
$subject = stripslashes($_POST['subject']);
$message = nl2br($_POST['message']);
$phone = stripslashes($_POST['phone']);
$answer = trim($_POST['answer']);
$verificationanswer="4"; // plz  change edit your human answer
$from=$email;
$Reply=$to;
$from=$to;
$error = '';
$headers= "From: $name <" . $email . "> \n";
$headers.= "Reply-to:" . $email . "\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers = "Content-Type: text/html; charset=utf-8\n".$headers;

// Checks Name Field

if(!$name || !$email || $email && !ValidateEmail($email) || $answer <> $verificationanswer || !$message || strlen($message) < 5)
{
$error .= 'Please fill the required fields correctly.<br />';
}


if(!$to)
{
$error .= 'Please enter an e-mail address in Wordpress Options Panel.<br />';
}

if($to && !ValidateEmail($to))
{
$error .= 'Please enter a valid e-mail address in Wordpress Options Panel.<br />';
}


if(!$error)
	{
$messages.="Name: $name <br>";
$messages.="Email: $email <br>";
$messages.="Message: $message <br>";
$emailto=$to;
	$mail = mail($to,$subject,$messages,$headers);	

if($mail)
	{
	echo 'OK';
if($autorespond == "yes")
{
	include("autoresponde.php");
}
	}

	}
	else
	{
	echo '<div class="error">'.$error.'</div>';
	}

}
?>