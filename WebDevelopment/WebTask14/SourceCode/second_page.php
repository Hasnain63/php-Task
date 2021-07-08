<!DOCTYPE html>
<html>

<head>
    <title>User Submission Form via AJAX</title>
</head>

<body>
    <?php
	//Database connection
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$db = 'ajaxdemo';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

	//insert into database
	if (!empty($_POST)) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		mysqli_query($conn, "insert into users (name, email, message) values ('$name', '$email', '$message')");

		echo "	User information received";
	} else {
		echo "	Incomplete user information provided";
	}
	?>

</body>

</html>