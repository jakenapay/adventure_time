<?php 
session_start(); 
include "db_conn.php";

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$oldpass = validate($_POST['oldpass']);
    $newpass1 = validate($_POST['newpass1']);
    $newpass2 = validate($_POST['newpass2']);
    $id = validate($_SESSION['id']);

    $sql1 = "SELECT * FROM `admin` WHERE id='$id'";
    $result1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($result1);
        
    if($newpass1 == $newpass2){
        if($oldpass == $row['password']){
            $sql = "UPDATE `admin` SET `password`='$newpass1' WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            header("Location: admindash-settings.php?error=Changed password");
        }else{
            header("Location: admindash-settings.php?error=Old password's unmatch please try again");
        }
    }else{
        header("Location: admindash-settings.php?error=Password's unmatch please try again");
    }
?>