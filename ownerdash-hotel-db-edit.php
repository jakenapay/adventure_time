<?php 
include "db_conn.php";

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    if(isset($_POST['submit'])){
        $id = validate($_POST['id']);
        $place = validate($_POST['place']);
        $type = validate($_POST['type']);
        $hotelName = validate($_POST['hotel-name']);
        $package = validate($_POST['package']);
        $price = validate($_POST['price']);
        $description = validate($_POST['description']);
        $image=$_FILES['file'];

        $imagefilename=$image['name'];
        $imagefileerror=$image['error'];
        $imagefiletemp=$image['tmp_name'];

        $filename_separate=explode('.', $imagefilename);
        $file_extension=strtolower(end($filename_separate));

        $extension=array('jpeg','jpg','png');

        $sql1 = "SELECT * FROM `hotel` WHERE id='$id'";
        $result1 = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_assoc($result1);



        if(in_array($file_extension,$extension)){
            $upload_image='uploaded_img_file/'.$imagefilename;
            move_uploaded_file($imagefiletemp,$upload_image);

            if($row['id'] == $id){
                $sql = "UPDATE `hotel` SET `place`='$place',`type`='$type',`hotel-name`='$hotelName',`package`='$package',`price`='$price',`description`='$description',`image`='$upload_image' WHERE id='$id'";
                $result = mysqli_query($conn, $sql);
                header("Location: ownerdash-hotel.php?log=Edited Successfuly");
            }else{header("Location: ownerdash-hotel.php?log=No Hotel were edited");}
        }else{header("Location: ownerdash-hotel.php?log=Wrong file, Please try again");}
    }

?>