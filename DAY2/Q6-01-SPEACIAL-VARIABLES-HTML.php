<!DOCTYPE html>
<html>
<form action="q6_1_special_variables_html.php" method="GET">
   <input type="number"  name='X'  placeholder="Enter first side " ><br>
   <input type="number"  name='Y'  placeholder="Enter second side "  ><br>
   <input type="number"  name='Z'  placeholder="Enter  third side " ><br>
   <input type="Submit" side
="Answer"  >
</form>

</html>
<?php 
$side1 = $_GET['X'];
$side2 = $_GET['Y'];
$side3 = $_GET['Z'];
if($side1==$side2 && $side2==$side3 && $side1== $side3)
{
   echo "Triangle is Equilateral";
}
elseif($side1==$side2 || $side2==$side3 || $side1==$side3)
{
   echo " Triangle is Isoceles";
}
elseif(($side1*$side1+$side2*$side2== $side3*$side3)|| ($side3*$side3+$side2*$side2== $side1*$side1) || ($side1*$side1+$side3*$side3== $side2*$side2))
{
   echo "Right angle Triangle";
}
else
{
   echo "Triangle is Scalene";
}
?>