<?php 
	/*Complete this function, it should return true in case of value is empty and false in case it is not empty*/
	function has_presense($value) {

		if(empty($value))
		{
			return true;
		}
		else
		{
			return false;
		}

	}
	/*Complete this function, it should return true in case value is greater than max length and false in case it is not greater than max length*/
	function has_max_length($value,$max) {

		if (strlen($value) > $max) {
			return true ;

		}
		else
		{
			return false;
		}

	}

?>