<?php
	session_start();

	if(isset($_POST['submit'])){
		$file=$_FILES['file'];
		
		$filename = $file['name'];
		$filetmpname = $file['tmp_name'];
		$filesize = $file['size'];
		$fileerror = $file['error'];
		$filetype = $file['type'];
		
		$fileext = explode('.',$filename);
		$fileactualext = strtolower(end($fileext));
		
		$allowed = array('jpg', 'jpeg', 'png', 'pdf'); //allowed filetypes
		if(in_array($fileactualext, $allowed)){			//checks if the images filetype is allowed
			if($fileerror===0){							//checks if there is no error
				if($filesize<500000){					//checks if the file size is less than 500kB
					$filenamenew = uniqid('',true).".".$fileactualext;		//changes filename to 'unique id.extension'
					$filedestination = 'uploads/'.$filenamenew;				//sets file destination to 'uploads' folder with the file named with filenamenew
					move_uploaded_file($filetmpname, $filedestination);		//checks the filenames match and moves it to the new destination
					header("location: index.php?uploadsuccess");			//goes back to home page
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
	if(isset($filedestination)){
		$_SESSION['filedestination']=$filedestination;
	}else{echo "No image selected";}
?>
