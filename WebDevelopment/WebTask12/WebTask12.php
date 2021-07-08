<!DOCTYPE html>
<?php
$cookie_name = "test";
$cookie_value = "35";
$expire = time() + (60 * 60 * 24 * 7);
setcookie($cookie_name, $cookie_value, $expire, "/"); // 86400 = 1 day
?>
<html>

<body>

    <?php
	if (isset($_COOKIE[$cookie_name])) {
		echo "Cookie '" . $cookie_name . "' is set!<br>";
		echo "Value is: " . $_COOKIE[$cookie_name];
	}
	?>
    <h1> Unset cookie</h1>
    <?php
	$cookie_name = "test";
	$cookie_value = "35";
	$expire = time() - 3600;
	setcookie($cookie_name, $cookie_value, $expire, "/");
	?>


    <br>
    <h1> enlist all cookies being set through this web page</h1>
    <?php
	setcookie("cookie[three]", "cookiethree");
	setcookie("cookie[two]", "cookietwo");
	setcookie("cookie[one]", "cookieone");

	// after the page reloads, print them out
	if (isset($_COOKIE['cookie'])) {
		foreach ($_COOKIE['cookie'] as $name => $value) {
			$name = htmlspecialchars($name);
			$value = htmlspecialchars($value);
			echo "$name : $value <br />\n";
		}
	}
	?>
</body>

</html>