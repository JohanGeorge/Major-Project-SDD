<?php
	session_start();
?>

<!Doctype html>
<html>
<head>
<title> 
School Newsletter
</title>


</head>
<body>


<form action="login.php" method="post">
	Log In </br></br>
	<input name="uid" type="text" size= "40" placeholder="Username"></br></br>

	<input name="pwd" type="password" size= "40" placeholder="Password">
	<button type="submit">LOG IN &rarr;</button>
</form></br>

<?php
	if(isset($_SESSION['id'])){
		echo $_SESSION['id'];
	}else{
		echo "you are not logged in";
	}
?>
</br></br>
<form action="process.php" method="post">
	Sign Up</br></br>
	<input name="first" type="text" size= "40" placeholder="First Name"></br></br>

	<input name="last" type="text" size= "40" placeholder="Last Name"></br></br>
	
	<input name="uid" type="text" size= "40" placeholder="Username"></br></br>

	<input name="pwd" type="password" size= "40" placeholder="Password">
	<button type="submit">SIGN UP &rarr;</button>
</form> </br></br></br>
<form action="logout.php">
	<button>LOG OUT</button>
</form>

</body>
</html>
