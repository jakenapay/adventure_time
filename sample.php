
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
                <a class="nav-link active" aria-current="page" href="home.php" style="color: white; font-family: 'Nunito', sans-serif;">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="book.php" style="color: white; font-family: 'Nunito', sans-serif;">Book</a>
                <li class="nav-item">
                <a class="nav-link" href="#footer" style="color: white; font-family: 'Nunito', sans-serif;">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a style="color: white; font-family: 'Nunito', sans-serif;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Packages
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="PS1.php" style="font-family: 'Nunito', sans-serif; font-size: 20px;">Batangas</a></li>
                            <li><a class="dropdown-item" href="PS4.php" style="font-family: 'Nunito', sans-serif; font-size: 20px;">Bohol</a></li>
                            <li><a class="dropdown-item" href="PS2.php" style="font-family: 'Nunito', sans-serif; font-size: 20px;">Cebu</a></li>
                            <li><a class="dropdown-item" href="PS.php" style="font-family: 'Nunito', sans-serif; font-size: 20px;">Pangasinan</a></li>
                            <li><a class="dropdown-item" href="PS3.php" style="font-family: 'Nunito', sans-serif; font-size: 20px;">Siargao</a></li>
                        </ul>
                </li>
                <li class="nav-item dropdown">
                    <a style="color: white; font-family: 'Nunito', sans-serif;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#" style="font-family: 'Nunito', sans-serif; font-size: 20px;">Hello, <?php echo $_SESSION['name']; ?>!</a></li>
                            <li><a class="dropdown-item" href="logout.php" style="font-family: 'Nunito', sans-serif; font-size: 20px;">Log-out</a></li>
                        </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    
    <!-- header section ends -->

    <!-- packages section starts  -->
    
