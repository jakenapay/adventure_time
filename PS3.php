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
            <img src="assets/images/siargao.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> SIARGAO </h3>
                <p>Named after a native mangrove, the surf capital of the Philippines is perfect for lovers of the great outdoors, whether 
                you embrace adrenaline-fuelled adventure sports or gentler pursuits such as swimming in rock pools and caves. Life is  
                centred on the white-sand beaches, so there’s also plenty of scope to lie back and relax. Once a well-kept secret in surfing circles, 
                the island of Siargao has slowly become one of the most sought-after destinations in the world. 
                Discover why this tiny haven with world-class waves, white sand islets, turquoise tide pools, and hidden lagoons was hailed as the world’s most beautiful island back in 2018.
                     Pangasinan has been described as the gateway to northern Luzon.</p>
            
                <div id="tabs">
                    <ul>
                      <li><a href="#tabs-1">Beach</a></li>
                      <li><a href="#tabs-3">Tourist Spots</a></li>
                      <li><a href="#tabs-4">Traveler's Inn</a></li>
                      <li><a href="#tabs-5">Resort</a></li>
                    </ul>
                    
                    <div class=conts>
                        <div id="tabs-1"> <!--Beach-->
                            <div id="tabs1"> 
                                <ul>
                                 <li><a href="#tabs1-1">Siargao Island villas</a></li>
                                 <li><a href="#tabs1-2">Isla Cabana Resort </a></li>
                                 <li><a href="#tabs1-3">Romantic Beach Villas Siargao </a></li>
                                 <li><a href="#tabs1-4">Las Palmas Villas and Casitas Siargao </a></li>
                                </ul>
                    
                             <div class=conts1>
                                <div id="tabs1-1">
                                    <h1>Siargao Island villas</h1>
                                    <div class=image><img src="assets/images/siargao-beach/siargao.jpg" alt="" ></div>
                                    <p>Location: Barangay Catangnan, General Luna, Siargao Islands, Philippines, 8419<br></p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>PACKAGE 1</h3>
                                         <p>
                                            <img src="assets/images/siargao-beach/siargao-room1.jpg" alt="" >
                                            Mainhouse Ocean View  <br>
                                            good for 2-8 pax<br>
                                            Room service, Restaurant, Poolside bar, Free Breakfast, massage and spa<br>
                                            P15,000/18 hours
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            <img src="assets/images/siargao-beach/siargao-room2.jpg" alt="" >
                                            Mainhouse poolside view <br>
                                            good for 2-4 pax<br>
                                            Room service, Restaurant, Poolside bar, Free Breakfast, massage and spa<br>
                                            P10,000/18 hours
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            Island hopping (Daytime)<br>
                                            Snorkeling (Daytime)<br>
                                            Billiard pool(8am-10pm only)<br>
                                            Karaoke (until 10PM only)<br>
                                            Swimming pool (7AM to 10PM only)<br>
                                        </p>
                                </div> <!--End tag for tabs1-1-->

                                <div id="tabs1-2">
                                    <h1>Isla Cabana Resort</h1>
                                    <div class=image><img src="assets/images/siargao-beach/isla.jpg" alt="" ></div>
                                    <p>Location: Barangay 5, Poblacion, General Luna, General Luna, Siargao Islands, Philippines, 8419<br></p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                        <h3>PACKAGE 1</h3>
                                         <p>
                                            <img src="assets/images/siargao-beach/isla-room1.jpg" alt="" >
                                            main room garden view  <br>
                                            good for 2-5 pax<br>
                                            Coffee Shop, Room service, Restaurant, Poolside bar, Free Breakfast, massage and spa<br>
                                            P12,000/20 hours
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            <img src="assets/images/siargao-beach/isla-room2.jpg" alt="" >
                                            front ocean view <br>
                                            good for 2-10 pax<br>
                                            Coffee shop, Room service, Restaurant, Poolside bar, Free Breakfast, massage and spa<br>
                                            P18,000/20 hours
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            Banana Boat (Daytime)<br>
                                            Snorkeling (Daytime)<br>
                                            Island hopping (Daytime)<br>
                                            Billiard pool(8am-10pm only)<br>
                                            Karaoke (until 10PM only)<br>
                                            Swimming pool (Daytime: 7AM to 5pm and Night time: 7pm to 5am)<br>
                                        </p>
                                </div> <!--End tag for tabs1-2-->

                                <div id="tabs1-3">
                                    <h1>Romantic Beach Villas siargao</h1>
                                    <img src="assets/images/siargao-beach/romantic.jpg" alt="" >
                                    <p>Location: Tourism road,General Luna,Siargao Island, General Luna, Siargao Islands, Philippines, 8419<br></p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                        <h3>PACKAGE 1</h3>
                                         <p>
                                            <img src="assets/images/siargao-beach/romantic-room1.jpg" alt="" >
                                            Main Villa<br>
                                            good for 2-10 pax<br>
                                            Fitness Center, Coffee Shop, Room service, Restaurant, Poolside bar, Free Breakfast, massage and spa<br>
                                            P18,000/22 hours
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            <img src="assets/images/siargao-beach/romantic-room2.jpg" alt="" >
                                            mini Villa<br>
                                            good for 2-5 pax<br>
                                            Room service, Restaurant, Poolside bar, Free Breakfast, massage and spa<br>
                                            P12,000/18 hours
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            Island hopping (Daytime)<br>
                                            Snorkeling (Daytime)<br>
                                            Banana Boat (Daytime)<br>
                                            Kayak (Daytime)<br>
                                            Swimming pool (7AM to 10PM only)<br>
                                            Billiard pool(8am-10pm only)<br>
                                            Karaoke (until 10PM only)<br>
                                        </p>
                                </div> <!--End tag for tabs1-3-->

                                <div id="tabs1-4">
                                    <h1>Las palmas villas and casitas siargao</h1>
                                    <div class=image><img src="assets/images/siargao-beach/laspalmas.jpg" alt="" ></div>
                                    <p>Location: Tourism Road, General Luna, Surigao del Norte, Siargao Island, General Luna, Siargao Islands, Philippines, 8419<br></p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                        <h3>PACKAGE 1</h3>
                                         <p>
                                            <img src="assets/images/siargao-beach/las-room1.jpg" alt="" >
                                            Main room(masters)<br>
                                            good for 2 pax<br>
                                            free wifi<br>
                                            Laundry Service, Fitness Center, Coffee Shop, Room service, Restaurant, Poolside bar, Free Breakfast, massage and spa<br>
                                            P14,999/24 hours
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            <img src="assets/images/siargao-beach/las-room2.jpg" alt="" >
                                            family room<br>
                                            good for 2-5 pax<br>
                                            free wifi<br>
                                            Room service, Restaurant, Poolside bar, Free Breakfast, massage and spa<br>
                                            P11,999/18 hours
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            jetski rental (Daytime)<br>
                                            Banana Boat (Daytime)<br>
                                            Swimming pool (7AM to 10PM only)<br>
                                            Billiard pool(8am-10pm only)<br>
                                            Karaoke (until 10PM only)<br>
                                        </p>
                                </div> <!--End tag for tabs4-->
                            </div><!--End tag for tabs1-1 conts-->
                        </div><!--End tag for Beach-->
                        </div><!--End tag for conts-->

                        <div class=conts>
                        <div id="tabs-3"> <!--Tourist-->
                        <div id="tabs3"> 
                                <ul>
                                 <li><a href="#tabs3-1">Cloud 9 </a></li>
                                 <li><a href="#tabs3-2">Siargao Naked Island </a></li>
                                 <li><a href="#tabs3-3">Sugba Lagoon </a></li>
                                 <li><a href="#tabs3-4">Sohoton Cove National Park </a></li>
                                 <li><a href="#tabs3-5">Magpupungko Rock Pools </a></li>
                                </ul>
                    
                             <div class=conts1>

                             <div id="tabs3-1">
                                <h1>Cloud 9</h1>
                                    <div class=image><img src="assets/images/siargao-tourist/cloud9.jpg" alt="" ></div>
                                    <p>Cloud 9 is Siargao's most popular surfing spot. This surfing paradise is in the southeast corner of Siargao, in the town of General Luna. 
                                        Cloud 9 is famous for its barreling right-hand waves and thick hollow tubes that can make every advanced surfer's heart skip a beat.
                                        The best part is that Cloud 9 has great waves all year round. But if you want to catch the ocean in its best surfing conditions, visit from September to December.</p>
                                    <br></br>
                        
                                    <h3>Transient House Near the beach</h3>
                                    <p>
                                       Here are the hotels near the location<br>
                                    </p>
                                    <br><br>
                       <h3>Starlight Hotel</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div></center>
                       <p>
                           P1,500 for 12 Hours<br>
                           with Aircon, Shower, Mini-Ref<br>
                           Good for 6 pax
                       </p>
                      
                       <h3>sunflower Hotel</h3>
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
                                <h1>Siargao Naked Island</h1>
                                    <div class=image><img src="assets/images/siargao-tourist/naked.jpg" alt="" ></div>
                                    <p>Naked Island tours feature one of the three islands you can see from the shores of General Luna. The other two islands are Daku Island and Guyam Island, 
                                    which along with Naked Island, make up the highly-recommended island hopping tour in Siargao. 
                                    Naked Island, a 200-meter long strip of sand in the middle of the Pacific is completely bare, except for a few shells ushered in by the waves. T
                                    here are no trees or shrubs on Naked Island to give you shade.</p>
                                    <br></br>
                        
                                    <h3>Transient House Near the Spot</h3>
                                    <p>
                                       Here are the hotel near the location<br>
                                    </p>
                                    <br><br>
                       <h3>CJM Transient House</h3>
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
                           Good for 6 pax
                       </p><br>
                                </div><!--End tag for tabs3-2-->

                                <div id="tabs3-3">
                                <h1>Sugba Lagoon</h1>
                                    <div class=image><img src="assets/images/siargao-tourist/sugba.jpg" alt="" ></div>
                                    <p>Sugba Lagoon is a gem tucked away in the quiet town of Del Carmen in Siargao. 
                                    You will find this spectacular destination in the middle of a mystical mangrove forest surrounded by mountains.
                                    Sugba Lagoon offers visitors a stunning 4,000-hectare turquoise swimming spot isolated from the hustle and bustle of General Luna. 
                                    You can stake out your piece of land (or water) and chill out in perfect isolation.</p>
                                    <br></br>
                        
                                    <h3>Transient House Near the Spot</h3>
                                    <p>
                                       Here are the hotel near the location<br>
                                    </p>
                                    <br><br>
                                    <h3>woodstop house and kubo</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div></center>
                <h3>woodstop house</h3>
                       <p>
                           P2,500 for 8 Hours<br>
                           with Aircon, Shower, Mini-Ref<br>
                           Good for 12 pax
                       </p><br>
                <h3>woodstop kubo</h3>
                    <p>
                            P1000 for 8 Hours<br>
                           with tables and utensils<br>
                            Good for 12 pax
                        </p><br>
                                </div><!--End tag for tabs3-3-->

                                <div id="tabs3-4">
                                <h1>Sohoton cove national park</h1>
                                    <div class=image><img src="assets/images/siargao-tourist/sohoton.jpg" alt="" ></div>
                                    <p>Sohoton Cove National Park's unbelievable beauty will leave you speechless. Located in Bucas Grande Island and only a one-hour boat trip from Dapa port in Siargao, 
                                        this place is truly a hidden paradise.
                                        Sohoton Cove National Park has secluded gems that will fascinate and surprise you. 
                                        Its Blue Lagoon is often compared to some of the lagoons in El Nido, Palawan.
                                        Surrounded by massive and majestic green limestone formations and blazing blue waters, you can't help but marvel at Sohoton Cove's raw beauty. 
                                        It's often combined with a tour in Naked Island in this Siargao day adventure. 
                                        Another remarkable natural attraction in Sohoton Cove is the lagoon filled with thousands of stingless jellyfish. 
                                        Tourists were initially allowed to swim with the gelatinous creatures of the lagoon as the jellyfish were harmless.
                                       </p><br></br>
                                       <h3>Transient Houses Near the Spot</h3>
                                    <p>
                                       Here are the hotels near the location<br>
                                    </p>
                                    <br><br>
                                         <h3>Yellowstone hotel</h3>
                                         <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center>
                                         <p> 
                                            good for 2 - 10 pax<br>
                                            free breakfast and dinner<br>
                                            P8,000/night
                                        </p>
                                        <br><br><br>
                                        <h3>serenity hotel </h3>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div></center>
                                        <p>
                                            good for 2 - 6 pax<br>
                                            free breakfast<br>
                                            P5,000/night
                                        </p>
                                        <br><br>
                                </div><!--End tag for tabs3-4-->
                                <div id="tabs3-5">
                                <h1>magpupungko rock pools</h1>
                                    <div class=image><img src="assets/images/siargao-tourist/magpupungko.jpg" alt="" ></div>
                                    <p>Location: Natividad, Pangasinan</p>
                                    <br></br>
                        
                                    <h3>Transient House/ Hotels Near the Spot</h3>
                                    <p>
                                       Here are the hotels near the location<br>
                                    </p>
                                    <br><br>
                       <h3>blue sky Hotel</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div></center>
                       <p>
                           P5,000 for 24 Hours<br>
                          with free wifi, mini fridge, and free breakfast<br>
                           Good for 4-8 pax
                       </p><br>
                      
                       <h3>highminds Transient Rooms</h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div></center>
                       <p>
                           P3,500 for 16 Hours<br>
                          Free breakfast, with free spa for 30minutes<br>
                           Good for 5 pax
                       </p><br>
                                </div><!--End tag for tabs3-3-->
                            </div><!--End tag for conts-->
                        </div><!--End tag for tabs3-->
                        </div><!--End tag for conts-->

                    <div class=conts>
                        <div id="tabs-4"> <!--Inn-->
                        <div id="tabs4"> 
                                <ul>
                                 <li><a href="#tabs4-1">Siargao Inn Beach Resort</a></li>
                                 <li><a href="#tabs4-2">Vivo Inn </a></li>
                                 <li><a href="#tabs4-3">Payag Suites </a></li>
                                </ul>
                    
                             <div class=conts1>
                                <div id="tabs4-1">
                                <h1>siargao inn beach resort</h1>
                                    <img src="assets/images/siargao-inn/siargao.jpg" alt="" >
                                    <p>Location: Pangpang, Sta. Ines,General Luna, General Luna, Siargao Islands, Philippines, 8419<br></p>
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
                                            P2,000/night
                                        </p>
                                        <br><br>
                                        <h3>First Class Room</h3>
                                         <p>
                                            good for 2-4 pax<br>
                                            1 Queen size Bed and double bed<br>
                                            P3,500/night
                                        </p>
                                        <br><br>
                                        <h3>VIP Room</h3>
                                         <p>
                                            good for 4-6 pax<br>
                                            2 queen size bed<br>
                                            P5,000/night
                                        </p>
                                </div><!--End tag for tabs4-1-->

                                <div id="tabs4-2">
                                <h1>Vivo Inn</h1>
                                    <img src="assets/images/siargao-inn/vivo.jpg" alt="" >
                                    <p>Location: Tourism Road, Poblacion 5, General Luna, General Luna, Siargao Islands, Philippines, 8419<br></p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>Standard vivo Room</h3>
                                         <p>
                                            good for 1 pax<br>
                                            1 single Bed<br>
                                            P750/night
                                        </p>
                                        <br>
                                        <h3>Economy vivo Room</h3>
                                         <p>
                                            good for 2 pax<br>
                                            1 Double Bed<br>
                                            P1,000/night
                                        </p>
                                        <br>
                                        <h3>Business vivo Room</h3>
                                         <p>
                                            good for 2-8 pax<br>
                                            2 Double Bed<br>
                                            P1,500/night
                                        </p><br>
    
                                </div><!--End tag for tabs4-2-->


                                <div id="tabs4-3">
                                <h1>payag suites</h1>
                                    <img src="assets/images/siargao-inn/payag.jpg" alt="" >
                                    <p>Location: Tourism Road, General Luna, Siargao Islands, Philippines, 8419<br></p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>Basic Suite</h3>
                                         <p>
                                            good for 2 pax<br>
                                            1 Double Bed<br>
                                            P1,500/night
                                        </p>
                                        <br>
                                        <h3>First Class suite</h3>
                                         <p>
                                            good for 2-4 pax<br>
                                            2 Double Bed<br>
                                            P2,000/night
                                        </p>
                                        <br>
                                        <h3>vip suite</h3>
                                         <p>
                                            good for 2-6 pax<br>
                                            3 Double Bed<br>
                                            P2,500/night
                                        </p><br>
                                </div><!--End tag for tabs4-3-->
                            </div><!--End tag for conts-->
                        </div><!--End tag for tabs4-->
                        </div><!--End tag for conts-->

                        <div class=conts>
                        <div id="tabs-5"> <!--Resort-->
                        <div id="tabs5"> 
                                <ul>
                                 <li><a href="#tabs5-1">Tropical Temple Siargao Resort</a></li>
                                 <li><a href="#tabs5-2">Club Tara Resort </a></li>
                                 <li><a href="#tabs5-3">Jonas & Twins Resort</a></li>
                                 <li><a href="#tabs5-4">Soeliana Resort</a></li>
                                </ul>
                    
                             <div class=conts1>
                                <div id="tabs5-1">
                                <h1>tropical temple siargao resort</h1>
                                    <img src="assets/images/siargao-resort/tropical.jpg" alt="" >
                                    <p>Location: Tourism Road, General Luna, Siargao Islands, Philippines, 8419<br>
                                       </p><br></br>
                        
                                       <h3>PACKAGE 1</h3>
                                         <p>
                                            <img src="assets/images/siargao-resort/tropical-room1.jpg" alt="" >
                                            good for 2-10 pax<br>
                                            free breakfast<br>
                                            P10,000/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            good for 2-5 pax<br>
                                            free breakfast<br>
                                            P5,000/night
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            Karaoke (until 10pm only)
                                            Snorkeling (Daytime)<br>
                                            Banana Boat (Daytime)<br>
                                            Kayak (Daytime)<br>
                                        </p>
                                </div><!--End tag for tabs5-1-->
                                <div id="tabs5-2">
                                <h1>club tara resort</h1>
                                    <img src="assets/images/siargao-resort/tara.jpg" alt="" >
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                        <h3>PACKAGE 1</h3>
                                         <p>
                                            <img src="assets/images/siargao-resort/tara-room1.jpg" alt="" >
                                            good for 2-4 pax<br>
                                            free breakfast and free drinks<br>
                                            P5,000/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            good for 2pax<br>
                                            free breakfast and free drinks<br>
                                            P3,000/night
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            Island hopping (Daytime)<br>
                                            Snorkeling (Daytime)<br>
                                            Banana Boat (Daytime)<br>
                                            Kayak (Daytime)<br>
                                        </p>
                                </div><!--End tag for tabs5-2-->
                                <div id="tabs5-3">
                                <h1>jonas & twins resort</h1>
                                    <img src="assets/images/siargao-resort/jonas.jpg" alt="" >
                                    <p>Location: Tourism Road, General Luna, Siargao Islands, Philippines, 8419<br>
                                       </p><br></br>
                        
                                       <h3>PACKAGE 1</h3>
                                         <p>
                                            <img src="assets/images/siargao-resort/jonas-room1.jpg" alt="" >
                                            good for 2 pax<br>
                                            free wifi<br>
                                            Coffee Shop, Room service, Restaurant, Poolside bar, Free Breakfast, massage and spa<br>
                                            P12,000/24 hours
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            <img src="assets/images/siargao-resort/jonas-room2.jpg" alt="" >
                                            good for 2-5 pax<br>
                                            free wifi<br>
                                            Room service, Restaurant, Poolside bar, Free Breakfast, massage and spa<br>
                                            P8000/24hours
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            jetski rental (Daytime)<br>
                                            Banana Boat (Daytime)<br>
                                            Swimming pool (7AM to 10PM only)<br>
                                            Billiard pool(8am-10pm only)<br>
                                            Karaoke (until 10PM only)<br>
                                        </p>
                                </div><!--End tag for tabs5-3-->
                                <div id="tabs5-4">
                                <h1>soeliana resort</h1>
                                    <img src="assets/images/siargao-resort/soeliana.jpg" alt="" >
                                    <p>Location: Poblacion 1, San Sebastian Street, General Luna, Siargao Islands, Philippines, 8419<br>
                                       </p><br></br>
                        
                                       <h3>PACKAGE 1</h3>
                                         <p>
                                            <img src="assets/images/siargao-resort/soeliana-room1.jpg" alt="" >
                                            good for 2 pax<br>
                                            free wifi<br>
                                            Laundry Service, Fitness Center, Coffee Shop, Room service, Restaurant, Poolside bar, Free Breakfast, massage and spa<br>
                                            P14,999/24 hours
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            <img src="assets/images/siargao-resort/soeliana-room2.jpg" alt="" >
                                            good for 2-5 pax<br>
                                            free wifi<br>
                                            Room service, Restaurant, Poolside bar, Free Breakfast, massage and spa<br>
                                            P11,999/18 hours
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            jetski rental (Daytime)<br>
                                            Banana Boat (Daytime)<br>
                                            Swimming pool (7AM to 10PM only)<br>
                                            Billiard pool(8am-10pm only)<br>
                                            Karaoke (until 10PM only)<br>
                                        </p>
                                </div><!--End tag for tabs5-4-->
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