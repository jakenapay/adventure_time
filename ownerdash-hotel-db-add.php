<?php 
include "db_conn.php";

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    if(isset($_POST['submit'])){
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

        if(in_array($file_extension,$extension)){
            $upload_image='uploaded_img_file/'.$imagefilename;
            move_uploaded_file($imagefiletemp,$upload_image);
                $sql = "INSERT INTO `hotel`(`id`, `place`, `type`, `hotel-name`, `package`, `description`, `image`, `price`) VALUES ('','$place','$type','$hotelName','$package','$description','$upload_image','$price')";
                $result = mysqli_query($conn, $sql);
                header("Location: ownerdash-hotel.php?log=Added Successfuly");
        }else{header("Location: ownerdash-hotel.php?log=Wrong file, Please try again");}
    }

?>