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
		header("Location: admin.php?error=Admin's username is required");
	    exit();
	}else if(empty($pass)){
        header("Location: admin.php?error=Admin's password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM admin WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
				$owner = "Owner";
				if ($row['position'] === $owner){
					$_SESSION['username'] = $row['username'];
					$_SESSION['firstname'] = $row['firstname'];
					$_SESSION['lastname'] = $row['lastname'];
					$_SESSION['position'] = $row['position'];
					$_SESSION['id'] = $row['id'];
					header("Location: ownerdash.php");
					exit();
				}else{
					$_SESSION['username'] = $row['username'];
					$_SESSION['firstname'] = $row['firstname'];
					$_SESSION['lastname'] = $row['lastname'];
					$_SESSION['position'] = $row['position'];
					$_SESSION['id'] = $row['id'];
					header("Location: admindash.php");
					exit();
				}
            }else{
				header("Location: admin.php?error=Incorrect Username or password");
		        exit();
			}
		}else{
			header("Location: admin.php?error=Incorrect Username or password");
	        exit();
		}
	}
	
}else{
	header("Location: admin.php");
	exit();
}
?>