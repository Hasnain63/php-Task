<?php
/* Q.1 Write program to show desired output as following */

/* Use all conditional operators between $a and $b to display following Output. 
TEST1 : Either a or b is false 
TEST2 : Either a or b is false 
TEST3 : Either a or b is true 
TEST4 : Either a or b is true 
TEST5 : a is true  
TEST6 : b is true  
TEST7 : a is false 
TEST8 : b is false */
function conditionalOperators()
{
	$a = 42;
	$b = 0;

	if ($a && $b) {
		echo "TEST1 : Both a and b are true<br/>";
	} else {
		echo "TEST1 : Either a or b is false<br/>";
	}

	if ($a and $b) {
		echo "TEST2 : Both a and b are true<br/>";
	} else {
		echo "TEST2 : Either a or b is false<br/>";
	}

	if ($a || $b) {
		echo "TEST3 : Either a or b is true<br/>";
	} else {
		echo "TEST3 : Both a and b are false<br/>";
	}

	if ($a or $b) {
		echo "TEST4 : Either a or b is true<br/>";
	} else {
		echo "TEST4 : Both a and b are false<br/>";
	}

	$a = 10;
	$b = 20;

	if ($a) {
		echo "TEST5 : a is true <br/>";
	} else {
		echo "TEST5 : a  is false<br/>";
	}

	if ($b) {
		echo "TEST6 : b is true <br/>";
	} else {
		echo "TEST6 : b  is false<br/>";
	}

	if (!$a) {
		echo "TEST7 : a is true <br/>";
	} else {
		echo "TEST7 : a  is false<br/>";
	}

	if (!$b) {
		echo "TEST8 : b is true <br/>";
	} else {
		echo "TEST8 : b  is false<br/>";
	}
}


function numberInSingleLine()
{
	for ($x = 0; $x < 4; $x++) {
		if ($x < 4) {
			echo "$x";
		} else {
			echo "$x" . "\n";
		}
	}
}

function iterateVariables()
{
	for ($x = 0; $x < 10; $x++) {
		if ($x == 4) {
			continue;
		}
		if ($x == 6) {
			continue;
		}
		if ($x > 8) {
			break;
		}

		echo $x;
	}
}

echo "<h1>Conditional If-Else Task:</h1>";
conditionalOperators();

echo "<h1>Print Numbers Task:</h1>";
numberInSingleLine();

echo "<h1>Loop base Task:</h1>";
iterateVariables();