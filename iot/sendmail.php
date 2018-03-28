<?php 
	include("includes/functions.php");
	include("config.inc.php");
?>
<?php
	$gkey = $_POST['gkey'];
	//$gkey = "Bbyc689ZxC";
	//echo "dsajh";
	$query = "SELECT email from usr_tbl WHERE gps_id = '$gkey'";
	$result = mysqli_query($conn,$query);
	//$gkey = "Bbyc689ZxC";
	if($result)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$email = $row['email'];
			echo $email;
			/*require 'PHPMailer-master/PHPMailerAutoload.php';
			require 'vendor/autoload.php';
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Host = "smtp.gmail.com";
			$mail->SMTPAuth = true;
			$mail->Username = 'loankernel@gmail.com';
			$mail->Password = 'mriam811';
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;
			$mail->setFrom('loankernel@gmail.com', 'Tag Team');
			$mail->addAddress("$email");
			$mail->WordWrap = 50;
			$mail->isHTML(true);
			$mail->Subject = 'Wear Safe Alert.';
			$mail->Body    = 'You have gandu  successfully registered for <b>Tag-me-Not</b> Regards, Team Tag. ';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			if(!$mail->send()) {
			   echo 'Message could not be sent.';
			   echo 'Mailer Error: ' . $mail->ErrorInfo;
			   exit;
			}
*/
		}
	}
	return $gkey;

	

?>
