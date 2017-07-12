<?php
	include 'header.php';
	
	$conn = mysqli_connect("localhost", "root", "", "images");

	if (!$conn) {
		die("connection failed: ".mysqli_connect_error());
	}
?>
<?php
	if(isset($_SESSION['id'])){
		echo $_SESSION['id'];
		echo '<form action="upload.php" method="POST" enctype="multipart/form-data"> 
				<input type="file" name="file" >
				<button type="submit" name="submit">UPLOAD</button>
				</form>';
	}else{
		echo "you are not logged in";
	}
?>
<?php
	$sql = "SELECT filedestination FROM filedestinations";
	$query = mysqli_query($conn, $sql);
	if(mysqli_query($conn, $sql)){
		//output data from every row
		while($row = mysqli_fetch_assoc($query)){
			echo "<img src='" . $row['filedestination'] . "' style='width:50px;height:50px;' alt='error'>" ;
		}
	}else{
		echo "Error displaying image";
		}
?>

</body>
</html>
