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
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>

    </head>

    <body>

        <!-- header section starts  -->

        <nav class="navbar navbar-expand-lg bg-black fixed-top" style="font-size: 20px;">
            <div class="container">
                <a class="navbar-brand" href="#home"
                    style="font-size: 30px; font-family: 'Nunito', sans-serif; color: white; font-weight: bold;"><img
                        src="assets/images/logo.png" alt="" height="75" width="75" style="margin-right: 20px;"><span
                        style="color: #00fff2;">ADVENTURE</span>TIME</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home"
                                style="color: white; font-family: 'Nunito', sans-serif;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="book.php"
                                style="color: white; font-family: 'Nunito', sans-serif;">Book</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services"
                                style="color: white; font-family: 'Nunito', sans-serif;">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery"
                                style="color: white; font-family: 'Nunito', sans-serif;">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#review"
                                style="color: white; font-family: 'Nunito', sans-serif;">Review</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact"
                                style="color: white; font-family: 'Nunito', sans-serif;">Inquiries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer"
                                style="color: white; font-family: 'Nunito', sans-serif;">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a style="color: white; font-family: 'Nunito', sans-serif;" class="nav-link dropdown-toggle"
                                href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Packages
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="PS1.php"
                                        style="font-family: 'Nunito', sans-serif; font-size: 20px;">Batangas</a></li>
                                <li><a class="dropdown-item" href="PS4.php"
                                        style="font-family: 'Nunito', sans-serif; font-size: 20px;">Bohol</a></li>
                                <li><a class="dropdown-item" href="PS2.php"
                                        style="font-family: 'Nunito', sans-serif; font-size: 20px;">Cebu</a></li>
                                <li><a class="dropdown-item" href="PS.php"
                                        style="font-family: 'Nunito', sans-serif; font-size: 20px;">Pangasinan</a></li>
                                <li><a class="dropdown-item" href="PS3.php"
                                        style="font-family: 'Nunito', sans-serif; font-size: 20px;">Siargao</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a style="color: white; font-family: 'Nunito', sans-serif;" class="nav-link dropdown-toggle"
                                href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#"
                                        style="font-family: 'Nunito', sans-serif; font-size: 20px;">Hello,
                                        <?php echo $_SESSION['name']; ?>!</a></li>
                                <li><a class="dropdown-item" href="logout.php"
                                        style="font-family: 'Nunito', sans-serif; font-size: 20px;">Log-out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- header section ends -->

        <!-- home section starts  -->

        <section class="home" id="home">

            <div class="content">
                <h3>adventure is worthwhile</h3>
                <p>travel to the most breathtaking paradise in the philippines</p>
                <p>so what are you waiting for <?php echo $_SESSION['name']; ?>? book with us!</p>
                <a href="PS.php" class="btn btn-info" style="font-size: 20px;">See More</a>
            </div>

            <div class="controls">
                <span class="vid-btn active" data-src="assets/videos/boracay.mp4"></span>
                <span class="vid-btn " data-src="assets/videos/pagudpud.mp4"></span>
                <span class="vid-btn " data-src="assets/videos/palawan.mp4"></span>
                <span class="vid-btn " data-src="assets/videos/siargao.mp4"></span>
                <span class="vid-btn " data-src="assets/videos/bicol.mp4"></span>
            </div>
            <div class="video-container">
                <video src="assets/videos/boracay.mp4" id="video-slider" autoplay muted></video>
            </div>
            <div class="voiceover">
                <audio controls autoplay>
                    <source src="assets/audio/recording.mp3" type="audio/mp3">
                </audio>
            </div>

        </section>

        <!-- home section ends -->

        <!-- services section starts  -->

        <section class="services" id="services">

            <h1 class="heading">
                <span>s</span>
                <span>e</span>
                <span>r</span>
                <span>v</span>
                <span>i</span>
                <span>c</span>
                <span>e</span>
                <span>s</span>
            </h1>

            <div class="box-container">

                <div class="box">
                    <i class="fas fa-hotel"></i>
                    <h3>affordable hotels</h3>
                    <p>Always Lowest Price Guaranteed! Book Now, Pay Later & Save Money.
                        We're Available Live 24 7to Help. </p>
                </div>
                <div class="box">
                    <i class="fas fa-utensils"></i>
                    <h3>food and drinks</h3>
                    <p>Seize The Moment, Remember All Those Women On the "Titanic" Who Waved off the Dessert Cart</p>
                </div>
                <div class="box">
                    <i class="fas fa-plane"></i>
                    <h3>fastest travel</h3>
                    <p>The memories of traveling form some of the mose fascinating chapters in your life's book. Enjoy the
                        journey!</p>
                </div>
                <div class="box">
                    <i class="fas fa-hiking"></i>
                    <h3>adventures</h3>
                    <p>May your Adventures bring you closer together, even as they take you far away home</p>
                </div>

            </div>

        </section>

        <!-- services section ends -->

        <!-- gallery section starts  -->

        <section class="gallery" id="gallery">

            <h1 class="heading">
                <span>g</span>
                <span>a</span>
                <span>l</span>
                <span>l</span>
                <span>e</span>
                <span>r</span>
                <span>y</span>
            </h1>

            <div class="box-container">

                <div class="box">
                    <img src="assets/images/batangasFeature.jpg" alt="">
                    <div class="content">
                        <h3>Batangas</h3>
                        <p>Lets Explore and Get Lost In Paradise</p>
                        <a href="PS1.php" class="btn btn-info" style="font-size: 14px;">See More</a>
                    </div>
                </div>
                <div class="box">
                    <img src="assets/images/boholFeature.jpg" alt="">
                    <div class="content">
                        <h3>Bohol</h3>
                        <p>Lets Explore and Get Lost In Paradise</p>
                        <a href="PS4.php" class="btn btn-info" style="font-size: 14px;">See More</a>
                    </div>
                </div>
                <div class="box">
                    <img src="assets/images/cebuFeature.jpg.opdownload" alt="">
                    <div class="content">
                        <h3>Cebu</h3>
                        <p>Lets Explore and Get Lost In Paradise</p>
                        <a href="PS2.php" class="btn btn-info" style="font-size: 14px;">See More</a>
                    </div>
                </div>
                <div class="box">
                    <img src="assets/images/pangasinanFeature.jpg" alt="">
                    <div class="content">
                        <h3>Pangasinan</h3>
                        <p>Lets Explore and Get Lost In Paradise</p>
                        <a href="PS.php" class="btn btn-info" style="font-size: 14px;">See More</a>
                    </div>
                </div>
                <div class="box">
                    <img src="assets/images/siargaoFeature.jpg" alt="">
                    <div class="content">
                        <h3>Siargao</h3>
                        <p>Lets Explore and Get Lost In Paradise</p>
                        <a href="PS3.php" class="btn btn-info" style="font-size: 14px;">See More</a>
                    </div>
                </div>

            </div>

        </section>

        <!-- gallery section ends -->

        <!-- review section starts  -->

        <section class="review" id="review">

            <h1 class="heading">
                <span>r</span>
                <span>e</span>
                <span>v</span>
                <span>i</span>
                <span>e</span>
                <span>w</span>
                <span>s</span>
            </h1>

            <div class="swiper-container review-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="box">
                            <img src="assets/images/robin.jpg" alt="">
                            <h3>Pobin Radilla</h3>
                            <p> A fantastic organization! Great Customer Service support from beginning to end of the
                                process.The team are really informed and go the extra mile at every stage.
                                I would recommend them unreservedly.
                            </p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="assets/images/sharon.jpg.opdownload" alt="">
                            <h3>Charon Suneta</h3>
                            <p> The Service is smooth and Straightforward. My Advisor was helpful. I would recommend deal
                                direct.</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="assets/images/alden.jpg" alt="">
                            <h3>Rlden Aichards</h3>
                            <p>Great Service, efficient communication and a really easy way to get a mortgage with lots of
                                help and support to get the right deal.</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="assets/images/ivana.jpg" alt="">
                            <h3>Avana Ilawi</h3>
                            <p>Great Customer Service! The man I spoke with was very helpful in answering questions as well
                                as helping in finding the best hotel for my husband and I</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="assets/images/nadine.png" alt="">
                            <h3>Ladine Nustre</h3>
                            <p>Great Customer Service! The man I spoke with was very helpful in answering questions as well
                                as helping in finding the best hotel for my husband and I</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <!-- review section ends -->

        <!-- contact section starts  -->

        <section class="contact" id="contact">

            <h1 class="heading">
                <span>i</span>
                <span>n</span>
                <span>q</span>
                <span>u</span>
                <span>i</span>
                <span>r</span>
                <span>i</span>
                <span>e</span>
                <span>s</span>
            </h1>

            <div class="row">

                <div class="image">
                    <img src="assets/images/Contact.jpg" alt="">
                </div>

                <form method="post" id="contact-form" role="form">
                    <div class="inputBox">
                        <input type="text" placeholder="Name" name="name">
                        <input type="text" placeholder="E-Mail" name="email">
                    </div>
                    <div class="inputBox">
                        <input type="tel" placeholder="Number" name="number">
                        <input type="text" placeholder="Subject" name="subject">
                    </div>
                    <textarea placeholder="Message" name="message" cols="30" rows="10"></textarea>
                    <input type="submit" class="btn btn-outline-success" value="send message" name="ok"
                        style="font-size: 20px;">

                </form>
                <?php
                if (isset($_POST['ok'])) {
                    include_once 'inquiries.php';
                    $obj = new finalproj_inquiries();
                    $res = $obj->inquiries($_POST);
                    if ($res == true) {
                        echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                    } else {
                        echo "<script>alert('Something Went wrong!!')</script>";
                    }
                }
                ?>
            </div>

        </section>

        <!-- contact section ends -->

        <!-- brand section  -->
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

        <!-- footer section  -->

        <section class="footer" id="footer">

            <div class="box-container">
                <div class="box">
                    <h3>About us</h3>
                    <p>Adventure Time offers the best tourist spots in the Philippines. The tourist may select the suggested
                        provinces with beach mountain views, tourist spots, and resorts. A Traveler’s Inn is also included
                        for travelers who want to rest overnight. The travel protocols in every place must be followed by
                        the tourist for their safety and health.

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
                    <a href="#">home</a>
                    <a href="loginpage.php">Login</a>
                    <a href="registerpage.php">Create your account</a>
                </div>
                <div class="box">
                    <h3>follow us</h3>
                    <a href="https://www.facebook.com">facebook</a>
                    <a href="https://www.instagram.com">instagram</a>
                    <a href="https://twitter.com">twitter</a>
                </div>

            </div>

            <h1 class="credit"> created by <span><a href="adventure.php">Adventure Time Crew</a></span> | all rights
                reserved! </h1>

        </section>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- custom js file link  -->
        <script src="script/script.js"></script>

    </body>

    </html>

<?php
} else {
    header("Location: loginpage.php");
    exit();
}
?>