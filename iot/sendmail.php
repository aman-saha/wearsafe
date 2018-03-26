<?php 
	include("includes/functions.php");
	include("includes/config.inc.php");
?>
<?php
	
	$gkey = $_POST['Gkey'];

	$query = "SELECT email from usr_tbl WHERE key = '$gkey";
	$result = mysqli_query($conn,$query);

	if($result)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$email = $row['email'];
			require 'PHPMailer-master/PHPMailerAutoload.php';

			$mail = new PHPMailer;
			 
			$mail->isSMTP();                                      
			$mail->Host = 'smtp.gmail.com';                       
			$mail->SMTPAuth = true;                               
			$mail->Username = 'wear.safe.notify@gmail.com';
			$mail->Password = 'iotx1234';
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;
			$mail->setFrom('wear.safe.notify@gmail.com', 'Tag Team');
			$mail->addAddress("$email");
			$mail->WordWrap = 50;
			$mail->isHTML(true);                                  
			$fname = "WearSafe";
			$email = "wear.safe.notify@gmail.com"; 
			$mail->Subject = 'Emergency Alert';
			$mail->Body    = "Hello from".$fname." ".$email.". Distress button was pressed, kindly open the wearsafe application for location and further details.";
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';	

			if(!$mail->send()) {
			   echo 'Message could not be sent.';
			   echo 'Mailer Error: ' . $mail->ErrorInfo;
			   exit;
			}
			else
			{
				echo "Noicee";
			}
		}
	}

	

?>
