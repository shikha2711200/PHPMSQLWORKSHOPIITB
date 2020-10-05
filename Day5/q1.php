<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form action="q1_md5.php" enctype="multipart/form-data" method="POST">
	<table style="border:5px solid black;margin-left: 15%;padding:10px;">
		<tr>
			<td><h1 style="font-variant: small-caps;">Registration</h1></td>
		</tr>
		<tr>
			<td style="font-variant: small-caps;">Username<span style="color: red;">*</span>
			<input type="text" name="us" placeholder="Enter name" style="margin-left:3%;" required=""></td>
		</tr>
		<tr>
			<td style="font-variant: small-caps;">Password<span style="color: red;">*</span>
			<input type="password" name="ps" placeholder="Password" style="margin-left:3%;" required=""></td>
		</tr>
		<tr>
			<td><input type="submit"  name="submit"   value="submit" style="margin-left:5%;"></td>
		</tr>
		<tr>
			<td>
				<?php

				// Database configuration
				$host = "localhost";
				$dbusername = "root";
				$dbpassword = "";
				$dbname = "form";

				$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);   // Create connection

				// Check connection
				if ($conn->connect_error) 
				{
  					die("Connection failed: " . $conn->connect_error);
				}
				
				// submit
				$s=$_POST['submit'];
				if ($s)
				{
					// get data1
					$a=$_POST['us'];	// username declaration
					$b=$_POST['ps'];	// password declaration
					
					$c=md5($b);	// encrypt password

					$sql = "INSERT INTO data1(username,password)VALUES ('$a', '$c')";	// sql to insert table

					if ($conn->query($sql))
					{
						echo  $a. "<br>" .$c;
						echo "<br>Encrypted Password Added Successfull";

					}
					else
					{
						echo "Error: ". $sql ." ". $conn->error;
					}
				}
				else
				{
					die("<br>kindly give username and password");
				}
				

	
				

				
				$conn->close();
				?>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>