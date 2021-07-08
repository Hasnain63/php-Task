<?php
session_start();
if (!isset($_SESSION['message'])) {
	header("location:login.php");
}
include "dbcon.php";
$select = "SELECT * FROM userinfo";
$query = mysqli_query($conn, $select);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <div class="w-100 p-4">
        <h1 class="text-center">Welcome to Dashboard</h1>
    </div>

</body>

</html>