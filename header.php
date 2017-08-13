<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>School Newsletter</title>
		<link rel="stylesheet" type="text/css" href = "style.css">
	</head>
	<body>
		<header>
			<nav>
				<ul>
					<li><div class="icon"><img src="newicon.png" style="width: 50px; height: 50px;"></div></li>
					<li><a href="index.php">HOME</a></li>
					<li><?php
						if (isset($_SESSION['id'])) {
							echo "<form action='include/logout.inc.php'>\n" .
									"<button type='submit'>LOG OUT</button>\n" .
								"</form>";
						} else {
							echo "<form action='include/login.inc.php' method='post'>\n" .
									"<input name='uid' type='text' size='40' placeholder='Username'>\n" .
									"<input name='pwd' type='password' size='40' placeholder='Password'>\n" .
									"<button type='submit'>LOG IN &rarr;</button>\n" .
								"</form>";
						}
					?></li>
					<li><a href="signup.php">SIGNUP</a></li>
				</ul>
			</nav>
		</header>
