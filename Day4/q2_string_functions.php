<!DOCTYPE html>
<html>
<head>
	<title>String Functions</title>
</head>
<body>
	<form method="POST" action="q2_string_functions.php">
		<label>Enter the string : <input type="text" name="st"></label>
		<br><br>
		<label>Enter the Substring : <input type="text" name="ss"></label>
		<br><br>
		<input type="submit" >
	</form>
</body>
</html>
<?php
$string=$_POST['st'];

echo "<br>Enter the String :$string ";

$a= strlen($string);
echo "<br>1]Count number of Characters in the string : $a";

// $exparray =  explode(" ",$string);
// $newstring = implode($exparray, "/");
$b = print_r(str_split($string));
echo "<br>2] Breaking down a string into an array : $b";

$c = strrev($string);
echo "<br>3] Reverse the string : $c";

$d = strtolower($string);
echo "<br>4]Convert all alphabetic characters in string to their lower case form : $d";

$e = strtoupper($string);
echo "<br>5]Convert all alphabetic characters in string to their upper case form : $e";

$re1 = $_POST["st"];
$re2 = $_POST['ss'];
echo "<br><br>Enter the Substring :$re2";
$result = substr_replace($re2, $re1,0);
echo "<br>6]Declare a substring and replace the content of substring into original string : $result"
?>