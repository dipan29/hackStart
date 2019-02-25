<?php 
$errors = '';

include_once '../dbconnect.php';

$sender_mail = "notification@mindwebs.org";
$myemail = 'contact@mindwebs.org';

if(empty($_POST['cf-name'])  || 
   empty($_POST['cf-email']) || 
   empty($_POST['cf-message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = mysqli_real_escape_string($con, $_POST['cf-name']); 
$phone = mysqli_real_escape_string($con, $_POST['cf-number']);
$subject = mysqli_real_escape_string($con, $_POST['cf-about']);
$email_address = mysqli_real_escape_string($con, $_POST['cf-email']); 
$message = mysqli_real_escape_string($con, $_POST['cf-message']); 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	//$to = $myemail; 
	$email_subject = "$subject ($name)";
	$email_body = "You have received a New Message on <strong>M W HackStart Page</strong>. \n\n".
	"Here are the Particulars:\n\n Name: $name \n Subject : $subject \n Email: $email_address \n Phone Number : $phone \n \n Message: \n $message"; 
	
	$headers = "From: $sender_mail\n"; 
	$headers .= "Reply-To: $email_address";
	
	//$result = mysqli_query($con, "INSERT INTO mailing(name, subject, sender, receiver, reply_to, content, type, time) VALUES('".$name."', '".$subject."','".$sender_mail."','".$myemail ." | ".$myemail2."','".$email_address."','".$email_body."','Sent', '".$timeNow."') "); 
	
	mail($myemail,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	
	$value = "Your Message Has Been Successfully Sent";
	
	setcookie("msg_confirm", $value, time()+45, '/');
	
	?>
	<script>
		window.history.go(-1);
	</script>
    <?php
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>