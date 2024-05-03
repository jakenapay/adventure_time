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

        <link rel="stylesheet" href="css/jquery-ui.css">
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
            <img src="assets/images/cebu-header.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> CEBU </h3>
                <p>It is one of the country's largest cities and is a bustling port. Its harbour is provided by the sheltered strait between Mactan Island and the coast. 
                     Cebu City, Phil. The country's oldest settlement, it is also one of its most historic and retains much of the flavour of its long Spanish heritage.
                     Considered as the oldest city in the Philippines, Cebu is the center of trade, commerce, and tourism in the Visayas. With ancient Spanish forts, incredible marine parks, mouthwatering food, and thriving business parks, there are a lot to experiences to be had in Cebu, both for business and pleasure.</p>
            
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
                                 <li><a href="#tabs1-1">Pescador Island</a></li>
                                 <li><a href="#tabs1-2">Lambug Beach </a></li>
                                 <li><a href="#tabs1-3">Virgin Island </a></li>
                                 <li><a href="#tabs1-4">Langub Beach </a></li>
                                </ul>
                    
                             <div class=conts1>
                                <div id="tabs1-1">
                                    <h1>Pescador Island</h1>
                                    <div class=image><img src="assets/images/beach/cebu1.jpg" alt="" ></div>
                                    <p>Location: Tañon Strait, Moalboal, Cebu<br>
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
                                            <img src="assets/images/beach/cebu-pack1.jpg" alt="" >
                                           Sardine Run <br>
                                            good for 4 - 6 pax<br>
                                            free lunch<br>
                                            free transportation<br>
                                            P1,250 to 7,000
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            <img src="assets/images/beach/cebu-pack2.jpg" alt="" >
                                            Whale Shark Watching <br>
                                            good for 7 - 14 pax<br>
                                            free breakfast<br>
                                            free camera rental <br>
                                            P2,800 to 11,200    
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 3</h3>
                                        <p>
                                            <img src="assets/images/beach/cebu-pack3.jpg" alt="" >
                                            Tumalog Falls <br>
                                            good for 5 - 10 pax<br>
                                            free breakfast and lunch<br>
                                            free local guide <br>
                                            P2,900 to 11,700
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            Island hopping (Daytime)<br>
                                            Snorkeling (Daytime)<br>
                                            Boat Ride (10AM to 4PM)<br>
                                            Sumilon Sandbar (24 hrs)<br>
                                            Turtle Point (7AM to 10PM only)<br> 
                                        </p>
                                </div> <!--End tag for tabs1-1-->

                                <div id="tabs1-2">
                                    <h1>Lambug Beach</h1>
                                    <div class=image><img src="assets/images/beach/cebu2.jpg" alt="" ></div>
                                    <p>Location: Brgy. Lambug, Badian, Cebu<br>
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
                                            free lunch<br>
                                            P2,500/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            Group/Big Room <br>
                                            good for 6 pax<br>
                                            free lunch<br>
                                            P7,500/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 3</h3>
                                        <p>
                                            VIP Room <br>
                                            good for 4 - 5 pax<br>
                                            free lunch<br>
                                            P10,500/night
                                        </p>
                                </div> <!--End tag for tabs1-2-->

                                <div id="tabs1-3">
                                    <h1>Virgin Island</h1>
                                    <img src="assets/images/beach/cebu3.jpg" alt="" >
                                    <p>Location: Sta. Fe, Bantayan Island, Cebu<br>
                                        Check-in: 2PM || Check-out: 12NN </p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>Bamboo Cottage</h3>
                                         <p>
                                            good for 2 pax<br>
                                            1 Double Bed<br>
                                            free lunch<br>
                                            P3,000/night
                                        </p>
                                        <br><br>
                                        <h3>Family Cottage</h3>
                                         <p>
                                            good for 4 pax<br>
                                            1 Queen Bed<br>
                                            free lunch<br>
                                            P5,000/night
                                        </p>
                                        <br><br>
                                        <h3>Barkada Cottage</h3>
                                         <p>
                                            good for 8 pax<br>
                                            2 Double Bed<br>
                                            free breakfast<br>
                                            P7,000/night
                                        </p>
                                        <br><br>
                                        <h3>Open Cottage</h3>
                                         <p>
                                            good for 5 pax<br>
                                            2 bed<br>
                                            free luncht<br>
                                            P1,800/night
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            Pristine White Sand Beach <br>
                                            Snorkeling <br>
                                            Beach Volleyball (Daytime)<br>
                                            Chill. Drink. Eat<br>
                                            Boat Ride<br>
                                        </p>
                                </div> <!--End tag for tabs1-3-->

                                <div id="tabs1-4">
                                    <h1>Langub Beach
                                        <br>Slam's Garden Dive Resor</h1>
                                    <div class=image><img src="assets/images/beach/cebu4.jpg" alt="" ></div>
                                    <p>Location: Santa Fe, Cebu<br>
                                        Check-in: 2PM || Check-out: 12NN </p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>Standard Room</h3>
                                         <div class=image><img src="assets/images/beach/cebu-pack4.jpg" alt="" ></div>
                                         <p>
                                            good for 4 pax<br>
                                            2 single Bed <br>
                                            P4,500/night
                                        </p>
                                        <br><br>
                                        <h3>Deluxe Room</h3>
                                         <div class=image><img src="assets/images/beach/cebu-pack5.jpg" alt="" ></div>
                                         <p>
                                            good for 8 pax<br>
                                            2 Double Bed<br>
                                            P7,000/night
                                        </p>
                                        <br><br>
                                        <h3>Couple Room</h3>
                                        <div class=image><img src="assets/images/beach/cebu-pack6.jpg" alt="" ></div>
                                         <p>
                                            good for 2 pax<br>
                                            1 double bed<br>
                                            P3,500/night
                                        </p>
                                        <br><br>
                                        <h3>Superior Room</h3>
                                        <div class=image><img src="assets/images/beach/cebu-pack7.jpg" alt="" ></div>
                                         <p>
                                            good for 10 pax<br>
                                            2 Queen Bed and sofa <br>
                                            With Aircon <br>
                                            P9,500/night
                                        </p>
                                        <br><br>
                                        <h3>Family House</h3>
                                        <div class=image><img src="assets/images/beach/cebu-pack8.jpg" alt="" ></div>
                                         <p>
                                            good for 15 pax<br>
                                            5 Double Bed, 2 Single Bed<br>
                                            P13,000/night
                                        </p>
                                </div> <!--End tag for tabs4-->
                            </div><!--End tag for tabs1-1 conts-->
                        </div><!--End tag for Beach-->
                        </div><!--End tag for conts-->

                    <div class=conts>
                        <div id="tabs-2"> <!--Mountain-->
                        <div id="tabs2"> 
                                <ul>
                                 <li><a href="#tabs2-1">Osmeña Peak</a></li>
                                 <li><a href="#tabs2-2">Mt. Manunggal </a></li>
                                </ul>
                                <div class=conts1>
                                    
                                <div id="tabs2-1">
                                    <h1>Osmeña Peak</h1>
                                    <img src="assets/images/mountain/cebu-pack1.jpg" alt="" >
                                    <p>Location: Dalaguete, Cebu<br>
                                        Check-in: 5AM || Check-out: 5PM <br>
                                        NO OVERNIGHT STAY </p><br></br>
                        
                                         <h3>Entrance Fee</h3>
                                         <p>
                                            Adult: P50 <br>
                                            Child (12y/o below) ans Senior Citizen: P30
                                        </p>
                                        <br><br>
                                        <h3>Checklist for your travel bag to Osmeña Peak!</h3>
                                         <p>
                                            Water <br>
                                            Snacks <br>
                                            Comfortable walking shoes <br>
                                            Swimsuit, if you plan to visit the waterfalls too<br>
                                            Sunscreen
                                        </p>
                                        <br><br>
                                        <h3>Canyoneering Activity </h3>
                                        <div class=image><img src="assets/images/mountain/cebu-pack2.jpg" alt="" ></div>
                                         <p>
                                            Canyoneering begins in the mountain<br>
                                            Ends in the final level of Kawasan falls<br>
                                            Hiking (P500 with tour guide)<br>
                                            Water Rafting (P800/person)<br>
                                            Climbing (P900 with local guide)<br>
                                            Jumping off falls<br>
                                        </p>
                                        <br><br>
                                        <h3> Kawasan Falls </h3>
                                        <div class=image><img src="assets/images/mountain/cebu-pack3.jpg" alt="" ></div>
                                         <p>
                                           Swimming<br>
                                           Cliff diving <br>
                                           Hiking (P100 with tour guide)<br>
                                        </p>
                                        <br><br>
                                </div> <!--End tag for tabs2-1-->

                                <div id="tabs2-2">
                                    <h1>Mt.Manunggal</h1>
                                    <img src="assets/images/mountain/cebu2.jpg" alt="" >
                                    <p>Location: Balamban, Cebu<br>
                                        Opening: 6AM || Closing: 7PM <br>
                                        NO OVERNIGHT STAY </p><br></br>
                        
                                         <h3>Entrance Fee</h3>
                                         <p>
                                            Adult: P80 <br>
                                            Child (12y/o below) ans Senior Citizen: P60
                                        </p>
                                        <br><br>
                                        <h3>Baguio de Cebu Eco Mountain Adventures, also known as Mt. Manunggal Eco-Adventure</h3>
                                         <p>
                                            Attractions
                                        </p>
                                        <br><br>
                                        <h3>Skybike</h3>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div></center>
                                        <p>
                                            P150 per head, back and forth.
                                        </p>
                                       
                                        <h3>Horseback Riding</h3>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div></center>
                                        <p>
                                            P150 per head, per 15 minutes.
                                        </p>
                                </div> <!--End tag for tabs2-2-->
                            </div><!--End tag for conts-->
                        </div><!--End tag for tabs2-->
                        </div><!--End tag for conts-->

                        <div class=conts>
                        <div id="tabs-3"> <!--Tourist-->
                        <div id="tabs3"> 
                                <ul>
                                 <li><a href="#tabs3-1">Magellan's Cross</a></li>
                                 <li><a href="#tabs3-2">Grandeur of the Temple of Leah </a></li>
                                 <li><a href="#tabs3-3">Flowers at Sirao Garden </a></li>
                                 <li><a href="#tabs3-4">Museo Sugbo </a></li>
                                 <li><a href="#tabs3-5">Lechon Food Trip </a></li>
                                </ul>
                    
                             <div class=conts1>

                             <div id="tabs3-1">
                                <h1>Magellan's Cross</h1>
                                    <div class=image><img src="assets/images/tourist/cebu1.jpg" alt="" ></div>
                                    <p>Location:  P. Burgos Street, Cebu </p>
                                    <br></br>
                        
                                    <h3>Transient House Near the Church</h3>
                                    <p>
                                       Here are the hotels near the location<br>
                                    </p>
                                    <br><br>
                       <h3>Robe's Pension House</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div></center>
                       <p>
                           P950 for 24 Hours<br>
                           with 1 double bed and aircon<br>
                           Good for 3 - 4 pax
                       </p>
                      
                       <h3>Honey Hunt House Pension</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div></center>
                       <p>
                           P850 for 24 Hours<br>
                           with 2 single bed and aircon<br>
                           Good for 2 pax
                       </p>
                                </div><!--End tag for tabs3-2-->

                                <div id="tabs3-2">
                                <h1>Grandeur of the Temple of Leah</h1>
                                    <div class=image><img src="assets/images/tourist/cebu2.jpg" alt="" ></div>
                                    <p>Location: Barangay Busay, Cebu</p>
                                    <br></br>
                        
                                    <h3>Transient House/ Hotels Near the Spot</h3>
                                    <p>
                                       Here are the hotels near the location<br>
                                    </p>
                                    <br><br>
                       <h3>Rumah Highlands Hotel</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div></center>
                       <p>
                           P2,500 for 24 Hours<br>
                           with Aircon, Shower, Mini-Ref<br>
                           Good for 4 pax
                       </p><br>
                      
                       <h3>Cebu Hilltop Hotels</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div></center>
                       <p>
                           P1,500 for 24 Hours<br>
                           with Aircon, Shower, Mini-Ref<br>
                           Good for 4 pax
                       </p><br>

                       <h3>Brand Cebu House</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div></center>
                       <p>
                           P3,000 for 24 Hours<br>
                           with Aircon, Shower, Mini-Ref <br>
                           with Breakfast<br>
                           Good for 4 pax
                       </p>
                                </div><!--End tag for tabs3-2-->

                                <div id="tabs3-3">
                                <h1>Flowers at Sirao Garden</h1>
                                    <div class=image><img src="assets/images/tourist/cebu3.jpg" alt="" ></div>
                                    <p>Location: Busay, Cebu</p>
                                    <br></br>
                        
                                    <h3>Entrance Fee</h3>
                                    <h2>P100 for adults</h2>
                                    <h2>P80 for kids</h2>
                                    <img src="assets/images/tourist/cebu-pack1.jpg" alt="" >
                                    
                                </div><!--End tag for tabs3-3-->

                                <div id="tabs3-4">
                                <h1>Museo Sugbo</h1>
                                    <div class=image><img src="assets/images/tourist/cebum.jpg" alt="" ></div>
                                    <p>Location: 731 M. J. Cuenco Ave, Cebu City<br>
                                       Museum hours: 9:00am to 5:30pm</p><br></br>
                        
                                         <h3>Mad monkey hostel</h3>
                                         <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div></center>
                                         <p>
                                            <img src="assets/images/tourist/cebu-pack4.jpg" alt="" >
                                            good for 2 - 4 pax<br>
                                            free lunch<br>
                                            free entertainment activity for 1 hour<br>
                                            P3,000/night
                                        </p>
                                        <br><br>
                                        <h3>Rana Hotel </h3>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center>
                                        <p>
                                            <img src="assets/images/tourist/cebu-pack5.jpg" alt="" >
                                            good for 4 - 6 pax<br>
                                            free lunch<br>
                                            free entertainment activity for 1 hour <br>
                                            P4,000/night
                                        </p>
                                        <br><br>
                                        <h3>Casa Pelaez</h3>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div></center>
                                        <p>
                                            <img src="assets/images/tourist/cebu-pack6.jpg" alt="" >
                                            good for 4 - 6 pax<br>
                                            free lunch<br>
                                            free entertainment activity for 1 hour <br>
                                            P9,000/night
                                        </p>
                                </div><!--End tag for tabs3-4-->
                                <div id="tabs3-5">
                                <h1>Lechon Food Trip at House of Lechon</h1>
                                    <div class=image><img src="assets/images/tourist/cebu5.jpg" alt="" ></div>
                                    <p>Location: Acacia St. Cebu</p>
                                    <br></br>
                        
                                    <h3>Transient House/ Hotels Near the Spot</h3>
                                    <p>
                                       Here are the hotels near the location<br>
                                    </p>
                                    <br><br>
                       <h3>Hostel 7 Cebu</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div></center>
                       <p>
                           P600 for 22 Hours<br>
                           with Shower, Mini-Ref<br>
                           Good for 4 pax
                       </p><br>
                      
                       <h3>Pensionne la Florentina</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div></center>
                       <p>
                           P1,500 for 22 Hours<br>
                           with Aircon, Shower, Mini-Ref<br>
                           Good for 4 pax
                       </p><br>

                       <h3>The Maxwell Hotel</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div></center>
                       <p>
                           P1,000 for 22 Hours<br>
                           with Aircon, Shower, Mini-Ref <br>
                           with lunch<br>
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
                                 <li><a href="#tabs4-1">Cargotel Travel Inn</a></li>
                                 <li><a href="#tabs4-2">Express Inn </a></li>
                                 <li><a href="#tabs4-3">Frankfurter Deluxe Inn </a></li>
                                </ul>
                    
                             <div class=conts1>
                                <div id="tabs4-1">
                                <h1>Cargotel Travel Inn</h1>
                                    <img src="assets/images/inn/cebu1.jpg" alt="" >
                                    <p>Location: Mandaue, Cebu<br>
                                    1620 Hernan Cortes St, Mandaue City, Cebu<br>
                                        Check-in: 2PM || Check-out: 12NN </p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>Standard Triple </h3>
                                         <p>
                                            good for 3 pax<br>
                                            3 single Bed<br>
                                            P2,200/night
                                        </p>
                                        <br><br>
                                        <h3>Standard Twin Room</h3>
                                         <p>
                                            good for 2 pax<br>
                                            1 Queen Bed<br>
                                            P2,000/night
                                        </p>
                                        <br><br>
                                        <h3>Standard Fan Room</h3>
                                         <p>
                                            good for 6 pax<br>
                                            3 Double Bed<br>
                                            P3,500/night
                                        </p>
                                </div><!--End tag for tabs4-1-->

                                <div id="tabs4-2">
                                <h1>Express Inn</h1>
                                    <img src="assets/images/inn/cebu2.jpg" alt="" >
                                    <p>Location: Mabolo, Cebu<br>
                                    M.J Cuneco Ave. Mabolo, Cebu City<br>
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
                                            P1,100/night
                                        </p>
                                        <br>
                                        <h3>Family Room</h3>
                                         <p>
                                            good for 3 pax<br>
                                            P2,100/night
                                        </p>
                                        <br>
                                        <h3>Superior Double Room</h3>
                                         <p>
                                            good for 2 pax<br>
                                            1 Queen Bed<br>
                                            P1,100/night
                                        </p><br>
                                        <h3>Amenities</h3>
                                         <p>
                                            Massage<br>
                                            Swimming Pool<br>
                                            Dining Restaurant
                                        </p>
                                </div><!--End tag for tabs4-2-->


                                <div id="tabs4-2">
                                <h1>CebuView Tourist Inn</h1>
                                    <img src="assets/images/inn/cebu3.jpg" alt="" >
                                    <p>Location: Kalubihan, Cebu<br>
                                    200 Sanciangko St, Cebu City, <br>
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
                                            P1,000/night
                                        </p>
                                        <br>
                                        <h3>Family Room</h3>
                                         <p>
                                            good for 4 pax<br>
                                            2 Double Bed<br>
                                            P2,000/night
                                        </p>
                                        <br>
                                        <h3>Group Room</h3>
                                         <p>
                                            good for 6 pax<br>
                                            3 Double Bed<br>
                                            P3,00/night
                                        </p><br>
                                        <h3>Amenities</h3>
                                         <p>
                                            Massage<br>
                                            Laundry<br>
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
                                 <li><a href="#tabs5-1">Jpark Island Resort & Waterpark</a></li>
                                 <li><a href="#tabs5-2">Plantation Bay Resort & Spa </a></li>
                                </ul>
                    
                             <div class=conts1>
                                <div id="tabs5-1">
                                <h1>Jpark Island Resort & Waterpark </h1>
                                    <img src="assets/images/Resort/cebu1.jpg" alt="" >
                                    <p>Location: M.L. Quezon National Highway, Maribago, Lapu-Lapu City, Cebu<br>
                                        Check-in: 2PM || Check-out: 12NN <br>
                                       </p><br></br>
                        
                                         <h3>Reservation Book Fee:</h3>
                                         <p>
                                            P2,000
                                        </p>
                                        <br><br>
                                        <h3>Room</h3>
                                         <p>
                                            Deluxe Room: P11,000 <br>
                                            Mactan Suite Room: P13,000<br>
                                            Twin Deluxe: P14,000 <br>
                                            Mactan Ocean View: P15,000
                                        </p>
                                        <br><br>
                                        <h3>Amenities</h3>
                                         <p>
                                            Free Wifi<br>
                                            Free use to all waterpark<br>
                                        </p>
                                </div><!--End tag for tabs5-1-->
                                <div id="tabs5-2">
                                <h1>Plantation Bay Resort & Spa</h1>
                                    <img src="assets/images/Resort/cebu2.jpg" alt="" >
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>PACKAGE 1</h3>
                                         <p>
                                            <img src="assets/images/Resort/cebu-pack1.jpg" alt="" >
                                            Family Room <br>
                                            good for 4 pax<br>
                                            free breakfast<br>
                                            P4,000/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            <img src="assets/images/Resort/cebu-pack2.jpg" alt="" >
                                            Quantum Villa<br>
                                            good for 12 pax<br>
                                            free breakfast<br>
                                            P12,000/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 3</h3>
                                        <p>
                                            <img src="assets/images/Resort/cebu-pack3.jpg" alt="" >
                                            Riverboat Suite <br>
                                            good for 8 pax<br>
                                            free breakfast<br>
                                            free entertainment activity for 1 hour <br>
                                            P9,000/night
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            Scuba Diving<br>
                                            Gold & Tennis<br>
                                            Gym and Game Room<br>
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
}else{
    header("Location: loginpage.php");
    exit();
}
?>