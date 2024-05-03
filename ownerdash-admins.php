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
    <script src="script\ownerdash-admins.js"></script>

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
    <div class="text">Manage Admin Accounts</div>
    <div class="sub1">These are the current active admin(s)</div>
    <div class="bg-table">
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
    <div class="sub2">Add, Edit or Delete an Admin</div>
    <div class="addbox">
        <div class="sub3">Enter ID to delete</div>
        <form action="ownerdash-admin-db-delete.php" method="post">
            <div class="input">
                <input class="inputID" type="text" name="id" placeholder="Input ID of individual you to want delete"><button class="delete" type="submit">Delete</button>
            </div>
            <?php if (isset($_GET['log'])) { ?>
                <p class="log"><?php echo $_GET['log']; ?></p>
            <?php } ?>
        </form> 
            
        <div class="editform">
            <form action="ownerdash-admin-db-edit.php" method="post">
            <div class="sub4">Edit an Admin</div><br>
            <div class="sub5">Tip: To edit, input the ID of an individual you want to edit.</div>
                <input class="inputID1" type="text" name="ID" placeholder="ID">
                <input class="inputID2" type="text" name="fname" placeholder="Firstname">
                <input class="inputID2" type="text" name="lname" placeholder="Lastname">
                <br><br>
                <button class="edit" type="submit">Edit</button>
            </form>
        </div>
        <div class="editform">
            <form action="ownerdash-admin-db-add.php" method="post">
            <div class="sub4">Add an Admin</div><br>
            <div class="sub5">Tip: Default password for Admins is 1234.</div>
                <input class="inputID1" type="text" name="fname" placeholder="Firstname">
                <input class="inputID2" type="text" name="lname" placeholder="Lastname">
                <br><br>
                <button class="add" type="submit">Add</button>
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
    menuBtnChange();
});

searchBtn.addEventListener("click", ()=>{ 
    sidebar.classList.toggle("open");
    menuBtnChange();
});


function menuBtnChange() {
if(sidebar.classList.contains("open")){
    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
}else {
    closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
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