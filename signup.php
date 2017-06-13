<?php
	include 'header.php';
?>


<?php
	if(isset($_SESSION['id'])){
		echo $_SESSION['id'];
	}else{
		echo "you are not logged in";
	}
?>
</br></br>
<?php
	if(isset($_SESSION['id'])){
		echo "You are already logged in!";
	}else{
		echo "<form action='include/signup.inc.php'method='post'>
			<input name='first' type='text' size= '40' placeholder='First Name'>
			<input name='last' type='text' size= '40' placeholder='Last Name'>			
			<input name='uid' type='text' size= '40' placeholder='Username'>
			<input name='pwd' type='password' size= '40' placeholder='Password'>
			<button type='submit'>SIGN UP &rarr;</button></form>";
		}
?>

	


</body>
</html>