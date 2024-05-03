<?php 
class finalproj_inquiries{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="adventure";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function inquiries($data){
        $name=$data['name'];
        $email=$data['email'];
        $number=$data['number'];
		$subject=$data['subject'];
        $message=$data['message'];
        $q="insert into inquiries set name='$name', email='$email', number='$number', subject='$subject', message='$message'";
        return $this->mysqli->query($q);
       }
    }
?>