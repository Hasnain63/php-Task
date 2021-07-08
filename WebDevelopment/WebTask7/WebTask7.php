<h1>Local and Global Scope</h1>
<?php

/*This function accepts a paramter which needs to multiplied with a global variable*/
function selfMultiply(&$number)
{
	$number *= $number;
	return $number;
}

$mynum = 5;
echo $mynum . "<br>"; // Outputs: 5

selfMultiply($mynum);
echo $mynum . "<br>"; // Outputs: 25
?>
<h1>Static Variables</h1>
<?php
/* This function has a number variable. Use Static variable power so that
	variable value stays in memory */

function printNumber()
{

	static $x = 0;
	echo $x;
	$x += 5;
}

printNumber();
echo "<br>";
printNumber();
echo "<br>";
printNumber();

?>
<hr>
<hr>