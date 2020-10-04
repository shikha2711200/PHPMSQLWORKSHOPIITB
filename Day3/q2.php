
<?php

// DBSQL
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "day-03-q1";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

// UPDATE
$update = "SELECT * FROM result where name = 'Rohan'";
	$execute_query = mysqli_query($conn,$update);
	$upadted_dtails = $execute_query-> fetch_array(MYSQLI_ASSOC);


$total   =  $upadted_dtails['Subject1'] + $upadted_dtails['Subject2'] + $upadted_dtails['Subject3'] + $upadted_dtails['Subject4'] + 99;
$percentage = ($total/500)*100;
   
$update_query = "UPDATE result SET Subject5='99', Total_Marks_obtained=$total , Percentage=$percentage WHERE name='ROHAN'";
mysqli_query($conn,$update_query);


if (mysqli_num_rows($execute_query)>0)
{
   echo "<br>Updated upadted_dtailss<br> ";
   echo "<br>Name of student : ".$upadted_dtails['Name']." <br>";
   echo "Subject 1 ".$upadted_dtails['Subject1']." <br>";
   echo "Subject 2 ".$upadted_dtails['Subject2']." <br>";
   echo "Subject 3 ".$upadted_dtails['Subject3']." <br>";
   echo "Subject 4 ".$upadted_dtails['Subject4']." <br>";
   echo "Subject 5 ".$upadted_dtails['Subject5']." <br>";
   echo "Total Marks Obtained ".$upadted_dtails['Total_Marks_obtained']." <br>";
   echo "Total Marks ".$upadted_dtails['Total_Marks']." <br>";
   echo "Percentage ".$upadted_dtails['Percentage']." <br>";
   }
   else{
      echo "No such content in database";
   }
?>