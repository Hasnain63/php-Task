<h1>PHP Arrays Functions</h1>
<?php
/*This function accepts a paramter which needs to Output following
		Total Items in array : 10
		Maximum element in array : 100
		Minimum element in array: 1
		Sorted Array ( Ascending Order )
		Sorted Array ( Descending Order )
		Sum Of Array : 
		String : 1 * 23 * 43 * 54 * 51 * 65 * 73 * 82 * 91 * 100
	*/

function performArrayFunctions($arr)
{
	echo "Total Items in array :" . count($arr) . "<br>";
	echo "	Maximum element in array :" . 	max($arr) . "<br>";
	echo "Minimum element in array :" . min($arr) . "<br>";

	$numerals = array($arr);
	sort($numerals);
	print_r($numerals);
	echo "<br>";
	echo "	Sum Of Array:" . array_sum($arr) . "<br>";
	echo "String :" . implode(" ", $arr) . "<br>";
}
$arr = [1, 23, 43, 54, 51, 65, 73, 82, 91, 100]; // global scope
performArrayFunctions($arr); // outputs as described in the doc
?>
<hr>
<h1>PHP String Functions</h1>
<?php
/*This function accepts a paramter which needs to Output following
		Extracted String = 
		String Length =
		Upper Case String =
		Lower Case String = 
		First Letter Uppercase of Sentence =
		First Letter Uppercase of each word = 
	*/

function performStringFunctions($str)
{
	echo	"	String Length is =" . strlen($str) . "<br>";
	echo	"	Upper Case String=" . strtoupper($str) . "<br>";
	echo	"	Lower Case String=" . strtolower($str) . "<br>";
	echo	"	First Letter Uppercase of Sentence=" . lcfirst($str) . "<br>";
	echo	"	First Letter Uppercase of each word=" . ucwords($str) . "<br>";
}
$str = "The quick brown fox jumped over the lazy dog";
performStringFunctions($str);

?>
<hr>
<hr>