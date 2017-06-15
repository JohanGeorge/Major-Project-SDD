<?php
	include 'header.php';
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
	if(isset($_SESSION['id'])){
		if(isset($_SESSION['filedestination'])){
			echo "<img src='" . $_SESSION['filedestination'] . "' style='width:50px;height:50px;' alt='error'>" ;
		}else{echo "No image selected";
		}
	}
?>
</body>
</html>
