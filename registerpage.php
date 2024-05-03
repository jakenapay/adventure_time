<?php include('registerdb.php') ?>
<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADVENTURE TIME</title>
    <script src="https://kit.fontawesome.com/e21fee5065.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css"> <!-- date picker -->
    <link rel="stylesheet" href="css/reg.css"> <!-- date picker  -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script> <!-- date picker jquery -->
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script> <!-- date picker jquery -->
    <link rel="stylesheet" href="css/reg.css">
    <script src="script/reg.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

</head>
<body style="background: rgb(255,255,255);
background: radial-gradient(circle, rgba(255,255,255,1) 16%, rgba(214,214,214,1) 100%);">

<nav class="navbar navbar-expand-lg bg-black" style="font-size: 20px;">
        <div class="container">
            <a class="navbar-brand" href="#home" style="font-size: 30px; font-family: 'Nunito', sans-serif; color: white; font-weight: bold;"><img src="assets/images/logo.png" alt="" height="75" width="75" style="margin-right: 20px;"><span style="color: #00fff2;">ADVENTURE</span>TIME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="loginpage.php" style="color: white; font-family: 'Nunito', sans-serif;">Log-in</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php" style="color: white; font-family: 'Nunito', sans-serif;">Home</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    
    <div style="margin-top: -10px;">
    <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(0, 0, 0, 1)" offset="0%"></stop><stop stop-color="rgba(0, 0, 0, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,30L30,40C60,50,120,70,180,75C240,80,300,70,360,68.3C420,67,480,73,540,66.7C600,60,660,40,720,41.7C780,43,840,67,900,71.7C960,77,1020,63,1080,63.3C1140,63,1200,77,1260,78.3C1320,80,1380,70,1440,66.7C1500,63,1560,67,1620,63.3C1680,60,1740,50,1800,40C1860,30,1920,20,1980,13.3C2040,7,2100,3,2160,5C2220,7,2280,13,2340,15C2400,17,2460,13,2520,11.7C2580,10,2640,10,2700,15C2760,20,2820,30,2880,31.7C2940,33,3000,27,3060,26.7C3120,27,3180,33,3240,40C3300,47,3360,53,3420,51.7C3480,50,3540,40,3600,43.3C3660,47,3720,63,3780,63.3C3840,63,3900,47,3960,38.3C4020,30,4080,30,4140,26.7C4200,23,4260,17,4290,13.3L4320,10L4320,100L4290,100C4260,100,4200,100,4140,100C4080,100,4020,100,3960,100C3900,100,3840,100,3780,100C3720,100,3660,100,3600,100C3540,100,3480,100,3420,100C3360,100,3300,100,3240,100C3180,100,3120,100,3060,100C3000,100,2940,100,2880,100C2820,100,2760,100,2700,100C2640,100,2580,100,2520,100C2460,100,2400,100,2340,100C2280,100,2220,100,2160,100C2100,100,2040,100,1980,100C1920,100,1860,100,1800,100C1740,100,1680,100,1620,100C1560,100,1500,100,1440,100C1380,100,1320,100,1260,100C1200,100,1140,100,1080,100C1020,100,960,100,900,100C840,100,780,100,720,100C660,100,600,100,540,100C480,100,420,100,360,100C300,100,240,100,180,100C120,100,60,100,30,100L0,100Z"></path></svg>
    </div>
<!-- header section ends -->

    <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglePopup()">&times;</div>
            <h1>Terms and Conditions for Adventure Time<br><br>
            </h1>
            <h2>Introduction</h2><br>
            <p>
                These Website Standard Terms and Conditions written on this webpage shall mana
                ge your use of our website, Webiste Name accessible at Website.com.<br>
                These Terms will be applied fully and affect to your use of this
                 Website. By using this Website, you agreed to accept all terms and cond
                 itions written in here. You must not use this Website if you disagree w
                 ith any of these Website Standard Terms and Conditions.<br>
                Minors or people below 18 years old are not allowed to use this Website.<br>
            </p>

            <br><h2>Intellectual Property Rights</h2><br>
            <p>
                Other than the content you own, under these Terms, Company Name and/or its
                 licensors own all the intellectual property rights and materials contained
                  in this Website.<br>
                 You are granted limited license only for purposes of viewing the material
                  contained on this Website.<br></p><br><br>

                  <br><h2>Privacy Consent</h2><br>
            <p>
            I understand and agree that by signing in, I am allowing the Adventure Time to collect, process, use, share, disclose my personal information and sensitive personal information and also to store it as long as necessary for the fulfillment of the Booking and Reservation services  in accordance with applicable laws, including the Data Privacy Act of 2012 and its Implementing Rules and Regulations, and the Adventure TIme Privacy Policy. The purpose and extent of the collection, use, sharing, disclosure, and storage of my personal information and sensitive personal information is clear to me<br>
               <br></p><br><br>

            <h2>Restrictions</h2>
            <p>
            You are specifically restricted from all of the following: <br><br>
            <ul>
                &emsp;<li>publishing any Website material in any other media;</li>
                &emsp;<li>selling, sublicensing and/or otherwise commercializing any Website material</li>
                &emsp;<li>publicly performing and/or showing any Website material;</li>
                &emsp;<li>using this Website in any way that is or may be damaging to this Website;</li>
                &emsp;<li>using this Website in any way that impacts user access to this Website;</li>
            </ul>
            </p>
        </div>
    </div>
  
    <div class="body-man">
        <div class="containers1">
            <div class="title1">Register</div>
            <div id="error"></div>
        
            <form autocomplete="off" method="POST" action="registerdb.php" id="contact-form" role="form">
                <div class="user-details">

                    <div class="input-box">
                        <i class="fa-solid fa-user"></i>
                        <span class="details">First name </span>
                        <input id="firstname" type="text" placeholder="Enter your First name" name="firstname" required >
                    </div>
                
                <div class="input-box">
                        <i class="fa-solid fa-user"></i>
                        <span class="details">Last name </span>
                        <input id="lastname" type="text" placeholder="Enter your Last name" name="lastname" required >
                    </div>

                    
                    <div class="input-box">
                        <i class="fas fa-user-circle"></i>
                        <span class="details">Username </span>
                        <input id="username" type="text" placeholder="Enter username" name="username" required style="text-transform: lowercase;"> 
                    </div>
                
                <div class="input-box">
                        <i class="fa-solid fa-phone"></i>
                        <span class="details">Phone Number </span>
                        <input id="phone" type="text" placeholder="Enter your phone number" name="phonenumber" required> 
                    </div>

                    <div class="input-box email">
                        <i class="fa-solid fa-envelope"></i>
                        <span class="details">Email </span>
                        <input id="email" type="text" placeholder="Enter your email address" name="email" required> 
                    </div>

                <div class="input-box date">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="details">Birthday </span>
                        <input type="text" placeholder="Enter your Birthday" id="datepick" name="birthday" required onclick="pressed()">
                        </div>

                    <div class="input-box">
                        <i class="fa-solid fa-key"></i>
                        <span class="details">Password </span>
                        <input id="password" type="password" placeholder="Enter your password" name="password_1" required style="text-transform: lowercase;"> 
                    </div>

                    <div class="input-box">
                        <i class="fa-solid fa-square-check"></i>
                        <span class="details">Confirm Password </span>
                        <input id="confirmpassword" type="password" placeholder="Confirm password" name="password_2" required style="text-transform: lowercase;"> 
                    </div>        

                </div>
                
                <hr>
                
                <div class="terms-details">

                    <div class="modal1" id="modal">
                        
                        <input type="checkbox" id="dot-term" name="termi" required>

                        <div class="cat">
                            <label for="dot-term">  
                                <span class="dot term"></span>
                                <span class="termi" style="font-size: 16px;">I agree with the<span class="btn2" onclick="togglePopup()"> <u>terms and condition</u> &nbsp<i class="fa-solid fa-circle-info"></i></span></span>
                            </label>
                            <p id="demo"></p>
                        </div>

                        <input type="checkbox" id="dot-term-one" name="termi-one" required>

                        <div class="cat1">
                            <label for="dot-term-one">  
                                <span class="dot1 term1"></span>
                                <span class="termi-one" style="font-size: 16px;">I also agree with the<span class="btn2" onclick="togglePopup()"> <u>Data Privacy Act of 2012</u> &nbsp<i class="fa-solid fa-circle-info"></i></span></span>
                                
                            </label>
                            <p id="demo1"></p>
                        </div>

                        <style>
                            .btn2{
                                background-color: #fff;
                                border: none;
                                font-size: 16px;
                                cursor: pointer;
                            }
                        </style>

                    </div>
                </div>

                <hr>

                <div class="buttons">
                    <input type="submit" name="reg_user">
                </div>

            </form>
        </div>
    </div>

<!-- footer section  -->

<div style="margin-top: -200px;">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,256L30,229.3C60,203,120,149,180,149.3C240,149,300,203,360,224C420,245,480,235,540,213.3C600,192,660,160,720,149.3C780,139,840,149,900,176C960,203,1020,245,1080,245.3C1140,245,1200,203,1260,197.3C1320,192,1380,224,1410,240L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
</div>
    
<section class="footer" id="footer" style="margin-top: -80px;">
    
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

    <h1 class="credit"> created by <span>Adventure Time Crew</span> | all rights reserved! </h1>

</section>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</body>
</html>