<?php 
session_start(); 
include "db_conn.php";

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $fname = validate($_POST['fname']);
    $lname = validate($_POST['lname']);
    $position = "Admin";
    $pass = "1234";
    $uname = strtolower(substr($fname,0,1).$lname);

		
	$sql = "INSERT INTO `admin`(`firstname`, `lastname`, `username`, `password`, `position`) VALUES ('$fname','$lname','$uname','$pass','$position')";
	mysqli_query($conn, $sql);
	header("Location: ownerdash-admins.php?log=Added Successfuly");

		
?>