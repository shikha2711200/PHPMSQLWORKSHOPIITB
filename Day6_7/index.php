<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Result</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<!-- HEADER -->
	<div style="margin-right:-0.4%;margin-left:-1%;">
		<iframe src="upperportion.html" frameborder="0" width="100%" height="110px" scrolling="yes" style="margin-top:-0.8%;"></iframe>
	</div>

	<div align="center">
		<br>
		<br>
		<span class="subhead">View Result</span>
		<br>
		<br>
		<br>
		<form method="post" action="viewResult.php">
			<table border="0" cellpadding="5" cellspacing="5" class="design">
				
				<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
				
				<tr><td class="labels">Roll No.:</td><td><input type="text" required="required" name="roll" class="fields" size="15" placeholder="Enter Roll No."></td></tr>
				
				<tr><td colspan="2" align="center"><input type="submit" value="SHOW" class="fields" /></td></tr>
			</table>
		</form>
		<br>
		<br>
		
		<a href="register.php" class="link">Student Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="faculty.php" class="link">Faculty Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="registerFaculty.php" class="link">Faculty Registration</a>
	</div>
</body>
</html>