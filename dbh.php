<?php
$conn = mysqli_connect("localhost", "root", "", "login");

if (!$conn) {
	die("connection failed: ".mysqli_connect_error());
}
?>
