<html>
<head>
<title>Sum Calculator</title>
</head>
<body>
<form action="sumcalculator.php" method="post">

<h1>Sum Calculator</h1>


<lable for="number1">Enter number 1:</lable>
<input type=number name="inner1" id="inner1"/>
<br><br>
<lable for="number2">Enter number 2:</lable>
<input type=number name="inner2" id="inner2"/>
<br><br>

<input type=submit name="button" id="button" style="font-size:25px" value="Calculate Sum">
<br><br>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$num1=$_POST["inner1"];
		$num2=$_POST["inner2"];
		$sum=$num1+$num2;
		
		echo "<h4>The Sum of $num1 and $num2 is: $sum </h4>";
}

	
?>

</body>
</html>

