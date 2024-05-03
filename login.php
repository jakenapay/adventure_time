<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: loginpage.php?error=UserName is required");
	    exit();
	}else if(empty($pass)){
        header("Location: loginpage.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM register WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['firstname'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: loginpage.php?error=Incorrect Username or password");
		        exit();
			}
		}else{
			header("Location: loginpage.php?error=Incorrect Username or password");
	        exit();
		}
	}
	
}else{
	header("Location: loginpage.php");
	exit();
}