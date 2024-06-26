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

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" type="text/css" href="css/ps.css">
    <link rel="stylesheet" type="text/css" href="css/psNew.css">

</head>

<body>

    <!-- header section starts  -->

    <nav class="navbar navbar-expand-lg bg-black fixed-top" style="font-size: 20px;">
        <div class="container">
            <a class="navbar-brand" href="#home" style="font-size: 30px; font-family: 'Nunito', sans-serif; color: white; font-weight: bold;"><img src="assets/images/logo.png" alt="" height="75" width="75" style="margin-right: 20px;"><span style="color: #00fff2;">ADVENTURE</span>TIME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php" style="color: white; font-family: 'Nunito', sans-serif;">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- header section ends -->
    <div class="mt-5"><p></p></div>
    <section class="mt-5 pt-5 t" style="">
        <!-- <img class="img-mount" src="assets\images\mountains.png" alt=""> -->
        <!-- <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-md-6 col-lg-6" id="login-box">
                <div class="mt-4">
                    <h1 class="heading head-log text-center">
                        <span>L</span>
                        <span>o</span>
                        <span>g</span>
                        <span>i</span>
                        <span>n</span>
                    </h1>
                    <div class="d-flex justify-content-center user-form">
                        <form action="login.php" method="post">
                            <?php if (isset($_GET['error'])) { ?>
                                <p class="error" style="color: red; margin-left: 20px; font-size: 20px;"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                            <p class="form-lbl m-0 mt-3">Username</p>
                            <input class="user-input" type="text" name="uname" placeholder="enter your username"><br>
                            <p class="form-lbl m-0 mt-3">Password</p>
                            <input class="user-input" type="text" name="password" placeholder="Enter your password" style="text-transform: lowercase;">
                            <div class="d-flex justify-content-evenly user-form">
                                <button type="submit" class="btn btn-sm text-white" style="background-color: #42BFDD; font-size: 20px; padding-left: 20px; padding-right: 20px; margin-top: 10px; margin-bottom: 10px;">Log-in</button>
                            </div>
                        </form>
                    </div>
                    <div class="user-form reg-user text-center">
                        <p>No account? <a href="registerpage.php" style="text-decoration: none;">Register</a> here</p>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-md-6 col-lg-6">
                <div class="mt-4" id="wrapper-box" style="background-image: url('assets/images/mountains.png'); background-size: contain; background-position: center; background-repeat: no-repeat; padding: 5rem; padding-bottom: 10rem;">
                    <h1 class="heading head-log text-center">
                        <span>L</span>
                        <span>o</span>
                        <span>g</span>
                        <span>i</span>
                        <span>n</span>
                    </h1>
                    <div class="d-flex justify-content-center user-form">
                        <form action="login.php" method="post">
                            <?php if (isset($_GET['error'])) { ?>
                                <p class="error" style="color: red; margin-left: 20px; font-size: 20px;"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                            <p class="form-lbl m-0 mt-3">Username</p>
                            <input class="user-input" type="text" name="uname" placeholder="enter your username"><br>
                            <p class="form-lbl m-0 mt-3">Password</p>
                            <input class="user-input" type="text" name="password" placeholder="Enter your password" style="text-transform: lowercase;">
                            <div class="d-flex justify-content-evenly user-form">
                                <button type="submit" class="btn btn-sm text-white" style="background-color: #42BFDD; font-size: 20px; padding-left: 20px; padding-right: 20px; margin-top: 10px; margin-bottom: 10px;">Log-in</button>
                            </div>
                        </form>
                    </div>
                    <div class="user-form reg-user text-center">
                        <p>No account? <a href="registerpage.php" style="text-decoration: none;">Register</a> here</p>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- packages section ends -->

    <!-- brand section  -->
    <section class="brand-container brands-cont">

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
    <!-- brand section ends  -->

    <!-- footer section  -->

    <section class="footer" id="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
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
                <h3>quick links</h3>
                <a href="index.php">home</a>
                <a href="PS.php">packages</a>
                <a href="book.php">book</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com">facebook</a>
                <a href="https://www.instagram.com">instagram</a>
                <a href="https://twitter.com">twitter</a>
            </div>

        </div>

        <h1 class="credit"> Created by <span><a href="adventure.php">Adventure Time Crew</a></span> | all rights reserved! </h1>

    </section>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- custom js file link  -->
    <script src="script/ps.js"></script>

</body>

</html>