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
        <link rel="stylesheet" type="text/css" href="css/ps.css">

        <link rel="stylesheet" href="css/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>

        <!-- custom css file link  -->
        <link rel="stylesheet" type="text/css" href="css/ps1new.css?<?php echo time(); ?>">
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
                            <a class="nav-link active" aria-current="page" href="home.php"
                                style="color: white; font-family: 'Nunito', sans-serif;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="book.php"
                                style="color: white; font-family: 'Nunito', sans-serif;">Book</a>
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

        <!-- packages section starts  -->

        <section class="packages" id="packages">

            <h1 class="heading" id="package-title">
                Packages
            </h1>

            <div class="box-container">

                <div class="box">
                    <!-- <img src="assets/images/batangas.jpg" alt=""> -->
                    <div class="content">
                        <div class="row">
                            <div class="col col-md-12 col-lg-6 p-5">
                                <h3 class="text-center"> <i class="fas fa-map-marker-alt"></i> BATANGAS </h3>
                                <p id="description">The province of Batangas is located in the CALABARZON region of the
                                    Philippines. A huge
                                    section of the province sits on the southwestern coast of Luzon island. It is one of the
                                    most popular holiday destinations for domestic travelers mainly because of its proximity
                                    to Manila, the Philippines' capital. If you want a quick weekend getaway or vacation,
                                    Batangas is perfect as it is only about 108 km away, around a 2 - 2.5 hours drive from
                                    Manila.
                                    Batangas tourist spots include historical sites, distinct architecture, and outdoor
                                    attractions. The province is home to several gorgeous beaches near Manila, ranging from
                                    black to powdery white. It caters to outdoor adventures as it has farms, camping
                                    grounds, waterfalls, mountains, diving sites, and hiking trails. </p>
                            </div>
                            <div class="col col-md-12 col-lg-6 p-5">
                                <img class="img-fluid w-100" src="assets/images/batangasFeature.jpg" alt="">
                            </div>
                        </div>

                        <div id="tabs">
                            <ul>
                                <li><a href="#tabs-1">Beach</a></li>
                                <li><a href="#tabs-2">Mountain</a></li>
                                <li><a href="#tabs-3">Tourist Spots</a></li>
                                <li><a href="#tabs-4">Traveler's Inn</a></li>
                                <li><a href="#tabs-5">Resort</a></li>
                            </ul>

                            <div class=conts>
                                <div id="tabs-1"> <!--Beach-->
                                    <div id="tabs1">
                                        <ul>
                                            <li><a href="#tabs1-1">Coral Beach Club </a></li>
                                            <li><a href="#tabs1-2">Matabungkay Beach Hotel </a></li>
                                            <li><a href="#tabs1-3">Crusoe Cabins Casobe </a></li>
                                            <li><a href="#tabs1-4">Pico Sands Hotel </a></li>
                                        </ul>

                                        <div class=conts1>
                                            <div id="tabs1-1">
                                                <div class="row">
                                                    <div class="col col-md-12 col-lg-6 align-self-center">
                                                        <h1>Coral Beach Club</h1>
                                                        <p>Location: Lian Matabungkay, Lian, Batangas<br>
                                                            Check-in: 2PM || Check-out: 12NN </p>
                                                        <div class="stars">Ratings:
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col col-md-12 col-lg-6">
                                                        <img class="img-fluid" src="assets/images/beach/bata1.png" alt="">
                                                    </div>
                                                </div>
                                                <br>
                                                <hr /></br>

                                                <div class="row d-flex justify-content-center align-items-center">
                                                    <!-- PACKAGE 1 -->
                                                    <div class="col col-sm-12 col-md-4 col-lg-3 align-self-center">
                                                        <div class="card" style="">
                                                            <img class="img-fluid card-img-top"
                                                                src="assets/images/beach/bata-pack1.png"
                                                                alt="Card image cap">
                                                            <div class="card-body">
                                                                <h5 class="card-title">PACKAGE 1</h5>
                                                                <p class="card-text">Premier <br>
                                                                    good for 2 pax<br>
                                                                    free breakfast for 2<br>
                                                                    Parking, Coffee & tea, Free WiFi, Drinking water<br>
                                                                    P4,737/night</p>
                                                                <a href="#" class="btn btn-dark text-white">Go somewhere</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- PACKAGE 2 -->
                                                    <div class="col col-sm-12 col-md-4 col-lg-3 align-self-center">
                                                        <div class="card" style="">
                                                            <img class="img-fluid card-img-top"
                                                                src="assets/images/beach/bata-pack2.png"
                                                                alt="Card image cap">
                                                            <div class="card-body">
                                                                <h5 class="card-title">PACKAGE 2</h5>
                                                                <p class="card-text"> Deluxe Cottage <br>
                                                                    good for 2 pax<br>
                                                                    free breakfast for 2<br>
                                                                    Parking, Coffee & tea, Free WiFi, Drinking water <br>
                                                                    P5,341/night</p>
                                                                <a href="#" class="btn btn-dark text-white">Go somewhere</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- PACKAGE 3 -->
                                                    <div class="col col-sm-12 col-md-4 col-lg-3 justify-self-center">
                                                        <div class="card" style="">
                                                            <img class="img-fluid card-img-top"
                                                                src="assets/images/beach/bata-pack3.png"
                                                                alt="Card image cap">
                                                            <div class="card-body">
                                                                <h5 class="card-title">PACKAGE 3</h5>
                                                                <p class="card-text">Ocean View<br>
                                                                    good for 3-4 pax<br>
                                                                    free Breakfast for 2<br>
                                                                    free Parking, Free WiFi, Drinking water <br>
                                                                    P5,999/night</p>
                                                                <a href="#" class="btn btn-dark text-white">Go somewhere</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- PACKAGE 4 -->
                                                    <!-- <div class="col col-sm-12 col-md-4 col-lg-3 align-self-center">
                                                        <div class="card" style="">
                                                            <img class="img-fluid card-img-top"
                                                                src="assets/images/beach/bata-pack1.png"
                                                                alt="Card image cap">
                                                            <div class="card-body">
                                                                <h5 class="card-title">PACKAGE 1</h5>
                                                                <p class="card-text">Premier <br>
                                                                    good for 2 pax<br>
                                                                    free breakfast for 2<br>
                                                                    Parking, Coffee & tea, Free WiFi, Drinking water<br>
                                                                    P4,737/night</p>
                                                                <a href="#" class="btn btn-dark text-white">Go somewhere</a>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>

                                            </div> <!--End tag for tabs1-1-->

                                            <div id="tabs1-2">
                                                <h1>Matabungkay Beach Hotel</h1>
                                                <div class=image><img src="assets/images/beach/bata2.png" alt=""></div>
                                                <p>Location: Lian Batangas, Lian, Batangas<br>
                                                    Check-in: 2PM || Check-out: 12NN </p>
                                                <center>
                                                    <div class="stars">Ratings:
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </center><br></br>

                                                <h3>PACKAGE 1</h3>
                                                <p>
                                                    Deluxe <br>
                                                    good for 1-2 pax<br>
                                                    free breakfast for 2<br>
                                                    parking, free wifi<br>
                                                    P4,441/night
                                                </p>
                                                <br><br>
                                                <h3>PACKAGE 2</h3>
                                                <p>
                                                    Deluxe Suite <br>
                                                    good for 2-3 pax<br>
                                                    free breakfast for 2<br>
                                                    P5,553/night
                                                </p>
                                                <br><br>
                                                <h3>PACKAGE 3</h3>
                                                <p>
                                                    Garden Villa <br>
                                                    good for 4-6 pax<br>
                                                    free breakfast for 5<br>
                                                    P9,689/night
                                                </p>
                                                <br><br>
                                                <h3>Amenities and Other Activities</h3>
                                                <p>
                                                    Massage (Day/Nighttime)<br>
                                                    Spa (Day/Nighttime)<br>
                                                    Sauna (Day/Nighttime) <br>
                                                    Steamroon (Day/Nighttime)<br>
                                                    Swimming Pool (Indoor/outdoor)<br>
                                                </p>

                                            </div> <!--End tag for tabs1-2-->

                                            <div id="tabs1-3">
                                                <h1>Crusoe Cabins Casobe</h1>
                                                <img src="assets/images/beach/bata3.png" alt="">
                                                <p>Location: Calatagan, Batangas<br>
                                                    Check-in: 2PM || Check-out: 12NN </p>
                                                <center>
                                                    <div class="stars">Ratings:
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </center><br></br>

                                                <h3>Garden Cabin</h3>
                                                <p>
                                                    good for 2-4 pax<br>
                                                    1 Queen Bed<br>
                                                    free breakfast<br>
                                                    P9,522/night
                                                </p>
                                                <br><br>
                                                <h3>Premier Garden Cabin</h3>
                                                <p>
                                                    good for 4-6 pax<br>
                                                    1 Queen Bed<br>
                                                    free breakfast<br>
                                                    P10,689/night
                                                </p>
                                                <br><br>
                                                <h3>Seaview Cabin</h3>
                                                <p>
                                                    good for 4-8 pax<br>
                                                    2 Double Bed<br>
                                                    free breakfast<br>
                                                    P11,856/night
                                                </p>
                                                <br><br>
                                                <h3>Beachfront Cabin</h3>
                                                <p>
                                                    good for 4-8 pax<br>
                                                    2 Bunk Beds<br>
                                                    free breakfast<br>
                                                    P13,022/night
                                                </p>
                                                <br><br>
                                                <h3>Amenities and Other Activities</h3>
                                                <p>
                                                    Island hopping (Daytime)<br>
                                                    Complimentary Wifi<br>
                                                    Air Condition<br>
                                                    Refrigerator<br>
                                                    Beach, Garden, and Ocean View<br>
                                                </p>
                                            </div> <!--End tag for tabs1-3-->

                                            <div id="tabs1-4">
                                                <h1>Pico Sands Hotel</h1>
                                                <div class=image><img src="assets/images/beach/bata4.png" alt=""></div>
                                                <p>Location: Nasugbu, Batangas<br>
                                                    Check-in: 2PM || Check-out: 12NN </p>
                                                <center>
                                                    <div class="stars">Ratings:
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </center><br></br>

                                                <h3>Standard Room with Mountain View (Renovated)</h3>
                                                <div class=image><img src="assets/images/beach/bata-pack4.png" alt=""></div>
                                                <p>
                                                    good for 2 pax<br>
                                                    1 Queen Bed<br>
                                                    Free breakfast for 2<br>
                                                    P7,212/night
                                                </p>
                                                <br><br>
                                                <h3>Superior Room with Mountain View (Renovated)</h3>
                                                <div class=image><img src="assets/images/beach/bata-pack5.png" alt=""></div>
                                                <p>
                                                    good for 3 pax<br>
                                                    1 King Bed<br>
                                                    P7,000/night
                                                </p>
                                                <br><br>
                                                <h3>Premier Room with Mountain View</h3>
                                                <div class=image><img src="assets/images/beach/bata-pack6.png" alt=""></div>
                                                <p>
                                                    good for 2-4 pax<br>
                                                    2 Queen Beds<br>
                                                    Free breakfast for 2<br>
                                                    P7,838/night
                                                </p>
                                                <br><br>
                                                <h3>Superior Room with Lagoon View (Renovated)</h3>
                                                <div class=image><img src="assets/images/beach/bata-pack7.png" alt=""></div>
                                                <p>
                                                    good for 2-3 pax<br>
                                                    1 King Bed, 1 Single Bed<br>
                                                    Free breakfeast for 2 <br>
                                                    P8,146/night
                                                </p>
                                                <br><br>
                                                <h3>Deluxe Room with Lagoon View (Renovated)</h3>
                                                <div class=image><img src="assets/images/beach/bata-pack8.png" alt=""></div>
                                                <p>
                                                    good for 2-4 pax<br>
                                                    2 Queen Beds<br>
                                                    Free breakfast for 2<br>
                                                    P8,570/night
                                                </p>
                                            </div> <!--End tag for tabs4-->
                                        </div><!--End tag for tabs1-1 conts-->
                                    </div><!--End tag for Beach-->
                                </div><!--End tag for conts-->

                                <div class=conts>
                                    <div id="tabs-2"> <!--Mountain-->
                                        <div id="tabs2">
                                            <ul>
                                                <li><a href="#tabs2-1">Laiya Adventure Park</a></li>
                                            </ul>
                                            <div class=conts1>

                                                <div id="tabs2-1">
                                                    <h1>Laiya Adventure Park</h1>
                                                    <img src="assets/images/mountain/bata1.png" alt="">
                                                    <p>Location: San Juan, Batangas<br>
                                                        Check-in: 5AM || Check-out: 5PM <br>
                                                        NO OVERNIGHT STAY </p><br></br>

                                                    <h3>Entrance Fee</h3>
                                                    <p>
                                                        Adult/Children: P50 <br>

                                                    </p>
                                                    <br><br>
                                                    <h3>Adventure Facilities</h3>
                                                    <div class=image><img src="assets/images/mountain/bata-pack1.png"
                                                            alt=""></div>
                                                    <p>
                                                        Zipline (630m): P250<br>
                                                        Wall Climb: P100.00<br>
                                                        Rappelling: P100<br>
                                                        Freefall: P150<br>
                                                        Aerial Walk: P150<br>
                                                        Giant Swing: P150<br>
                                                        Infinity Pool: P250<br>
                                                    </p>
                                                    <br><br>
                                                    <h3> Adventure Package</h3>
                                                    <div class=image><img src="assets/images/mountain/bata-pack2.jpg"
                                                            alt=""></div>
                                                    <p>
                                                        Package A: P670 (Zipline (630m), Wall Climb, Rappelling, Freefall,
                                                        Aerial Walk, Giant Swing, Infinity Pool)<br>
                                                        Package B: P520 (Zipline (630m), Wall Climb, Rappelling, Freefall,
                                                        Aerial Walk, Giant Swing)<br>
                                                        Package C: P300 (Zipline (630m), Giant Swing)<br>
                                                    </p>
                                                    <br><br>
                                                </div> <!--End tag for tabs2-1-->


                                            </div> <!--End tag for tabs2-2-->
                                        </div><!--End tag for conts-->
                                    </div><!--End tag for tabs2-->
                                </div><!--End tag for conts-->

                                <div class=conts>
                                    <div id="tabs-3"> <!--Tourist-->
                                        <div id="tabs3">
                                            <ul>
                                                <li><a href="#tabs3-1">Taal Volcano</a></li>
                                                <li><a href="#tabs3-2">Milea Bee Farm </a></li>
                                                <li><a href="#tabs3-3">Fortune Island </a></li>
                                                <li><a href="#tabs3-4">Fantasy World </a></li>
                                            </ul>

                                            <div class=conts1>

                                                <div id="tabs3-1">
                                                    <h1>Taal Volcano</h1>
                                                    <div class=image><img src="assets/images/tourist/bata1.jpg" alt="">
                                                    </div>
                                                    <p>Location: Talisay and San Nicolas, Batangas</p>
                                                    <br></br>

                                                    <h3>Transient House/ Hotels Near the Lake</h3>
                                                    <p>
                                                        Here are the hotels near the location<br>
                                                    </p>
                                                    <br><br>
                                                    <h3>The Lake Hotel Tagaytay</h3>
                                                    <center>
                                                        <div class="stars">Ratings:
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </center>
                                                    <p>
                                                        P4,176 for 24 Hours<br>
                                                        with Aircon, Shower, Mini-Ref<br>
                                                        Good for 2-4 pax
                                                    </p>

                                                    <h3>Taal Vista Hotel</h3>
                                                    <center>
                                                        <div class="stars">Ratings:
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </center>
                                                    <p>
                                                        P6,585 for 24 Hours<br>
                                                        with Aircon, Shower, Mini-Ref<br>
                                                        Good for 4 pax
                                                    </p>
                                                </div><!--End tag for tabs3-2-->

                                                <div id="tabs3-2">
                                                    <h1>Milea Bee Farm</h1>
                                                    <div class=image><img src="assets/images/tourist/bata2.jpg" alt="">
                                                    </div>
                                                    <p>Location: San Jose, Batangas</p>
                                                    <br></br>

                                                    <h3>Transient House/ Hotels Near the Farm</h3>
                                                    <p>
                                                        Here are the hotels near the location<br>
                                                    </p>
                                                    <br><br>
                                                    <h3>The Zillion Builders Pavilion</h3>
                                                    <center>
                                                        <div class="stars">Ratings:
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </center>
                                                    <p>
                                                        P1,746 for 24 Hours<br>
                                                        with Aircon, Shower, Mini-Ref<br>
                                                        Good for 2-3 pax
                                                    </p><br>

                                                    <h3>Solano Hotel</h3>
                                                    <center>
                                                        <div class="stars">Ratings:
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </center>
                                                    <p>
                                                        P8,211 for 24 Hours<br>
                                                        with Aircon, Shower, Mini-Ref<br>
                                                        Good for 2-4 pax
                                                    </p><br>

                                                    <h3>Meaco Royal Hotel</h3>
                                                    <center>
                                                        <div class="stars">Ratings:
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </center>
                                                    <p>
                                                        P1,486 for 24 Hours<br>
                                                        with Aircon, Shower, Mini-Ref <br>
                                                        with Breakfast<br>
                                                        Good for 2-3 pax
                                                    </p>
                                                </div><!--End tag for tabs3-2-->

                                                <div id="tabs3-3">
                                                    <h1>Fortune Island</h1>
                                                    <div class=image><img src="assets/images/tourist/bata3.png" alt="">
                                                    </div>
                                                    <p>Location: Nasugbu, Batangas</p>
                                                    <br></br>
                                                    <h3>Transient House/ Hotels Near the Island</h3>
                                                    <p>
                                                        Here are the hotels near the location<br>
                                                    </p>
                                                    <br><br>
                                                    <h3>Canyon Cove Hotel and Spa</h3>
                                                    <center>
                                                        <div class="stars">Ratings:
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </center>
                                                    <p>
                                                        P9,939 for 24 Hours<br>
                                                        with Aircon, Shower, Mini-Ref<br>
                                                        Good for 2-3 pax
                                                    </p><br>

                                                    <h3>OYO 816 Oktowaves Hotel</h3>
                                                    <center>
                                                        <div class="stars">Ratings:
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </center>
                                                    <p>
                                                        P2,840 for 24 Hours<br>
                                                        with Aircon, Shower, Mini-Ref<br>
                                                        Good for 2-4 pax
                                                    </p><br>

                                                </div><!--End tag for tabs3-3-->

                                                <div id="tabs3-4">
                                                    <h1>Fanstasy World</h1>
                                                    <div class=image><img src="assets/images/tourist/bata4.jpg" alt="">
                                                    </div>
                                                    <p>Location: Lemery, Batangas<br>
                                                        <br></br>
                                                    <h3>Transient House/ Hotels Near the Park</h3>
                                                    <p>
                                                        Here are the hotels near the location<br>
                                                    </p>
                                                    <br><br>
                                                    <h3>Stardust Beach Hotel</h3>
                                                    <center>
                                                        <div class="stars">Ratings:
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </center>
                                                    <p>
                                                        P2,401 for 24 Hours<br>
                                                        with Aircon, Shower, Mini-Ref<br>
                                                        Good for 2-3 pax
                                                    </p><br>

                                                    <h3>White and Yellow Castle Resort and Hotel</h3>
                                                    <center>
                                                        <div class="stars">Ratings:
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </center>
                                                    <p>
                                                        P1,879 for 24 Hours<br>
                                                        with Aircon, Shower, Mini-Ref<br>
                                                        Good for 2-4 pax
                                                    </p><br>

                                                </div><!--End tag for tabs3-4-->
                                            </div><!--End tag for conts-->
                                        </div><!--End tag for tabs3-->
                                    </div><!--End tag for conts-->

                                    <div class=conts>
                                        <div id="tabs-4"> <!--Inn-->
                                            <div id="tabs4">
                                                <ul>
                                                    <li><a href="#tabs4-1">Cintai - Coritos Garden Hotel</a></li>
                                                    <li><a href="#tabs4-2">Days Hotel by Wyndham Batangas</a></li>
                                                    <li><a href="#tabs4-3">Solano Hotel</a></li>
                                                </ul>

                                                <div class=conts1>
                                                    <div id="tabs4-1">
                                                        <h1>Cintai - Coritos Garden Hotel</h1>
                                                        <img src="assets/images/inn/bata1.png" alt="">
                                                        <p>Location: Lipa, Batangas<br>
                                                            Near Calabarzon Expy (Toll Road)<br>
                                                            Check-in: 2PM || Check-out: 12NN </p>
                                                        <center>
                                                            <div class="stars">Ratings:
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                        </center><br></br>

                                                        <h3>Terrace Villa</h3>
                                                        <p>
                                                            good for 2 pax<br>
                                                            free breakfast for 1<br>
                                                            1 Queen Bed<br>
                                                            P3,736/night
                                                        </p>
                                                        <br><br>
                                                        <h3>Garden Villa</h3>
                                                        <p>
                                                            good for 8 pax (6 adults and 2 kids)<br>
                                                            free breakfast for 6<br>
                                                            3 Queen Beds<br>
                                                            P8,999/night
                                                        </p>
                                                        <br><br>

                                                    </div><!--End tag for tabs4-1-->

                                                    <div id="tabs4-2">
                                                        <h1>Days Hotel by Wyndham Batangas</h1>
                                                        <img src="assets/images/inn/bata2.png" alt="">
                                                        <p>Location: Pozorrubio, Pangasinan<br>
                                                            Near Batangas Port Access Rd., and Calabarzon Expy (Toll
                                                            Road)<br>
                                                            Check-in: 2PM || Check-out: 12NN </p>
                                                        <center>
                                                            <div class="stars">Ratings:
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                        </center><br></br>

                                                        <h3>Superior with Breakfast</h3>
                                                        <p>
                                                            good for 4 pax (2 Adults, 2 Kids)<br>
                                                            2 Single Bed<br>
                                                            P3,009/night
                                                        </p>
                                                        <br>
                                                        <h3>Deluxe With Breakfast</h3>
                                                        <p>
                                                            good for 4 pax<br>
                                                            2 Queen Beds<br>
                                                            3,709/night
                                                        </p>
                                                        <br>
                                                        <h3>Suite Rooms</h3>
                                                        <p>
                                                            good for 2 pax<br>
                                                            1 Queen Bed<br>
                                                            P2,459/night
                                                        </p><br>
                                                        <h3>Amenities</h3>
                                                        <p>
                                                            Massage<br>
                                                            Swimming Pool<br>
                                                            Dining Restaurant
                                                        </p>
                                                    </div><!--End tag for tabs4-2-->


                                                    <div id="tabs4-3">
                                                        <h1>Solano Hotel</h1>
                                                        <img src="assets/images/inn/bata3.png" alt="">
                                                        <p>Location: Lipa, Batangas<br>
                                                            Near STAR Tollway (Toll Road)<br>
                                                            Check-in: 2PM || Check-out: 12NN </p>
                                                        <center>
                                                            <div class="stars">Ratings:
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                        </center><br></br>

                                                        <h3>Superior Double Room</h3>
                                                        <p>
                                                            good for 4 pax (2 Adults, 2 Kids)<br>
                                                            2 Double Beds<br>
                                                            P5,599/night
                                                        </p>
                                                        <br>
                                                        <h3>Deluxe Double Room</h3>
                                                        <p>
                                                            good for 4 pax (2 Adults, 2 Kids)<br>
                                                            2 double beds or 2 single beds<br>
                                                            P6,399/night
                                                        </p>
                                                        <br>
                                                        <h3>Suite</h3>
                                                        <p>
                                                            good for 4 pax (2 Adults, 2 Kids)<br>
                                                            1 king bed or 1 king bed and 1 single bed<br>
                                                            P8,999/night
                                                        </p><br>
                                                        <h3>Amenities</h3>
                                                        <p>
                                                            Massage<br>
                                                            Swimming Pool<br>
                                                            Wifi<br>
                                                            Sauna<br>
                                                            Game room<br>
                                                            Garden<br>
                                                            Dining Restaurant
                                                        </p>
                                                    </div><!--End tag for tabs4-3-->
                                                </div><!--End tag for conts-->
                                            </div><!--End tag for tabs4-->
                                        </div><!--End tag for conts-->

                                        <div class=conts>
                                            <div id="tabs-5"> <!--Resort-->
                                                <div id="tabs5">
                                                    <ul>
                                                        <li><a href="#tabs5-1">Camp Netanya Resort and Spa</a></li>
                                                        <li><a href="#tabs5-2">Batangas Country Club</a></li>
                                                    </ul>

                                                    <div class=conts1>
                                                        <div id="tabs5-1">
                                                            <h1>Camp Netanya Resort and Spa</h1>
                                                            <img src="assets/images/Resort/bata1.png" alt="">
                                                            <p>Location: Mabini, Batangas<br>
                                                                Check-in: 2PM || Check-out: 12NN <br>
                                                            </p><br></br>

                                                            <h3>ROOM TYPE 1</h3>
                                                            <p>
                                                                <img src="assets/images/Resort/bata-pack1.jpg" alt="">
                                                                Deluxe Twin <br>
                                                                good for 2 pax<br>
                                                                2 single beds<br>
                                                                Parking, Coffee & tea, Free WiFi, Drinking water<br>
                                                                P5,572/night
                                                            </p>
                                                            <br><br>
                                                            <h3>ROOM TYPE 2</h3>
                                                            <p>
                                                                <img src="assets/images/Resort/bata-pack2.png" alt="">
                                                                Superior - King Size Bed<br>
                                                                good for 2-3 pax<br>
                                                                Parking, Coffee & tea, Free WiFi, Drinking water<br>
                                                                P6,368/night
                                                            </p>
                                                            <br><br>
                                                            <h3>ROOM TYPE 3</h3>
                                                            <p>
                                                                <img src="assets/images/Resort/bata-pack3.png" alt="">
                                                                Villa <br>
                                                                good for 2-4 pax<br>
                                                                Parking, Coffee & tea, Free WiFi, Drinking water<br>
                                                                1 king bed <br>
                                                                P6,999/night
                                                            </p>
                                                            <br><br>


                                                        </div><!--End tag for tabs5-1-->
                                                        <div id="tabs5-2">
                                                            <h1>Batangas Country Club</h1>
                                                            <img src="assets/images/Resort/bata2.png" alt="">
                                                            <center>
                                                                <div class="stars">Ratings:
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </center><br></br>

                                                            <h3>Superior Room</h3>
                                                            <p>
                                                                <img src="assets/images/Resort/bata-pack1.jpg" alt="">
                                                                Parking, Express check-in, Free WiFi, Free fitness center
                                                                access <br>
                                                                good for 2 pax<br>
                                                                Free breakfast for 2<br>
                                                                P3,502/night
                                                            </p>
                                                            <br><br>
                                                            <h3>Amenities and Other Activities</h3>
                                                            <p>
                                                                Firness Center (1PM to 10PM)<br>
                                                                Spa<br>
                                                                Swimming pools and Slides (7AM to 10PM only)<br>
                                                            </p>
                                                        </div><!--End tag for tabs5-2-->
                                                    </div><!--End tag for conts-->
                                                </div><!--End tag for tabs5-->
                                            </div><!--End tag for conts-->

                                        </div><!--End tag for tabs-->
                                    </div><!--End tag for content-->
                                </div><!--End tag for box-->
                            </div><!--End tag for box-container-->

        </section>

        <!-- packages section ends -->

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
        <!-- brand section ends  -->

        <!-- footer section  -->
        <?php include_once 'footer.php' ;?>


        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-- custom js file link  -->
        <script src="script/ps.js"></script>

    </body>

    </html>
    <?php
} else {
    header("Location: loginpage.php");
    exit();
}
?>