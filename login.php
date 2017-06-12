<?php
	session_start();
		
		include 'dbh.php';

		$uid = $_POST["uid"];
		$pwd = $_POST["pwd"];//receive login variables

		echo $uid."</br>";
		echo $pwd."</br>";//tests
		
		$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'"; //sql query that gets all data from user where...
		$result = mysqli_query($conn, $sql);//get data from database to check
	
		
		if(!$row = mysqli_fetch_assoc($result)){ 	//checks if there isn't a result
			echo "Your Username or Password is incorrect!";//test
			session_unset();//removes variables from previous session
		}else{
			$_SESSION['id'] = $row['id'];//sets variable as the id from the user result
		}

	header("Location: index.php"); //returns to index page
?>
