<?php 
session_start(); 
include "db_conn.php";

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$id = validate($_POST['id']);

		$sql1 = "SELECT * FROM `book` WHERE id='$id'";
		$result1 = mysqli_query($conn, $sql1);
		$row = mysqli_fetch_assoc($result1);

        if($row['id'] == $id){
            $sql = "DELETE FROM `book` WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            header("Location: admindash-reservation.php?log=Hotel Reserved");
        }else{header("Location: admindash-reservation.php?log=No reservation was seelcted");}
		
?>