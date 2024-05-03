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
    <div class="text">Change your password</div>

    <div class="change">
        <form action="ownerdash-settings-db-changepass.php" method="post">
            <input class="inputPass" type="password" name="oldpass" placeholder="Old Password"><br><br>
            <input class="inputPass1" type="password" name="newpass1" placeholder="New Password"><br><br>
            <input class="inputPass1" type="password" name="newpass2" placeholder="Confirm Password"><br><br>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <button class="change-pass" type="submit">Change Password</button>
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