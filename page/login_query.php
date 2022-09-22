<?php
	session_start();
	require '../admin/conn.php';
	
	if(ISSET($_POST['login'])){
		$userLogin = $_POST['stud_no'];
		$password = md5($_POST['password']);
		$select = $_POST['select'];

		if ($select == 'administrador') {
			$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `username` = '$userLogin' && `password` = '$password'") or die(mysqli_error());
			$fetch = mysqli_fetch_array($query);
			$row = $query->num_rows;
			if($row > 0){
				$_SESSION['user'] = $fetch['user_id'];
				$_SESSION['status'] = $fetch['status'];
				header("location:../admin/home.php");
			}else{
				echo "<center><label class='text-danger'>Contraseña o Usuario Incorrecto</label></center>";
			}
		} else if ($select == 'estudiante'){
			$query = mysqli_query($conn, "SELECT * FROM `student` WHERE `stud_no` = '$userLogin' && `password` = '$password'") or die(mysqli_error());
			$fetch = mysqli_fetch_array($query);
			$row = $query->num_rows;
			
			if($row > 0){
				$_SESSION['student'] = $fetch['stud_id'];
				header("location:../student_profile.php");
			}else{
				echo "<center><label class='text-danger'>Usuario o Contraseña Inconrecta</label></center>";
			}
		} else {
			echo "<center><label class='text-danger'>no existe el tipo de usuario</label></center>";
		}
		
		
	}
