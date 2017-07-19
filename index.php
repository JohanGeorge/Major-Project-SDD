<?php
	include 'header.php';
	
	$conn = mysqli_connect("localhost", "root", "", "images");

	if (!$conn) {
		die("connection failed: ".mysqli_connect_error());
	}

	if(isset($_SESSION['id'])){
		//echo $_SESSION['id'];
		echo '<form action="upload.php" method="POST" enctype="multipart/form-data"> 
				<input type="file" name="file" >
				<input type="text" name="description" >
				<button type="submit" name="submit">UPLOAD</button>
				</form>';
	}else{
		echo "you are not logged in";
	}

	$sql = "SELECT filedestination,description FROM filedestinations";
	$query = mysqli_query($conn, $sql);
	if(mysqli_query($conn, $sql)){
		//output data from every row
		while($row = mysqli_fetch_assoc($query)){
			$image = "<img src='" . $row['filedestination'] . "' style='width:100px;height:100px;' alt='error'>" ;
			$desc = $row['description'];
			echo "<div class='post'>" . $image . $desc . "</div>";
		}
	}else{
		echo "Error displaying image";
		}
?>
	<div class='footer'>Email: newsletter@gmail.com</div>

</body>
</html>
