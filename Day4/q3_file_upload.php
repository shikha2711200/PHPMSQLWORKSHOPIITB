<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Upload a File/photo</h1>
	<form action="q3_file_upload.php" method="POST" enctype="multipart/form-data">
		<br>
		<input type="file" name="myfile">
		<br><br>
		<input type="submit" value="Upload" name="Submit">
		<br>
		<?php

		// if (isset($_POST['Upload']))
		// {
			$name= $_FILES["file"]["name"];

			$type= $_FILES["myfile"]["type"];
			
			$size = $_FILES["myfile"]["size"];
			
			$temp = $_FILES["myfile"]["tmp_name"];
			
			$error = $_FILES["myfile"]["error"];	

			
		
		if ($error>0)
		 		{
					echo "<br>Error uploading file! Code".$error;
		 		}
		else
		 	{
		 		echo "<br>Upload :".$name;
		 		echo "<br>Type :" .$type;
		 		echo "<br>Size :" .$size;
		 		echo "<br>Temp File :" .$temp;

		 		if (file_exists("upload/" . $name))
		 			{
						echo $name."<br>already exists";
					}
				else
				{
					 move_uploaded_file($temp,"upload/$name");
					echo "<br>Stored in :","upload/$name";
					$img = $name;
					$img ="upload/$img";
					echo '<br><img src = "upload/$img">';
				}
		 	}
		?>	
		<br>
		<!-- <input type="reset" value="reset"> -->
	</form>
</body>
</html>
