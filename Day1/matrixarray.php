<?php
echo "<u>1].Array of Matrix</u>";
echo "<br>";

$a=array(array(10,20),array(4,15));

$b=array(array(5,10),array(15,20));

for ($i=0; $i <2 ; $i++) 
{ 
	
	for ($j=0; $j <2 ; $j++) 
	{ 
		echo $a[$i][$j]+$b[$i][$j]." ";
	}
	echo "<br>";
}
?>