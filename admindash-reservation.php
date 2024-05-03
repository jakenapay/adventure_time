<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <title>Admin's Dashboard</title>
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
        <a href="admindash.php" class="a_button">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
     <li>
       <a href="admindash-hotel.php" class="a_button">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Manage</span>
       </a>
       <span class="tooltip">Manage hotels & rooms</span>
     </li>
     <li>
       <a href="admindash-reservation.php" class="a_button">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Reservations</span>
       </a>
       <span class="tooltip">Reservations</span>
     </li>
     <li>
      <a href="admindash-settings.php" class="a_button">
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
  <div class="text">Reservations</div>
      <div class="sub1">These are the current active hotels</div>
      <div class="bg-table">
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
    
    <div class="sub2">Coordinate with the Hotel</div>
    <div class="addbox">
        <div class="sub3">Enter ID to complete reservation</div>
        <form action="admindash-reservation-db-delete.php" method="post">
            <div class="input">
                <input class="inputID" type="text" name="id" placeholder="Input ID of the reservation you want to be marked as done" style="width: 400px;"><button style="margin-bottom: 30px;" class="delete" type="submit">Done</button>
            </div>
            <?php if (isset($_GET['log'])) { ?>
                <p class="log"><?php echo $_GET['log']; ?></p>
            <?php } ?>
        </form> 
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