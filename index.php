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
<form action="upload.php" method="POST" enctype="multipart/form-data"> 
	<input type="file" name="file" >
	<button type="submit" name="submit">UPLOAD</button>

</form>

</body>
</html>
