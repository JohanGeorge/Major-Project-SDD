<?php
	include 'header.php';

	if(isset($_SESSION['id'])){
		echo $_SESSION['id'];
	}else{
		echo "you are not logged in";
	}
?>
</br></br>
<?php
	if(isset($_SESSION['id'])){
		echo "<div id='signuperr'>You are already logged in!
			<form action='include/logout.inc.php'>
			<button type='submit'>LOG OUT</button>
			</form></div>";
	}else{
		echo "
			<div id='signup'>
			<div class='signupmsg'>Please insert your details into the appropriate fields below:</div>
			<form action='include/signup.inc.php'method='post'>
			<input name='first' type='text' size= '40' placeholder='First Name'>
			<input name='last' type='text' size= '40' placeholder='Last Name'>
			
			<div id='signup2'>
			<input name='uid' type='text' size= '40' placeholder='Username'>
			<input name='pwd' type='password' size= '40' placeholder='Password'></div>
			<div class='signupbtt'><button type='submit'>SIGN UP &rarr;</button></form></div>";
		}
?>
</body>
</html>
