<?php
	include 'header.php';
	
	$conn = mysqli_connect("localhost", "root", "", "images");

	if (!$conn) {
		die("connection failed: ".mysqli_connect_error());
	}

	if(isset($_SESSION['id'])){
		//echo $_SESSION['id'];
		echo '<div class="upload">	
				<form action="upload.php" method="POST" enctype="multipart/form-data"> 
				<h2>Select An Image To Upload:</h2></br>
				<input type="file" name="file" ></br></br>
				<h1 font-family:"georgia";>Description:</h1></br>
				<textarea cols="82"; rows="5"; type="text" name="description" style= "max-height:200px;height:auto"></textarea>
				<button type="submit" name="submit">UPLOAD</button>
				</form></div>';
	}
?>
<div class="stream">
	<?php 
	$sql = "SELECT filedestination,description,date FROM filedestinations ORDER BY id DESC";
	$query = mysqli_query($conn, $sql);
	if(mysqli_query($conn, $sql)){
		//output data from every row
		while($row = mysqli_fetch_assoc($query)){
			$image = "<img class='displayed' src='" . $row['filedestination'] . "' style='max-height:180px;max-width:240px;' alt='error' />" ;
			$desc = "<div class='desc'>" . $row['description'] . "</div>";
			$dt = new DateTime($row['date']);
			$date = $dt ->format('d-m-y');
			echo "<div class='post'>" . $image . $desc . $date . "</div>";
		}
	}else{
		echo "Error displaying image";
		}
	?>
</div>	
</body>
</html>
