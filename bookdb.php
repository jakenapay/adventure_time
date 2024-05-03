<?php 
class finalproj_book{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="adventure";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function book($data){
        $name=$data['name'];
        $email=$data['email'];
        $number=$data['number'];
		$place=$data['place'];
        $hotel=$data['hotel'];
        $promo=$data['promo'];
		$checkin=$data['checkin'];
        $checkout=$data['checkout'];
        
        $q="INSERT INTO `book`(`name`, `email`, `number`, `place`, `hotel`, `promo`, `checkin`, `checkout`) VALUES ('$name','$email','$number','$place','$hotel','$promo','$checkin','$checkout')";
        return $this->mysqli->query($q);
       }
    }
?>