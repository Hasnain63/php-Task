<!DOCTYPE html>
<html>

<head>
    <title>Date Time Objects</title>
</head>

<body>
    <h2>Date Time Objects</h2>
    <?php

	echo "Time stamp in seconds" . "<br>";
	echo time() . "<br>"; // This is a current unix timestamp
	// echo strtotime("last Monday")."<br>";

	//Write a Datetime format of current time like this Y-m-d H:i:s ( For example 2019-10-25 12:47:44 )

	$date  = date_create("2019-10-25");

	$ti = mktime(10, 3, 2019);
	echo $ti + 900  . "<br>";


	echo date("Y-m-d m:i:s") . "<br>";


	function addMinutesToTime($time, $plusMinutes)
	{
		return $time + $plusMinutes;

		// $time = DateTime::createFromFormats( 'H:i:s', $time );
	}

	$adjustedTime = addMinutesToTime(mktime(10, 3, 2019), 900);
	// $endTime = strtotime("+15 minutes",strtotime($adjustedTime));
	echo $adjustedTime . "<br>";
	// echo $endTime."<br>";

	echo time() + 900;


	?>

</body>

</html>