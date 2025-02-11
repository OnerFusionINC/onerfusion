<?php 

if (!empty($_POST)) {

$mailheader = 'From: ' . $_POST["inputEmail3"] . "\r\n";
$mailheader .= 'Reply-To: ' . $_POST['inputEmail3'] . "\r\n";
$mailheader .= 'MIME-Version: 1.0' . "\r\n";
$mailheader .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";

$ToEmail = 'info@onerfusion.com'; 

$EmailSubject = 'Site contact form'; 

$MESSAGE_BODY = "Name: ".$_POST["userName"]."<br/>". "\r\n"; 

$MESSAGE_BODY .= "Email: ".$_POST["inputEmail3"]."<br/>". "\r\n"; 

$MESSAGE_BODY .= "Comment: ".nl2br($_POST["userMsg"])."<br/>". "\r\n"; 

$sendEmail = mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader); 

if (!$sendEmail) {
	header('Location:http://onerfusion.com/contact.php?form=failure');	
}

header('Location:http://onerfusion.com/contact.php?form=success');

}
?>