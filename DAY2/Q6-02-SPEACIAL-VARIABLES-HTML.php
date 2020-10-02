<!DOCTYPE html>
<html>
<head>
	<title>Marksheet</title>
</head>
<body>
	<form action="Q6_2_marks.php" method="POST">
		<p style="font-variant: small-caps;font-size: 40px;"><caption>Student Marksheet Form</caption></p>
		<table style="width:60%;border-radius: 20px;padding: 20px;font-size:20px;border:5px solid black;">
			
			<tr style="font-variant: small-caps;">
				<td>Name Of Student<span style="color: red">*</span></td>
				<td><input type="text" name="S" placeholder="Enter name as per registered" style="width:130%;margin-left: -70%;" required=""></td>
			</tr>
			<tr style="font-variant: small-caps;">
				<td><b><br>Marks in Each Subject:</b></td>
			</tr>
			<tr style="font-variant: small-caps;">
				<td>Subject 1<span style="color: red">*</span></td>
				<td><td><input type="text" name="M1" placeholder="Enter marks" style="width: 50%;margin-left: -180%;" required=""></td></td>
			</tr>
			<tr style="font-variant: small-caps;">
				<td>Subject 2<span style="color: red">*</span></td>
				<td><td><input type="text" name="M2" placeholder="Enter marks" style="width: 50%;margin-left: -180%;" required=""></td></td>
			</tr>
			<tr style="font-variant: small-caps;">
				<td>Subject 3<span style="color: red">*</span></td>
				<td><td><input type="text" name="M3" placeholder="Enter marks" style="width: 50%;margin-left: -180%;" required=""></td></td>
			</tr>
			<tr style="font-variant: small-caps;">
				<td>Subject 4<span style="color: red">*</span></td>
				<td><td><input type="text" name="M4" placeholder="Enter marks" style="width: 50%;margin-left: -180%;" required=""></td></td>
			</tr>
			<tr style="font-variant: small-caps;">
				<td>Subject 5<span style="color: red">*</span></td>
				<td><td><input type="text" name="M5" placeholder="Enter marks" style="width: 50%;margin-left: -180%;" required=""></td></td>
			</tr>
			<tr>
				<td><input type="Submit" style="border-radius: 20px;width:80%;height:30px;font-size:20px;"></td>
			</tr>
			<tr>
				<td>
					<?php
						$name1=$_POST["S"];
						$marks1=$_POST["M1"];
						$marks2=$_POST["M2"];
						$marks3=$_POST["M3"];
						$marks4=$_POST["M4"];
						$marks5=$_POST["M5"];
						$total = $marks1 + $marks2 + $marks3 + $marks4 +$marks5;
						
						echo "<br>Name Of Student : $name1";
						echo "<br>Marks in Each Subject:";
						echo "<br>Subject 1:$marks1";
						echo "<br>Subject 2:$marks2";
						echo "<br>Subject 3:$marks3";
						echo "<br>Subject 4:$marks4";
						echo "<br>Subject 5:$marks5";
						echo "<br>Total Marks obtained : $total<br>";
						echo "Total Marks : 500<br>";
						$percentage = ($total/500)*100;
						echo "Percentage : $percentage";
						
					?>
				</td>
			</tr>
		</table>
	</form>


</body>
</html>
