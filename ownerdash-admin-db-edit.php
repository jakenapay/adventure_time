<?php 
session_start(); 
include "db_conn.php";

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$id = validate($_POST['ID']);
    $fname = validate($_POST['fname']);
    $lname = validate($_POST['lname']);
    $position = "Admin";
    $pass = "1234";

    $uname = strtolower(substr($fname,0,1).$lname);

		$sql1 = "SELECT * FROM `admin` WHERE id='$id'";
		$result1 = mysqli_query($conn, $sql1);
		$row = mysqli_fetch_assoc($result1);

		if($id >= 2){
			if($row['id'] == $id){
				$sql = "UPDATE `admin` SET `firstname`='$fname',`lastname`='$lname',`username`='$uname',`password`='$pass',`position`='$position' WHERE id='$id'";
				$result = mysqli_query($conn, $sql);
				header("Location: ownerdash-admins.php?log=Edited Successfuly");
			}else{header("Location: ownerdash-admins.php?log=No account were edited");}
		}else{
			header("Location: ownerdash-admins.php?log=You can't alter Owner's Information");
		}
		
?>