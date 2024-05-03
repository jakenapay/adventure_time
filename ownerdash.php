<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <title>Owner's Dashboard</title>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="css/admindash.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <i class='icon'><img src="assets\images\logo.png" alt="" class="logo_img"></i>
        <div class="logo_name">Adventure Time</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="ownerdash.php" class="a_button">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="ownerdash-admins.php" class="a_button">
         <i class='bx bx-user' ></i>
         <span class="links_name">Admins</span>
       </a>
       <span class="tooltip">Manage Admin accounts</span>
     </li>
     <li>
       <a href="ownerdash-hotel.php" class="a_button">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Manage</span>
       </a>
       <span class="tooltip">Manage hotels & rooms</span>
     </li>
     <li>
       <a href="ownerdash-reservation.php" class="a_button">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Reservations</span>
       </a>
       <span class="tooltip">Manage reservations</span>
     </li>
     <li>
      <a href="ownerdash-settings.php" class="a_button">
          <i class='bx bx-cog'></i>
          <span class="links_name">Account Settings</span>
      </a>
      <span class="tooltip">Change Password</span>
    </li>
     <li class="profile">
         <div class="profile-details">
           <!--<img src="profile.jpg" alt="profileImg">-->
           <div class="name_job">
             <div class="name"><?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?></div>
             <div class="job"><?php echo $_SESSION['position']; ?></div>
           </div>
         </div>
         <a href="adminlogout.php" class="a_logout"><i class='bx bx-log-out' id="log_out"></i></a>
         
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Dashboard</div>
      <div class="sub1">These are the current active admin(s)</div>
    <div class="bg-table" style="margin-bottom: 50px">
        <?php
            include "db_conn.php";
            $sql = "SELECT `id`, `firstname`, `lastname`, `username`, `position` FROM `admin`";
            $result = mysqli_query($conn, $sql);
            echo "<br>";
            echo "<table border='1' class='table table-success' id='table'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>First name</th>";
            echo "<th>Last name</th>";
            echo "<th>Username</th>";
            echo "<th>Position</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                foreach ($row as $field => $value) {
                    echo "<td class='row'>" . $value . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </div>
    <div class="sub1">These are the current active hotels</div>
      <div class="bg-table" style="margin-bottom: 50px">
        <?php
            include "db_conn.php";
            $sql = "SELECT `id`, `place`, `type`, `hotel-name`, `package`, `description`, `image`, `price` FROM `hotel`";
            $result = mysqli_query($conn, $sql);
            echo "<br>";
            echo "<table border='1' class='table table-success' id='table'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Place</th>";
            echo "<th>Type</th>";
            echo "<th>Hotel</th>";
            echo "<th>Package</th>";
            echo "<th>Price</th>";
            echo "<th>Description</th>";
            echo "<th>Image</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $place = $row['place'];
                $type = $row['type'];
                $hotel = $row['hotel-name'];
                $package = $row['package'];
                $price = $row['price'];
                $description = $row['description'];
                $image = $row['image'];

                echo 
                '<tr>
                  <td class="row">'.$id.'</td>
                  <td class="row">'.$place.'</td>
                  <td class="row">'.$type.'</td>
                  <td class="row">'.$hotel.'</td>
                  <td class="row">'.$package.'</td>
                  <td class="row">PHP '.$price.'</td>
                  <td class="row">'.$description.'</td>
                  <td class="row"><img src='.$image.' class="table-img"></td>
                </tr>';
            }
            echo "</table>";
        ?>
    </div>
    <div class="sub1">These are the current active hotels</div>
      <div class="bg-table" >
        <?php
            include "db_conn.php";
            $sql = "SELECT `id`, `name`, `email`, `number`, `place`, `hotel`, `promo`, `checkin`, `checkout` FROM `book`";
            $result = mysqli_query($conn, $sql);
            echo "<br>";
            echo "<table border='1' class='table table-success' id='table'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
            echo "<th>Email</th>";
            echo "<th>Number</th>";
            echo "<th>Place</th>";
            echo "<th>Hotel</th>";
            echo "<th>Promo</th>";
            echo "<th>Check-in</th>";
            echo "<th>Check-out</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $number = $row['number'];
                $place = $row['place'];
                $hotel = $row['hotel'];
                $promo = $row['promo'];
                $checkin = $row['checkin'];
                $checkout = $row['checkout'];

                echo 
                '<tr>
                  <td class="row">'.$id.'</td>
                  <td class="row">'.$name.'</td>
                  <td class="row">'.$email.'</td>
                  <td class="row">'.$number.'</td>
                  <td class="row">'.$place.'</td>
                  <td class="row">PHP '.$hotel.'</td>
                  <td class="row">'.$promo.'</td>
                  <td class="row">'.$checkin.'</td>
                  <td class="row">'.$checkout.'</td>
                </tr>';
            }
            echo "</table>";
        ?>
    </div>
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>

</html>

<?php 
}else{
    header("Location: admin.php");
    exit();
}
?>