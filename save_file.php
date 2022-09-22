<?php
	require_once 'admin/conn.php';
	
	if(ISSET($_POST['save'])){
		$stud_no = $_POST['stud_no'];
		$carpeta = $_POST['carpeta'];
		$file_name = $_FILES['file']['name'];
		$file_type = $_FILES['file']['type'];
		$file_temp = $_FILES['file']['tmp_name'];
		if  (strlen($carpeta)==0){
			$carpeta='default';
		}
		$location = "files/".$stud_no.'/'.$carpeta."/".$file_name;
		$date = date("Y-m-d, h:i A", strtotime("+8 HOURS"));
		if(!file_exists("files/".$stud_no)){
			mkdir("files/".$stud_no);
		}
		if(!file_exists("files/".$stud_no.'/'.$carpeta)){
			mkdir("files/".$stud_no.'/'.$carpeta);
		}
		if(move_uploaded_file($file_temp, $location)){
			mysqli_query($conn, "INSERT INTO `storage` VALUES('', '$file_name', '$file_type', '$date', '$stud_no','$location')") or die(mysqli_error());
			header('location: student_profile.php');
		}
	}
?>