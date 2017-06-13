<?php
	if(isset($_POST['submit'])){
		$file=$_FILES['file'];
		
		$filename = $file['name'];
		$filetmpname = $file['tmp_name'];
		$filesize = $file['size'];
		$fileerror = $file['error'];
		$filetype = $file['type'];
		
		$fileext = explode('.',$filename);
		$fileactualext = strtolower(end($fileext));
		
		$allowed = array('jpg', 'jpeg', 'png', 'pdf');
		if(in_array($fileactualext, $allowed)){
			if($fileerror===0){
				if($filesize<500000){
					$filenamenew = uniqid('',true).".".$fileactualext;
					$filedestination = 'uploads/'.$filenamenew;
					move_uploaded_file($filetmpname, $filedestination);
					header("location: index.php?uploadsuccess");
				}else{
					echo "The file is too big";
				}
			}else{
				echo "There was an error uploading the file";
			}
		}else{
			echo "You cannot upload files of this type";
		}
	}
	
	
	
?>