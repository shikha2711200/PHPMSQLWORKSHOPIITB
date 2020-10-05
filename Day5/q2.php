<!DOCTYPE html>
<html>
<head>
	<title></title> 
</head>
<body>
	<form action="q2_sending_email.php" method="POST">
		<table>
			<tr>
				<td>Name :</td>
				<td><input type="text" name="name" maxlength="20" required=""></td>
			</tr>
			<tr>
				<td>Email Id:</td>
				<td><input type="email" name="email" placeholder="Enter your email" required=""></td>
			</tr>
			<tr>
				<td>Feedback :</td>
				<td><textarea name="Feedback" placeholder="Feedback" required=""></textarea></td>
			</tr>
			<tr>
				<td><p><input type="submit" name="submit" value="send"></p></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php
	// submit
	$submit = $_POST['submit'];
	if ($submit)
	{
		// mailing
		require'PHPMailerAutoload.php';
    	$mail=new PHPMailer;

    	// declare
    	$name=$_POST['name'];
    	$email=$_POST['email'];
    	$Feedback=$_POST['Feedback'];
    	echo $name ."<br>" .$email."<br>".$Feedback;

    		try 
    		{
    			$mail->IsSMTP();
    			$mail->Host='smtp.gmail.com';
    			$mail->SMTPAuth = true;
      			$mail->Username = 'Your mail id';	// Gmail ID 
      			$mail->Password = 'enter your password';	// Gmail Password
      			$mail->SMTPSecure = 'tls';
      			$mail->Port = 587;

      			$mail->setFrom($email,$name);	// Email ID from which you want to send the email
      			$mail->addAddress('Your mail id');	// Recipient Email ID where you want to receive emails
      			$mail->addReplyto($email,$name);
      			$mail->isHTML(true);
      		
      			$mail->Subject = 'Form Submission';
      			$mail->Body = "<h3>Name : $name <br>Email : $email <br>Feedback : $Feedback</h3>";

      			$mail->send();
      			$output = '<div class="alert alert-success">
                  		<h5>Thankyou! for contacting us, We\'ll get back to you soon!</h5>
                		</div>';
            	    		
    		}
    		catch (Exception $e) 
    		{
    		  $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    		}
	}
?>