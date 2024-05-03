<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>
<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADVENTURE TIME</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet"type="text/css" href="css/ps.css">

    <link rel="stylesheet" href="css/jquery-ui.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><span class="adventure">Adventure</span><span class="Time">Time</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="wrapper">
<header>
    <img src="assets\images\panggasinan-parallax\Background.png" class="background">
    <img src="assets\images\panggasinan-parallax\Foreground.png" class="foreground">
    <h1 class="title">Pangasinan</h1>
</header>

<section class="">
    <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(69, 85, 27, 1)" offset="0%"></stop><stop stop-color="rgba(194.883, 207.508, 161.745, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,90L10,90C20,90,40,90,60,76.7C80,63,100,37,120,25C140,13,160,17,180,30C200,43,220,67,240,73.3C260,80,280,70,300,63.3C320,57,340,53,360,55C380,57,400,63,420,66.7C440,70,460,70,480,70C500,70,520,70,540,65C560,60,580,50,600,41.7C620,33,640,27,660,35C680,43,700,67,720,75C740,83,760,77,780,71.7C800,67,820,63,840,65C860,67,880,73,900,66.7C920,60,940,40,960,36.7C980,33,1000,47,1020,56.7C1040,67,1060,73,1080,63.3C1100,53,1120,27,1140,15C1160,3,1180,7,1200,13.3C1220,20,1240,30,1260,36.7C1280,43,1300,47,1320,51.7C1340,57,1360,63,1380,70C1400,77,1420,83,1430,86.7L1440,90L1440,100L1430,100C1420,100,1400,100,1380,100C1360,100,1340,100,1320,100C1300,100,1280,100,1260,100C1240,100,1220,100,1200,100C1180,100,1160,100,1140,100C1120,100,1100,100,1080,100C1060,100,1040,100,1020,100C1000,100,980,100,960,100C940,100,920,100,900,100C880,100,860,100,840,100C820,100,800,100,780,100C760,100,740,100,720,100C700,100,680,100,660,100C640,100,620,100,600,100C580,100,560,100,540,100C520,100,500,100,480,100C460,100,440,100,420,100C400,100,380,100,360,100C340,100,320,100,300,100C280,100,260,100,240,100C220,100,200,100,180,100C160,100,140,100,120,100C100,100,80,100,60,100C40,100,20,100,10,100L0,100Z"></path></svg>
    
    <div class="beach">
        <div class="beach-title fs-1 fw-bolder">
            Hotels near beaches in Pangasinan
        </div>
        <?php
            include "db_conn.php";
            $sql = "SELECT `id`, `place`, `type`, `hotel-name`, `package`, `description`, `image`, `price` FROM `hotel` WHERE place='Pangasinan' AND type='Beach'";
            $result = mysqli_query($conn, $sql);
            echo'<div class="row row-cols-1 row-cols-md-3 g-4">';
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $place = $row['place'];
                $type = $row['type'];
                $hotel = $row['hotel-name'];
                $package = $row['package'];
                $price = $row['price'];
                $description = $row['description'];
                $image = $row['image'];

                echo    '<div class="col">
                            <div class="card h-100">
                            <img src='.$image.' class="card-img-top img-card1">
                                <div class="card-body">
                                    <h5 class="card-title fw-bolder">'.$hotel.'</h5>
                                    <p class="card-text">'.$package.'</p>
                                    <p class="card-text">'.$description.'</p>
                                    <p class="card-text">PHP '.$price.'/Night</p>
                                </div>
                            </div>
                        </div>';
            }
            echo '</div>';
        ?>
    </div>
    <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(69, 85, 27, 1)" offset="0%"></stop><stop stop-color="rgba(194.883, 207.508, 161.745, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,20L10,31.7C20,43,40,67,60,65C80,63,100,37,120,35C140,33,160,57,180,65C200,73,220,67,240,65C260,63,280,67,300,66.7C320,67,340,63,360,55C380,47,400,33,420,26.7C440,20,460,20,480,31.7C500,43,520,67,540,75C560,83,580,77,600,66.7C620,57,640,43,660,45C680,47,700,63,720,65C740,67,760,53,780,46.7C800,40,820,40,840,46.7C860,53,880,67,900,68.3C920,70,940,60,960,51.7C980,43,1000,37,1020,33.3C1040,30,1060,30,1080,28.3C1100,27,1120,23,1140,26.7C1160,30,1180,40,1200,38.3C1220,37,1240,23,1260,30C1280,37,1300,63,1320,65C1340,67,1360,43,1380,33.3C1400,23,1420,27,1430,28.3L1440,30L1440,100L1430,100C1420,100,1400,100,1380,100C1360,100,1340,100,1320,100C1300,100,1280,100,1260,100C1240,100,1220,100,1200,100C1180,100,1160,100,1140,100C1120,100,1100,100,1080,100C1060,100,1040,100,1020,100C1000,100,980,100,960,100C940,100,920,100,900,100C880,100,860,100,840,100C820,100,800,100,780,100C760,100,740,100,720,100C700,100,680,100,660,100C640,100,620,100,600,100C580,100,560,100,540,100C520,100,500,100,480,100C460,100,440,100,420,100C400,100,380,100,360,100C340,100,320,100,300,100C280,100,260,100,240,100C220,100,200,100,180,100C160,100,140,100,120,100C100,100,80,100,60,100C40,100,20,100,10,100L0,100Z"></path></svg>
    <div class="mountain">
        <div class="beach-title fs-1 fw-bolder text-white">
            Activities near Mountain tourist spots in Pangasinan
        </div>
        <?php
            include "db_conn.php";
            $sql = "SELECT `id`, `place`, `type`, `hotel-name`, `package`, `description`, `image`, `price` FROM `hotel` WHERE place='Pangasinan' AND type='Mountain'";
            $result = mysqli_query($conn, $sql);
            echo'<div class="row row-cols-1 row-cols-md-3 g-4">';
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $place = $row['place'];
                $type = $row['type'];
                $hotel = $row['hotel-name'];
                $package = $row['package'];
                $price = $row['price'];
                $description = $row['description'];
                $image = $row['image'];

                echo    '<div class="col">
                            <div class="card h-100">
                            <img src='.$image.' class="card-img-top img-card1">
                                <div class="card-body">
                                    <h5 class="card-title fw-bolder">'.$hotel.'</h5>
                                    <p class="card-text">'.$package.'</p>
                                    <p class="card-text">'.$description.'</p>
                                    <p class="card-text">PHP '.$price.'/Head</p>
                                </div>
                            </div>
                        </div>';
            }
            echo '</div>';
        ?>
    </div>
    <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(69, 85, 27, 1)" offset="0%"></stop><stop stop-color="rgba(194.883, 207.508, 161.745, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,40L10,43.3C20,47,40,53,60,51.7C80,50,100,40,120,36.7C140,33,160,37,180,40C200,43,220,47,240,41.7C260,37,280,23,300,15C320,7,340,3,360,13.3C380,23,400,47,420,60C440,73,460,77,480,75C500,73,520,67,540,58.3C560,50,580,40,600,40C620,40,640,50,660,50C680,50,700,40,720,33.3C740,27,760,23,780,31.7C800,40,820,60,840,65C860,70,880,60,900,48.3C920,37,940,23,960,18.3C980,13,1000,17,1020,18.3C1040,20,1060,20,1080,30C1100,40,1120,60,1140,56.7C1160,53,1180,27,1200,23.3C1220,20,1240,40,1260,53.3C1280,67,1300,73,1320,68.3C1340,63,1360,47,1380,43.3C1400,40,1420,50,1430,55L1440,60L1440,100L1430,100C1420,100,1400,100,1380,100C1360,100,1340,100,1320,100C1300,100,1280,100,1260,100C1240,100,1220,100,1200,100C1180,100,1160,100,1140,100C1120,100,1100,100,1080,100C1060,100,1040,100,1020,100C1000,100,980,100,960,100C940,100,920,100,900,100C880,100,860,100,840,100C820,100,800,100,780,100C760,100,740,100,720,100C700,100,680,100,660,100C640,100,620,100,600,100C580,100,560,100,540,100C520,100,500,100,480,100C460,100,440,100,420,100C400,100,380,100,360,100C340,100,320,100,300,100C280,100,260,100,240,100C220,100,200,100,180,100C160,100,140,100,120,100C100,100,80,100,60,100C40,100,20,100,10,100L0,100Z"></path></svg>
    <div class="beach">
        <div class="beach-title fs-1 fw-bolder">
            Hotels near Tourist spots in Pangasinan
        </div>
        <?php
            include "db_conn.php";
            $sql = "SELECT `id`, `place`, `type`, `hotel-name`, `package`, `description`, `image`, `price` FROM `hotel` WHERE place='Pangasinan' AND type='Touristspot'";
            $result = mysqli_query($conn, $sql);
            echo'<div class="row row-cols-1 row-cols-md-3 g-4">';
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $place = $row['place'];
                $type = $row['type'];
                $hotel = $row['hotel-name'];
                $package = $row['package'];
                $price = $row['price'];
                $description = $row['description'];
                $image = $row['image'];

                echo    '<div class="col">
                            <div class="card h-100">
                            <img src='.$image.' class="card-img-top img-card1">
                                <div class="card-body">
                                    <h5 class="card-title fw-bolder">'.$hotel.'</h5>
                                    <p class="card-text">'.$package.'</p>
                                    <p class="card-text">'.$description.'</p>
                                    <p class="card-text">PHP '.$price.'/Night</p>
                                </div>
                            </div>
                        </div>';
            }
            echo '</div>';
        ?>
    </div>
    <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(69, 85, 27, 1)" offset="0%"></stop><stop stop-color="rgba(194.883, 207.508, 161.745, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,80L10,73.3C20,67,40,53,60,41.7C80,30,100,20,120,28.3C140,37,160,63,180,76.7C200,90,220,90,240,85C260,80,280,70,300,65C320,60,340,60,360,60C380,60,400,60,420,51.7C440,43,460,27,480,31.7C500,37,520,63,540,70C560,77,580,63,600,58.3C620,53,640,57,660,58.3C680,60,700,60,720,50C740,40,760,20,780,13.3C800,7,820,13,840,18.3C860,23,880,27,900,23.3C920,20,940,10,960,5C980,0,1000,0,1020,15C1040,30,1060,60,1080,75C1100,90,1120,90,1140,85C1160,80,1180,70,1200,65C1220,60,1240,60,1260,50C1280,40,1300,20,1320,15C1340,10,1360,20,1380,35C1400,50,1420,70,1430,80L1440,90L1440,100L1430,100C1420,100,1400,100,1380,100C1360,100,1340,100,1320,100C1300,100,1280,100,1260,100C1240,100,1220,100,1200,100C1180,100,1160,100,1140,100C1120,100,1100,100,1080,100C1060,100,1040,100,1020,100C1000,100,980,100,960,100C940,100,920,100,900,100C880,100,860,100,840,100C820,100,800,100,780,100C760,100,740,100,720,100C700,100,680,100,660,100C640,100,620,100,600,100C580,100,560,100,540,100C520,100,500,100,480,100C460,100,440,100,420,100C400,100,380,100,360,100C340,100,320,100,300,100C280,100,260,100,240,100C220,100,200,100,180,100C160,100,140,100,120,100C100,100,80,100,60,100C40,100,20,100,10,100L0,100Z"></path></svg>
    <div class="mountain">
        <div class="beach-title fs-1 fw-bolder text-white">
            Traveller's Inn located in Pangasinan
        </div>
        <?php
            include "db_conn.php";
            $sql = "SELECT `id`, `place`, `type`, `hotel-name`, `package`, `description`, `image`, `price` FROM `hotel` WHERE place='Pangasinan' AND type='Inn'";
            $result = mysqli_query($conn, $sql);
            echo'<div class="row row-cols-1 row-cols-md-3 g-4">';
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $place = $row['place'];
                $type = $row['type'];
                $hotel = $row['hotel-name'];
                $package = $row['package'];
                $price = $row['price'];
                $description = $row['description'];
                $image = $row['image'];

                echo    '<div class="col">
                            <div class="card h-100">
                            <img src='.$image.' class="card-img-top img-card1">
                                <div class="card-body">
                                    <h5 class="card-title fw-bolder">'.$hotel.'</h5>
                                    <p class="card-text">'.$package.'</p>
                                    <p class="card-text">'.$description.'</p>
                                    <p class="card-text">PHP '.$price.'/Night</p>
                                </div>
                            </div>
                        </div>';
            }
            echo '</div>';
        ?>
    </div>
    <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(69, 85, 27, 1)" offset="0%"></stop><stop stop-color="rgba(194.883, 207.508, 161.745, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,10L10,13.3C20,17,40,23,60,21.7C80,20,100,10,120,20C140,30,160,60,180,66.7C200,73,220,57,240,51.7C260,47,280,53,300,58.3C320,63,340,67,360,66.7C380,67,400,63,420,65C440,67,460,73,480,71.7C500,70,520,60,540,55C560,50,580,50,600,41.7C620,33,640,17,660,21.7C680,27,700,53,720,63.3C740,73,760,67,780,58.3C800,50,820,40,840,43.3C860,47,880,63,900,65C920,67,940,53,960,50C980,47,1000,53,1020,53.3C1040,53,1060,47,1080,48.3C1100,50,1120,60,1140,56.7C1160,53,1180,37,1200,26.7C1220,17,1240,13,1260,23.3C1280,33,1300,57,1320,56.7C1340,57,1360,33,1380,25C1400,17,1420,23,1430,26.7L1440,30L1440,100L1430,100C1420,100,1400,100,1380,100C1360,100,1340,100,1320,100C1300,100,1280,100,1260,100C1240,100,1220,100,1200,100C1180,100,1160,100,1140,100C1120,100,1100,100,1080,100C1060,100,1040,100,1020,100C1000,100,980,100,960,100C940,100,920,100,900,100C880,100,860,100,840,100C820,100,800,100,780,100C760,100,740,100,720,100C700,100,680,100,660,100C640,100,620,100,600,100C580,100,560,100,540,100C520,100,500,100,480,100C460,100,440,100,420,100C400,100,380,100,360,100C340,100,320,100,300,100C280,100,260,100,240,100C220,100,200,100,180,100C160,100,140,100,120,100C100,100,80,100,60,100C40,100,20,100,10,100L0,100Z"></path></svg>
    <div class="resort">
        <div class="beach-title fs-1 fw-bolder">
            Resorts located in Pangasinan
        </div>
        <?php
            include "db_conn.php";
            $sql = "SELECT `id`, `place`, `type`, `hotel-name`, `package`, `description`, `image`, `price` FROM `hotel` WHERE place='Pangasinan' AND type='Resort'";
            $result = mysqli_query($conn, $sql);
            echo'<div class="row row-cols-1 row-cols-md-3 g-4">';
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $place = $row['place'];
                $type = $row['type'];
                $hotel = $row['hotel-name'];
                $package = $row['package'];
                $price = $row['price'];
                $description = $row['description'];
                $image = $row['image'];

                echo    '<div class="col">
                            <div class="card h-100">
                            <img src='.$image.' class="card-img-top img-card1">
                                <div class="card-body">
                                    <h5 class="card-title fw-bolder">'.$hotel.'</h5>
                                    <p class="card-text">'.$package.'</p>
                                    <p class="card-text">'.$description.'</p>
                                    <p class="card-text">PHP '.$price.'</p>
                                </div>
                            </div>
                        </div>';
            }
            echo '</div>';
        ?>
    </div>
