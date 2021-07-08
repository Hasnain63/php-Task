<?php
function showVariableDataType() {
	
	$x = 3; $y = "hello"; $z = 5.67; $a= array(1,2);
	$result = is_int($y);
	if(is_int($x)) {
		echo "$x is integer";
	} else {
		echo "$x is not integer";
	}
	echo "<br>";
	
	if(is_string($y)) {
		echo "$y is String";
	} else {
		echo "$y is not String";
	}

	echo "<br>";
	
	if(is_float($z)) {
		echo "$z is Float";
	} else {
		echo "$z is not Float";
	}

	echo "<br>";
	
	if(is_array($a)) {
		// print_r($a);
		echo json_encode($a). 'is array';
	} else {
		print_r($a).'is not array';
	}




	/*
      Sample Output 
      $x is integer
      $y is string
      $z is Floating Point
      $a is an array */ 
}



function changeDataType() {
	//For changing Datatype of variable code should be in this function
	$x = 3; $y = "hello"; $z = 5.67; $a = array(1,2);
	var_dump($x);
	echo "<br>"; 

}

function typeCastVariables() {
	//For casting Variables code should be in this function

	$x = 3; $y = "hello"; $z = 5.67; $a = array(1,2); 
	echo "Before Typecasting <br>";
	var_dump($x); 
	
	echo "<br> After Typecasting <br>";
	$x = (string) 3;
	var_dump($x); 
}

echo showVariableDataType();
/*echo changeDataType();
echo typeCastVariables();*/

?>