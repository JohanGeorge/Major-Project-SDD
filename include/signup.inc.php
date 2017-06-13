<?php
	session_start();
		
		include '../dbh.php';
		$first = $_POST["first"];
		$last = $_POST["last"];
		$uid = $_POST["uid"];
		$pwd = $_POST["pwd"];
	
		echo $first."</br>";
		echo $last."</br>";
		echo $uid."</br>";
		echo $pwd."</br>";
		
		$sql = "INSERT INTO user (first,last,uid,pwd) 
		values('$first', '$last', '$uid', '$pwd')";
		$result = mysqli_query($conn, $sql);
	
	header("Location: ../index.php");
?>