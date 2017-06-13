<?php
	session_start();
?>

<!Doctype html>
<html>
<head>
<title> 
School Newsletter
</title>
<link rel="stylesheet" type="text/css" href = "style.css">

</head>
<body>

<header>
	<nav>
		<ul>
			<li><a href="index.php">HOME</a></li>
				<?php
					if(isset($_SESSION['id'])){
						echo "<form action='include/logout.inc.php'>
							<button>LOG OUT</button>
						</form>";
					}else{
						echo "<form action='include/login.inc.php' method='post'>
						<input name='uid' type='text' size= '40' placeholder='Username'>
						<input name='pwd' type='password' size= '40' placeholder='Password'>
						<button type='submit'>LOG IN &rarr;</button>
						</form>";
					}
				?>
			<li><a href="signup.php">SIGNUP</a></li>
		</ul>
	</nav>

</header>