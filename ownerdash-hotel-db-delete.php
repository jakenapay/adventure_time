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

		$sql1 = "SELECT * FROM `hotel` WHERE id='$id'";
		$result1 = mysqli_query($conn, $sql1);
		$row = mysqli_fetch_assoc($result1);

        if($row['id'] == $id){
            $sql = "DELETE FROM `hotel` WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            header("Location: ownerdash-hotel.php?log=Deleted Successfuly");
        }else{header("Location: ownerdash-hotel.php?log=No Hotel were deleted");}
		
?>