</section>

<section class="brand-container"> 
    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="assets/images/1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/6.jpg" alt=""></div>
        </div>
    </div>
</section>
    
<section class="footer" id="footer">
    
    <div class="box-container ">

        <div class="box">
            <h3>About us</h3>
            <p>Adventure Time is a travel agency based here in the philippines, we let the tourists book and reserve their accommodation in some famous paradise beaches in the philippines.
                in order to be the best, we give our customers the best place and the best people to accommodate them through the rest of their vacation.
            </p>
        </div>
        <div class="box">
            <h3>Contact</h3>
            <a href="#">#63 921 269 4306</a>
            <a href="#">#63 947 861 3781</a>
            <a href="#">671-0641</a>
        </div>
        <div class="box">
            <h3>Quick links</h3>
            <a href="index.php">Home</a>
            <a href="PS.php">Packages</a>
            <a href="book.php">Book</a>
        </div>
        <div class="box">
            <h3>Follow us</h3>
            <a href="https://www.facebook.com">Facebook</a>
            <a href="https://www.instagram.com">Instagram</a>
            <a href="https://twitter.com">Twitter</a>
        </div>

    </div>

    <h1 class="credit"> Created by <span><a href="">Adventure Time Crew</a></span> | all rights reserved! </h1>

</section>
</div>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="script/ps.js"></script>

</body>
</html>
<?php 
}else{
header("Location: loginpage.php");
exit();
}
?>