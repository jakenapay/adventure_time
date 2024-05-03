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
      <div class="text">Manage</div>
      <div class="sub1">These are the current active hotels</div>
      <div class="bg-table">
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
    
    <div class="sub2">Add, Edit or Delete a Hotel</div>
    <div class="addbox">
        <div class="sub3">Enter ID to delete</div>
        <form action="ownerdash-hotel-db-delete.php" method="post">
            <div class="input">
                <input class="inputID" type="text" name="id" placeholder="Input ID of the Hotel you to want delete"><button class="delete" type="submit">Delete</button>
            </div>
            <?php if (isset($_GET['log'])) { ?>
                <p class="log"><?php echo $_GET['log']; ?></p>
            <?php } ?>
        </form> 
            
        <div class="editform">
            <form action="ownerdash-hotel-db-edit.php" method="post" enctype="multipart/form-data">
            <div class="sub4">Edit the information of Hotels</div><br>
            <div class="sub5">Tip: To edit, input the ID of the Hotel you want to edit.</div>
                <input class="inputHotel" type="text" name="id" placeholder="ID" autocomplete="off"><br><br>
                <select class="inputHotel"  name="place">
                  <option value="Batangas">Batangas</option>
                  <option value="Bohol">Bohol</option>
                  <option value="Cebu">Cebu</option>
                  <option value="Pangasinan">Pangasinan</option>
                  <option value="Siargao">Siargao</option>
                </select><br><br>
                <select class="inputHotel"  name="type">
                  <option value="Beach">Beach</option>
                  <option value="Mountain">Mountain</option>
                  <option value="Touristspot">Tourist Spot</option>
                  <option value="Inn">Inn</option>
                  <option value="Resort">Resort</option>
                </select><br><br>
                <input class="inputHotel" type="text" name="hotel-name" placeholder="Hotel Name" autocomplete="off"><br><br>
                <input class="inputHotel" type="text" name="package" placeholder="Package" autocomplete="off"><br><br>
                <input class="inputHotel" type="text" name="price" placeholder="Price" autocomplete="off"><br><br>
                <input class="inputHotel" type="text" name="description" placeholder="Description" autocomplete="off"><br><br>
                <input class="inputHotel" type="file" name="file" placeholder="" autocomplete="off">
                <br><br>
                <button class="edit" type="submit" name="submit">Edit</button>
            </form>
        </div>
        <div class="editform">
            <form action="ownerdash-hotel-db-add.php" method="post" enctype="multipart/form-data">
            <div class="sub4">Add a Hotel</div><br>
                <select class="inputHotel"  name="place">
                  <option value="Batangas">Batangas</option>
                  <option value="Bohol">Bohol</option>
                  <option value="Cebu">Cebu</option>
                  <option value="Pangasinan">Pangasinan</option>
                  <option value="Siargao">Siargao</option>
                </select><br><br>
                <select class="inputHotel"  name="type">
                  <option value="Beach">Beach</option>
                  <option value="Mountain">Mountain</option>
                  <option value="Touristspot">Tourist Spot</option>
                  <option value="Inn">Inn</option>
                  <option value="Resort">Resort</option>
                </select><br><br>
                <input class="inputHotel" type="text" name="hotel-name" placeholder="Hotel Name" autocomplete="off"><br><br>
                <input class="inputHotel" type="text" name="package" placeholder="Package" autocomplete="off"><br><br>
                <input class="inputHotel" type="text" name="price" placeholder="Price" autocomplete="off"><br><br>
                <input class="inputHotel" type="text" name="description" placeholder="Description" autocomplete="off"><br><br>
                <input class="inputHotel" type="file" name="file" placeholder="" autocomplete="off">
                <br><br>
                <button class="add" type="submit" name="submit">Add</button>
            </form>
        </div>
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