<section class="packages" id="packages">
    
    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="assets/images/pang-header.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> PANGASINAN </h3>
                <p>Popular tourist attractions in Pangasinan include the Hundred Islands National Park in Alaminos the white-sand beaches of Bolinao and Dasol.
                     Dagupan City is known for its Bangus Festival ("Milkfish Festival"). Pangasinan is also known for its delicious mangoes and ceramic oven-baked 
                     Calasiao puto ("native rice cake"). Pangasinan occupies a strategic geo-political position in the central plain of Luzon. 
                     Pangasinan has been described as the gateway to northern Luzon.</p>
            
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
                                 <li><a href="#tabs1-1">Treasures of Bolinao</a></li>
                                 <li><a href="#tabs1-2">Tambobong White Beach Resort </a></li>
                                 <li><a href="#tabs1-3">Grey Sands Beach and Resort </a></li>
                                 <li><a href="#tabs1-4">Tondol White Sand Beach </a></li>
                                </ul>
                    
                             <div class=conts1>
                                <div id="tabs1-1">
                                    <h1>Treasures of Bolinao</h1>
                                    <div class=image><img src="assets/images/beach/pang1.jpg" alt="" ></div>
                                    <p>Location: Patar, Bolinao, Pangasinan<br>
                                        Check-in: 2PM || Check-out: 12NN </p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>PACKAGE 1</h3>
                                         <p>
                                            <img src="assets/images/beach/pang-pack1.jpg" alt="" >
                                            Mainhouse Garden View Standard Room <br>
                                            good for 2 pax<br>
                                            free breakfast<br>
                                            free entertainment activity for 1 hour<br>
                                            P6,000/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            <img src="assets/images/beach/pang-pack2.jpg" alt="" >
                                            Mainhouse Ocean View Suite <br>
                                            good for 4 - 6 pax<br>
                                            free breakfast<br>
                                            free entertainment activity for 1 hour <br>
                                            P10,000/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 3</h3>
                                        <p>
                                            <img src="assets/images/beach/pang-pack3.jpg" alt="" >
                                            Mainhouse Ocean View VIP Room <br>
                                            good for 4 - 6 pax<br>
                                            free breakfast<br>
                                            free entertainment activity for 1 hour <br>
                                            P12,000/night
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            Island hopping (Daytime)<br>
                                            Snorkeling (Daytime)<br>
                                            Bowling (1PM to 10PM)<br>
                                            Karaoke (until 10PM only)<br>
                                            Swimming pool (7AM to 10PM only)<br>
                                        </p>
                                </div> <!--End tag for tabs1-1-->

                                <div id="tabs1-2">
                                    <h1>Tambobong White Beach Resort</h1>
                                    <div class=image><img src="assets/images/beach/pang2.jpg" alt="" ></div>
                                    <p>Location: Brgy. Tambobong, Dasol, Pangasinan<br>
                                        Check-in: 2PM || Check-out: 12NN </p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>PACKAGE 1</h3>
                                         <p>
                                            Standard Room <br>
                                            good for 2 pax<br>
                                            free breakfast<br>
                                            P3,000/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            Regular Room <br>
                                            good for 4 pax<br>
                                            free breakfast<br>
                                            P6,500/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 3</h3>
                                        <p>
                                            VIP Room <br>
                                            good for 4 pax<br>
                                            free breakfast<br>
                                            P10,000/night
                                        </p>
                                </div> <!--End tag for tabs1-2-->

                                <div id="tabs1-3">
                                    <h1>Grey Sands Beach & Resort</h1>
                                    <img src="assets/images/beach/pang3.jpg" alt="" >
                                    <p>Location: Nibaliw West, San Fabian, Pangasinan<br>
                                        Check-in: 2PM || Check-out: 12NN </p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>Standard Room</h3>
                                         <p>
                                            good for 2 pax<br>
                                            1 Double Bed<br>
                                            free breakfast<br>
                                            P1,500/night
                                        </p>
                                        <br><br>
                                        <h3>Deluxe Room</h3>
                                         <p>
                                            good for 2 pax<br>
                                            1 Queen Bed<br>
                                            free breakfast<br>
                                            P2,000/night
                                        </p>
                                        <br><br>
                                        <h3>Family Room</h3>
                                         <p>
                                            good for 4 pax<br>
                                            2 Double Bed<br>
                                            free breakfast<br>
                                            P2,500/night
                                        </p>
                                        <br><br>
                                        <h3>Cabin Room</h3>
                                         <p>
                                            good for 6 pax<br>
                                            2 Bunk Beds<br>
                                            free breakfast<br>
                                            P2,800/night
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            Island hopping (Daytime)<br>
                                            Snorkeling (Daytime)<br>
                                            Banana Boat (Daytime)<br>
                                            Kayak (Daytime)<br>
                                            Swimming pool (7AM to 10PM only)<br>
                                        </p>
                                </div> <!--End tag for tabs1-3-->

                                <div id="tabs1-4">
                                    <h1>Sarmiento Beach House
                                        <br>Tondol White Beach Resort</h1>
                                    <div class=image><img src="assets/images/beach/pang4.jpg" alt="" ></div>
                                    <p>Location: Anda, Pangasinan<br>
                                        Check-in: 2PM || Check-out: 12NN </p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>Deluxe Room</h3>
                                         <div class=image><img src="assets/images/beach/pang-pack4.jpg" alt="" ></div>
                                         <p>
                                            good for 6 pax<br>
                                            2 Double Bed and 1 Sofa<br>
                                            P6,500/night
                                        </p>
                                        <br><br>
                                        <h3>Standard Room</h3>
                                         <div class=image><img src="assets/images/beach/pang-pack5.jpg" alt="" ></div>
                                         <p>
                                            good for 7 pax<br>
                                            3 Double Bed<br>
                                            P7,000/night
                                        </p>
                                        <br><br>
                                        <h3>S&C Room</h3>
                                        <div class=image><img src="assets/images/beach/pang-pack6.jpg" alt="" ></div>
                                         <p>
                                            good for 6 pax<br>
                                            2 Double Bed and 1 Twin<br>
                                            P7,500/night
                                        </p>
                                        <br><br>
                                        <h3>Fan House</h3>
                                        <div class=image><img src="assets/images/beach/pang-pack7.jpg" alt="" ></div>
                                         <p>
                                            good for 15 pax<br>
                                            4 Queen Bed, 2 King Bed, 1 Double Bed<br>
                                            No Aircon <br>
                                            P8,500/night
                                        </p>
                                        <br><br>
                                        <h3>Aircon House</h3>
                                        <div class=image><img src="assets/images/beach/pang-pack8.jpg" alt="" ></div>
                                         <p>
                                            good for 15 pax<br>
                                            6 Double Bed, 3 Single Bed<br>
                                            P15,000/night
                                        </p>
                                </div> <!--End tag for tabs4-->
                            </div><!--End tag for tabs1-1 conts-->
                        </div><!--End tag for Beach-->
                        </div><!--End tag for conts-->

                    <div class=conts>
                        <div id="tabs-2"> <!--Mountain-->
                        <div id="tabs2"> 
                                <ul>
                                 <li><a href="#tabs2-1">Balungao Hilltop Adventure</a></li>
                                 <li><a href="#tabs2-2">VIEWtiful Deck Nature Park </a></li>
                                </ul>
                                <div class=conts1>
                                    
                                <div id="tabs2-1">
                                    <h1>Balungao Hilltop Adventure</h1>
                                    <img src="assets/images/mountain/pang-pack1.jpg" alt="" >
                                    <p>Location: Balungao, Pangasinan<br>
                                        Check-in: 5AM || Check-out: 5PM <br>
                                        NO OVERNIGHT STAY </p><br></br>
                        
                                         <h3>Entrance Fee</h3>
                                         <p>
                                            Adult: P50 <br>
                                            Child (12y/o below) ans Senior Citizen: P20
                                        </p>
                                        <br><br>
                                        <h3>Shed</h3>
                                         <p>
                                            Kubo: P350 <br>
                                            Concrete: P400 <br>
                                            Pavilion: P3,500 <br>
                                            Function Hall: P5,000<br>
                                            Hotel: P2,000
                                        </p>
                                        <br><br>
                                        <h3>Adventure Facilities</h3>
                                        <div class=image><img src="assets/images/mountain/pang-pack3.jpg" alt="" ></div>
                                         <p>
                                            Zipline1 620m: P300<br>
                                            Zipline2 1.4 km: P500<br>
                                            Twin Ride (Zipline No.1 & 2): P700.00<br>
                                            Aero Cable Biking: P150/ride<br>
                                            ATV Driving: P300/15mins<br>
                                            Cable Package (Zipline1, 2, Cable Biking): P800/ride<br>
                                        </p>
                                        <br><br>
                                        <h3> Adventure Package</h3>
                                        <div class=image><img src="assets/images/mountain/pang-pack2.jpg" alt="" ></div>
                                         <p>
                                           Adventure Package A: P1,000(Zipline No.1 and 2, Cable Biking, plus 15 mins ATV driving)<br>
                                           Adventure Package B: p850 (Zipline No.1, and 2, plus 15 mins ATV driving) <br>
                                           Hiking Environmental Fee: P20/hike/head<br>
                                           Basic Rope Course: P300/pax<br>
                                           Wall Climbing/Rapelling: P100/pax<br>
                                        </p>
                                        <br><br>
                                </div> <!--End tag for tabs2-1-->

                                <div id="tabs2-2">
                                    <h1>VIEWtiful Deck Nature Park</h1>
                                    <img src="assets/images/mountain/pang2.jpg" alt="" >
                                    <p>Location: Diaz, Umingan, Pangasinan<br>
                                        Opening: 6AM || Closing: 7PM <br>
                                        NO OVERNIGHT STAY </p><br></br>
                        
                                         <h3>Entrance Fee</h3>
                                         <p>
                                            Adult: P50 <br>
                                            Child (12y/o below) ans Senior Citizen: P20
                                        </p>
                                        <br><br>
                                        <h3>Transient House Near the Tourist Spot</h3>
                                         <p>
                                            Since there is no overnight stay, choices of transient house are given.<br>
                                        </p>
                                        <br><br>
                                        <h3>Aqua City Room Rentals</h3>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div></center>
                                        <p>
                                            P1,500 per Night<br>
                                            with Aircon, Shower, Mini-Ref<br>
                                            Near the town proper
                                        </p>
                                       
                                        <h3>Hotel New York</h3>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div></center>
                                        <p>
                                            P1,500 per Night<br>
                                            with Aircon, Shower, Mini-Ref<br>
                                            Near the town proper
                                        </p>
                                </div> <!--End tag for tabs2-2-->
                            </div><!--End tag for conts-->
                        </div><!--End tag for tabs2-->
                        </div><!--End tag for conts-->

                        <div class=conts>
                        <div id="tabs-3"> <!--Tourist-->
                        <div id="tabs3"> 
                                <ul>
                                 <li><a href="#tabs3-1">Our Lady of Manaoag Shrine</a></li>
                                 <li><a href="#tabs3-2">Tayug Sunflower Eco Park </a></li>
                                 <li><a href="#tabs3-3">Bolinao Falls </a></li>
                                 <li><a href="#tabs3-4">Hundred Islands National Park </a></li>
                                 <li><a href="#tabs3-5">Natividad Sky Park </a></li>
                                </ul>
                    
                             <div class=conts1>

                             <div id="tabs3-1">
                                <h1>Our Lady of Manaoag Shrine</h1>
                                    <div class=image><img src="assets/images/tourist/pang1.jpg" alt="" ></div>
                                    <p>Location: Manaoag, Pangasinan</p>
                                    <br></br>
                        
                                    <h3>Transient House Near the Church</h3>
                                    <p>
                                       Here are the hotels near the location<br>
                                    </p>
                                    <br><br>
                       <h3>Emerald Hotel</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div></center>
                       <p>
                           P1,500 for 24 Hours<br>
                           with Aircon, Shower, Mini-Ref<br>
                           Good for 4 pax
                       </p>
                      
                       <h3>Star Avenue Hotel</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div></center>
                       <p>
                           P1,500 for 24 Hours<br>
                           with Aircon, Shower, Mini-Ref<br>
                           Good for 4 pax
                       </p>
                                </div><!--End tag for tabs3-2-->

                                <div id="tabs3-2">
                                <h1>Tayug Sunflower Eco Park</h1>
                                    <div class=image><img src="assets/images/tourist/pang3.jpg" alt="" ></div>
                                    <p>Location: Tayug, Pangasinan</p>
                                    <br></br>
                        
                                    <h3>Transient House/ Hotels Near the Spot</h3>
                                    <p>
                                       Here are the hotels near the location<br>
                                    </p>
                                    <br><br>
                       <h3>PvZ Hotel</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div></center>
                       <p>
                           P2,000 for 24 Hours<br>
                           with Aircon, Shower, Mini-Ref<br>
                           Good for 4 pax
                       </p><br>
                      
                       <h3>San Miguel Transient Rooms</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div></center>
                       <p>
                           P1,000 for 24 Hours<br>
                           with Aircon, Shower, Mini-Ref<br>
                           Good for 4 pax
                       </p><br>

                       <h3>Hotel Saga</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div></center>
                       <p>
                           P2,500 for 24 Hours<br>
                           with Aircon, Shower, Mini-Ref <br>
                           with Breakfast<br>
                           Good for 4 pax
                       </p>
                                </div><!--End tag for tabs3-2-->

                                <div id="tabs3-3">
                                <h1>Bolinao Falls</h1>
                                    <div class=image><img src="assets/images/tourist/pang4.jpg" alt="" ></div>
                                    <p>Location: Bolinao, Pangasinan</p>
                                    <br></br>
                        
                                    <h3>Kubo for Rent</h3>
                                    <img src="assets/images/tourist/pang-pack1.jpg" alt="" >
                                    <p>
                                      Small Kubo (4 pax): P300<br>
                                      Medium Kubo (8 pax): P700<br>
                                      Large Kubo (15 pax): P1,500<br>
                                      Note: Rentals are available for 22 hours.
                                    </p>
                                </div><!--End tag for tabs3-3-->

                                <div id="tabs3-4">
                                <h1>Hundred Islands National Park</h1>
                                    <div class=image><img src="assets/images/tourist/pang2.jpg" alt="" ></div>
                                    <p>Location: Alaminos, Pangasinan<br>
                                       Check-in for 22 hours</p><br></br>
                        
                                         <h3>Island Tropic Hotel</h3>
                                         <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div></center>
                                         <p>
                                            <img src="assets/images/tourist/pang-pack4.jpg" alt="" >
                                            good for 2 - 4 pax<br>
                                            free breakfast<br>
                                            free entertainment activity for 1 hour<br>
                                            P6,000/night
                                        </p>
                                        <br><br>
                                        <h3>Najera Transient Rooms </h3>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center>
                                        <p>
                                            <img src="assets/images/tourist/pang-pack5.jpg" alt="" >
                                            good for 4 - 6 pax<br>
                                            free breakfast<br>
                                            free entertainment activity for 1 hour <br>
                                            P10,000/night
                                        </p>
                                        <br><br>
                                        <h3>Hundred Isles Transient House</h3>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div></center>
                                        <p>
                                            <img src="assets/images/tourist/pang-pack6.jpg" alt="" >
                                            good for 4 - 6 pax<br>
                                            free breakfast<br>
                                            free entertainment activity for 1 hour <br>
                                            P10,000/night
                                        </p>
                                </div><!--End tag for tabs3-4-->
                                <div id="tabs3-5">
                                <h1>Natividad Sky Plaza</h1>
                                    <div class=image><img src="assets/images/tourist/pang5.jpg" alt="" ></div>
                                    <p>Location: Natividad, Pangasinan</p>
                                    <br></br>
                        
                                    <h3>Transient House/ Hotels Near the Spot</h3>
                                    <p>
                                       Here are the hotels near the location<br>
                                    </p>
                                    <br><br>
                       <h3>Sky Hotel</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div></center>
                       <p>
                           P2,000 for 22 Hours<br>
                           with Shower, Mini-Ref<br>
                           Good for 4 pax
                       </p><br>
                      
                       <h3>Lights Transient Rooms</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div></center>
                       <p>
                           P2,000 for 22 Hours<br>
                           with Aircon, Shower, Mini-Ref<br>
                           Good for 4 pax
                       </p><br>

                       <h3>Hotel Mercury</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div></center>
                       <p>
                           P3,000 for 22 Hours<br>
                           with Aircon, Shower, Mini-Ref <br>
                           with Breakfast<br>
                           Good for 4 pax
                       </p>
                                </div><!--End tag for tabs3-3-->
                            </div><!--End tag for conts-->
                        </div><!--End tag for tabs3-->
                        </div><!--End tag for conts-->

                    <div class=conts>
                        <div id="tabs-4"> <!--Inn-->
                        <div id="tabs4"> 
                                <ul>
                                 <li><a href="#tabs4-1">2428 Suites</a></li>
                                 <li><a href="#tabs4-2">RDT Hotels & Spa </a></li>
                                 <li><a href="#tabs4-3">Ruperto's Inland resort </a></li>
                                </ul>
                    
                             <div class=conts1>
                                <div id="tabs4-1">
                                <h1>2428 Suites</h1>
                                    <img src="assets/images/inn/pang1.jpg" alt="" >
                                    <p>Location: Urdaneta, Pangasinan<br>
                                    Near TPLEX Urdaneta Exit, and McArthur Highway<br>
                                        Check-in: 2PM || Check-out: 12NN </p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>Standard Room</h3>
                                         <p>
                                            good for 2 pax<br>
                                            1 Double Bed<br>
                                            P1,000/night
                                        </p>
                                        <br><br>
                                        <h3>First Class Room</h3>
                                         <p>
                                            good for 2 pax<br>
                                            1 Queen Bed<br>
                                            P1,300/night
                                        </p>
                                        <br><br>
                                        <h3>VIP Room</h3>
                                         <p>
                                            good for 4 pax<br>
                                            2 Double Bed<br>
                                            P1,500/night
                                        </p>
                                </div><!--End tag for tabs4-1-->

                                <div id="tabs4-2">
                                <h1>RDT Hotel and Spa</h1>
                                    <img src="assets/images/inn/pang2.jpg" alt="" >
                                    <p>Location: Pozorrubio, Pangasinan<br>
                                    Near TPLEX Pozurrubio Exit, and McArthur Highway<br>
                                        Check-in: 2PM || Check-out: 12NN </p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>Standard Room</h3>
                                         <p>
                                            good for 2 pax<br>
                                            1 Double Bed<br>
                                            P500/night
                                        </p>
                                        <br>
                                        <h3>Economy Room</h3>
                                         <p>
                                            good for 2 pax<br>
                                            P700/night
                                        </p>
                                        <br>
                                        <h3>Business Room</h3>
                                         <p>
                                            good for 4 pax<br>
                                            2 Double Bed<br>
                                            P1,000/night
                                        </p><br>
                                        <h3>Amenities</h3>
                                         <p>
                                            Massage<br>
                                            Swimming Pool<br>
                                            Dining Restaurant
                                        </p>
                                </div><!--End tag for tabs4-2-->


                                <div id="tabs4-2">
                                <h1>Ruperto's Inland</h1>
                                    <img src="assets/images/inn/pang3.jpg" alt="" >
                                    <p>Location: Binalonan, Pangasinan<br>
                                    Near TPLEX Binalonan Exit, and McArthur Highway<br>
                                        Check-in: 2PM || Check-out: 12NN </p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>Room for 2</h3>
                                         <p>
                                            good for 2 pax<br>
                                            1 Double Bed<br>
                                            P1,500/night
                                        </p>
                                        <br>
                                        <h3>Room for 4</h3>
                                         <p>
                                            good for 2 pax<br>
                                            2 Double Bed<br>
                                            P1,700/night
                                        </p>
                                        <br>
                                        <h3>Room for 6</h3>
                                         <p>
                                            good for 6 pax<br>
                                            3 Double Bed<br>
                                            P2,000/night
                                        </p><br>
                                        <h3>Amenities</h3>
                                         <p>
                                            Massage<br>
                                            Swimming Pool<br>
                                            Wifi<br>
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
                                 <li><a href="#tabs5-1">Riverside Resort</a></li>
                                 <li><a href="#tabs5-2">Aquatica Marina Water Park </a></li>
                                </ul>
                    
                             <div class=conts1>
                                <div id="tabs5-1">
                                <h1>Riverside Resort</h1>
                                    <img src="assets/images/Resort/pang1.jpg" alt="" >
                                    <p>Location: Laoac, Pangasinan<br>
                                        Check-in: 2PM || Check-out: 12NN <br>
                                       </p><br></br>
                        
                                         <h3>Entrance Fee</h3>
                                         <p>
                                            Adult: P60 <br>
                                            Child (12y/o below) ans Senior Citizen: P50
                                        </p>
                                        <br><br>
                                        <h3>Shed</h3>
                                         <p>
                                            Kubo: P300 <br>
                                            Cottage: P200<br>
                                            Villa: P2,000 <br>
                                            Hotel: P3,000
                                        </p>
                                        <br><br>
                                        <h3>Amenities</h3>
                                         <p>
                                            Karaoke<br>
                                            3 Pools with Slides<br>
                                        </p>
                                </div><!--End tag for tabs5-1-->
                                <div id="tabs5-2">
                                <h1>Aquatica Marina Water Park</h1>
                                    <img src="assets/images/Resort/pang2.jpg" alt="" >
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>PACKAGE 1</h3>
                                         <p>
                                            <img src="assets/images/Resort/pang-pack1.jpg" alt="" >
                                            Standard Room <br>
                                            good for 2 pax<br>
                                            free breakfast<br>
                                            P4,000/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            <img src="assets/images/Resort/pang-pack2.jpg" alt="" >
                                            Deluxe Room<br>
                                            good for 4 pax<br>
                                            free breakfast<br>
                                            P8,000/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 3</h3>
                                        <p>
                                            <img src="assets/images/Resort/pang-pack3.jpg" alt="" >
                                            VIP Room <br>
                                            good for 6 pax<br>
                                            free breakfast<br>
                                            free entertainment activity for 1 hour <br>
                                            P12,000/night
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            Bowling and Arcades (1PM to 10PM)<br>
                                            Karaoke (until 10PM only)<br>
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

    <h1 class="credit"> created by <span><a href="adventure.php">Adventure Time Crew</a></span> | all rights reserved! </h1>

</section>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="script/ps.js"></script>

</body>
</html>
<?php 
