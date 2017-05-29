<html>
<head>

</head>
<body>
	<?php
		$name = $_POST["name"];
		$number = $_POST["number"];
		$s = $_POST["s"];
		$r = $_POST["r"];
		$n = $_POST["n"];
		$a = 1+$r;
		$b = pow($a,$n);
		$c = $b - 1;
		$d = $c/$r;
		
		echo "Welcome ". $name;
		
		if ($number == 2){
			echo "You are correct " . $name;
			}else{
				echo "sorry but you're wrong. The number was 2";
			}
		
		echo "P = " . $s*$d;
		

	?>
</body>
</html>