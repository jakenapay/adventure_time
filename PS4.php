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
            <img src="assets/images/boholhills.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> BOHOL</h3>
                <p>The home of the famous Chocolate Hills, Bohol is one of the most visited destinations in the Central Visayas region of the Philippines.
                     The island province offers breathtaking spots for history buffs, beach lovers, and adrenaline junkies. 
                     Bohol is comprised of one major island and 73 smaller ones surrounding it, so you'll have plenty of places to explore during your trip here. One thing’s for sure: 
                    You’ll enjoy every second of your stay and love the diversity that Bohol offers..</p>
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
                                 <li><a href="#tabs1-1">Panglao Beach</a></li>
                                 <li><a href="#tabs1-2">Talisay Beach  </a></li>
                                 <li><a href="#tabs1-3">Can-uba Beach </a></li>
                                 <li><a href="#tabs1-4">Palo Beach</a></li>
                                </ul>
                    
                             <div class=conts1>
                                <div id="tabs1-1">
                                    <h1>Panglao Beach</h1>
                                    <img src="assets/images/beach/panglao.jpg" alt="" >
                                    <p>Location: Panglao Island, Bohol<br>
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
                                            <img src="assets/images/beach/roomms.jpg" alt="" >
                                            BOHOL SEA BREEZE COTTAGES & RESORT<br>
                                            good for 2 pax<br>
                                            free breakfast<br>
                                            free entertainment activity for 1 hour<br>
                                            P1,200/day
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            <img src="assets/images/beach/south.jpg" alt="" >
                                            Bohol South Beach Hotel<br>
                                            good for 4 - 6 pax<br>
                                            free breakfast<br>
                                            free entertainment activity for 1 hour <br>
                                            P1,600/night
                                        </p>
                                        <br><br>
                                        
                                </div> <!--End tag for tabs1-1-->

                                <div id="tabs1-2">
                                    <h1>Talisay Beach </h1>
                                    <img src="assets/images/beach/talisay.jpg" alt="" >
                                    <p>Location: Anda, Bohol<br>
                                        Check-in: 6PM || Check-out: 12NN </p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>PACKAGE 1</h3>
                                         <p>
                                         Anda Poseidon's Beach Resort 
                                         <img src="assets/images/beach/andaroom.jpg" alt="" >
                                         <br>
                                            good for 2 pax<br>
                                            free breakfast<br>
                                            P1,500/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                        <img src="assets/images/beach/cabagnow-seaside-resort.jpg" alt="" >
                                        Cabagnow Seaside Resort<br>
                                            good for 4 pax<br>
                                            free breakfast<br>
                                            P6,500/night
                                        </p>
                                </div> <!--End tag for tabs1-2-->

                                <div id="tabs1-3">
                                    <h1>Can-uba Beach</h1>
                                    <img src="assets/images/beach/canubabeach.jpg" alt="" >
                                    <p>Location: Jagna, Bohol<br>
                                        Check-in: 2PM || Check-out: 12NN </p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            
                                        </div></center><br></br>
                        
                                         <h3>Standard Room</h3>
                                         <img src="assets/images/beach/standardcanbuan.jpg" alt="" >
                                         <p>
                                            good for 2 pax<br>
                                            1 Double Bed<br>
                                            free breakfast<br>
                                            P800/night
                                        </p>
                                        <br><br>
                                        <h3>Deluxe Room</h3>
                                        <img src="assets/images/beach/package-standard.jpg" alt="" >
                                         <p>
                                            good for 2 pax<br>
                                            1 Queen Bed<br>
                                            free breakfast<br>
                                            P2,000/night
                                        </p>
                                        <br><br>
                                        <h3>Family Room</h3>
                                        <img src="assets/images/beach/package-1canuba.jpg" alt="" >
                                         <p>
                                            good for 4 pax<br>
                                            2 Double Bed<br>
                                            free breakfast<br>
                                            P3,500/night
                                        </p>
                                        <br><br>
                                        <h3>Cabin Room</h3>
                                        <img src="assets/images/beach/deluxpackage.jpg" alt="" >
                                         <p>
                                            good for 6 pax<br>
                                            2 Bunk Beds<br>
                                            free breakfast<br>
                                            P3,500/night
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
                                    <h1>
                                        <br>Palo Beach</h1>
                                  <img src="assets/images/beach/palo beach.jpg" alt="" >
                                    <p>Location:Loay, Bohol<br>
                                        Check-in: 8PM || Check-out: 12NN </p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>Palo Beach Resort Hut</h3>
                                         <img src="assets/images/beach/Palo huts.jpg" alt="" >
                                         <p>
                                            good for 4 pax<br>
                                            Half a Day<br>
                                            P600/night
                                        </p>
                                        <br><br>
                                        <h3>MidNight Hut</h3>
                                         <img src="assets/images/beach/midnight hut.jpg" alt="" >
                                         <p>
                                            good for 6 pax<br>
                                            3 Double Bed<br>
                                            P2,000/night
                                        </p>
                                </div> <!--End tag for tabs4-->
                            </div><!--End tag for tabs1-1 conts-->
                        </div><!--End tag for Beach-->
                        </div><!--End tag for conts-->

                    <div class=conts>
                        <div id="tabs-2"> <!--Mountain-->
                        <div id="tabs2"> 
                                <ul>
                                 <li><a href="#tabs2-1">Mt. Matunog</a></li>
                                 <li><a href="#tabs2-2">Tayong Peak</a></li>
                                </ul>
                                <div class=conts1>
                                    
                                <div id="tabs2-1">
                                    <h1>Mt. Matunog</h1>
                                    <img src="assets/images/mountain/mt.matunog.jpg" alt="" >
                                    <p>Mayana Jagna, Bohol<br>
                                        Check-in: 5AM || Check-out: 5PM <br>
                                        NO OVERNIGHT STAY </p><br></br>
                        
                                         <h3>Entrance Fee</h3>
                                         <p>
                                            Adult: P80 <br>
                                            Child (12y/o below) ans Senior Citizen: P20
                                        </p>
                                        <br><br>
                                        <h3>Shed</h3>
                                         <p>
                                            Kubo: P350 <br>
                                            Concrete: P400 <br>
                                            Pavilion: P3,500 <br>
                                            Function Hall: P3,000<br>
                                            Hotel: P2,000
                                        </p>
                                        <br><br>
                                        <br><br>
                                        <h3> Adventure Package</h3>
                                        <img src="assets/images/mountain/gear4.jpg" alt="">
                                         <p>
                                           Adventure Package A: P1,500 Equipment Gear and Trekking Outfit and Tour Guide<br>
                                           Adventure Package B: p850  Equipment Gear and Trekking Outfit  <br>
                                           Hiking Environmental Fee: P20/hike/head<br>
                                        </p>
                                        <br><br>
                                </div> <!--End tag for tabs2-1-->

                                <div id="tabs2-2">
                                    <h1>Sagbayang Peak</h1>
                                    <img src="assets/images/mountain/sagbayan peak.jpg" alt="" >
                                    <p>Location:Lila, Bohol<br>
                                        Opening: 6AM || Closing: 7PM <br>

                        
                                         <h3>Entrance Fee</h3>
                                         <p>
                                            Adult: P120 <br>
                                            Child (12y/o below) ans Senior Citizen: P80
                                        </p>
                                        <br><br>
                                        <h3>Enjoy the View in Sagbayang Peak, Sneak Peak of Chocolate Hills</h3>
                                         <p>
                
                                        </p>
                                        <br><br>
                                        <h3>7P2 Bed and Breakfast</h3>
                                        <img src="assets/images/mountain/web.webp" alt="" >
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div></center>
                                        <p>
                                            P800 per Night<br>
                                            with Aircon, Shower, Mini-Ref<br>
                                            Near the town proper
                                        </p>
                                       
                                        <h3>Breakfast to Go</h3>
                                        <img src="assets/images/mountain/rooom.webp" alt="" >
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
                                </div> <!--End tag for tabs2-3-->

                                
                            </div><!--End tag for conts-->
                        </div><!--End tag for tabs2-->
                        </div><!--End tag for conts-->

                        <div class=conts>
                        <div id="tabs-3"> <!--Tourist-->
                        <div id="tabs3"> 
                                <ul>
                                 <li><a href="#tabs3-1">Chocolate Hills Adventure Park</a></li>
                                 <li><a href="#tabs3-2">Blood Compact Site</a></li>
                                 <li><a href="#tabs3-3">Philippine Tarsier Sanctuary </a></li>
                                 <li><a href="#tabs3-4">Danao Adventure Park</a></li>
                                 <li><a href="#tabs3-5">Mirror Of The World  </a></li>
                                </ul>
                    
                             <div class=conts1>

                             <div id="tabs3-1">
                                <h1>CHOCOLATE HILLS ADVENTURE PAR</h1>
                                   <img src="assets/images/tourist/chocopark.jpg" alt="" >
                                    <p>Location: Carmen,Bohol</p>
                                    <br></br>
                                    <p>
                                       Here are the hotels near the location<br>
                                    </p>
                                    <br><br>
                       <h3>Advenure Package</h3>
                       <img src="assets/images/tourist/1chopark.jpg" alt="" >
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div></center>
                <p>
                           P2,500 for 24 Hours<br>
                          All Activity Except a place to Sleep<br>
                          Offers <br>
                          OUTDOOR ADVENTURES
                          TREE TOP ROPE CHALLENGES
                          BOHOLANO FOODS
                          WILDLIFE HABITAT

                          
                       </p>
            
                <h3>Deluxe Adventure Package</h3>
                       <img src="assets/images/tourist/ALL.jpg" alt="" >
                       <h3></h3>
                       <center><div class="stars">Ratings:
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div></center>
                       <p>
                           P3,500 for 24 Hours<br>
                         Offers All<br>
                           Good for 6 pax
                       </p>
                                </div><!--End tag for tabs3-2-->

                                <div id="tabs3-2">
                                <h1>Blood Compact Site</h1>
                                    <img src="assets/images/tourist/blood.jpg" alt="" >
                                    <p>Location: Tagbiliran City, Bohol</p>
                                    <br> OPEN 24 HRs </br>
                        
                                    <h3></h3>
                                    <p>
                                       <br>
                                    </p>
                                    <br><br>
                      
                                </div><!--End tag for tabs3-2-->

                                <div id="tabs3-3">
                                <h1>Philippine Tarsier Sanctuary </h1>
                                    <img src="assets/images/tourist/tartar.jfif" alt="" >
                                    <p>Location: Corella, Bohol</p>
                                    <br></br>
                        
                                    <h3>Kubo for Rent</h3>
                                    <img src="assets/images/tourist/tarsance.jpg" alt="" >
                                    <p>
                                    Entrance Fee P50 per Head.
                                    </p>
                                </div><!--End tag for tabs3-3-->

                                <div id="tabs3-4">
                                <h1>Danao Adventure Park</h1>
                                    <img src="assets/images/tourist/danao1.jpg" alt="" >
                                    <p>Location: Danao, Bohol<br>
                                       Opens at 6AM–5PM</p><br></br>
                        
                                    
                                            <img src="assets/images/tourist/slide.jpg" alt="" >
                                            Price starts at P 3,000<br>
                                             Let the Fun Begins!
                                           
                                        </p>
                                </div><!--End tag for tabs3-4-->
                                <div id="tabs3-5">
                                <h1>Mirror Of The World </h1>
                                    <img src="assets/images/tourist/mirror.jpg" alt="" >
                                    <p>Location: Sikatuna, Bohol</p>
                                    <br><h1>Entrance fees to Sikatuna Mirror of the World</h1><br>

                                    <h1>and Botanical Garden is as follows: 150 Pesos Adults night time (6 pm to 9 pm) 120 Pesos Adults daytime (7 am to 6 pm)
                                      100 Pesos Seniors day time</br></h1>
                        
                                   
                                    <p>
                                   
                                    </p>
                                    <br><br>
                     
                                </div><!--End tag for tabs3-3-->
                            </div><!--End tag for conts-->
                        </div><!--End tag for tabs3-->
                        </div><!--End tag for conts-->

                    <div class=conts>
                        <div id="tabs-4"> <!--Inn-->
                        <div id="tabs4"> 
                                <ul>
                                 <li><a href="#tabs4-1">Brielles Travellers Inn</a></li>
                                 <li><a href="#tabs4-2">Highway to H, Travellers Inn  </a></li>
                                 <li><a href="#tabs4-3">J&R Residence  </a></li>
                                 <li><a href="#tabs4-4">Isis Bungalows </a></li>
                                 <li><a href="#tabs4-5">Greenhut Pension & Bar</a></li>
                                </ul>
                    
                             <div class=conts1>
                                <div id="tabs4-1">
                                <h1>2428 Suites</h1>
                                    <img src="assets/images/inn/brielles.jpg" alt="" >
                                    <p>Location: Tagbiliran City, Bohol<br>
                                     Check-in: 6PM || Check-out: 12NN </p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>Standard Room</h3>
                                         <img src="assets/images/inn/standard2.jpg" alt="" >
                                         <p>
                                            good for 2 pax<br>
                                            1 Double Bed<br>
                                            P1,000/night
                                        </p>
                                        <br><br>
                                        <h3>Standard Queen Room</h3>
                                        <img src="assets/images/inn/queen.jpg" alt="" >
                                         <p>
                                            good for 2 pax<br>
                                            1 Queen Bed<br>
                                            P1,300/night
                                        </p>
                                        <br><br>
                                        <h3>6-Bed Mixed Dormitory Room</h3>
                                        <img src="assets/images/inn/6bed.jpg" alt="" >
                                         <p>
                                            good for 6 pax<br>
                                            3 Double Bed<br>
                                            P2,500/night
                                        </p>
                                </div><!--End tag for tabs4-1-->

                                <div id="tabs4-2">
                                <h1>Highway to H, Travellers Inn </h1>
                                    <img src="assets/images/inn/highwayinn.jpg" alt="" >
                                    <p>Location: Danao, Bohol<br>
                                    
                                        Check-in: 6AM || Check-out: 12NN </p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>Standard Room</h3>
                                         <img src="assets/images/inn/standhigh.jpg" alt="" >
                                         <p>
                                            good for 2 pax<br>
                                            1 Double Bed<br>
                                            P1500/night
                                        </p>
                                        
                                        </p>
                                </div><!--End tag for tabs4-2-->


                                <div id="tabs4-3">
                                <h1>J & R Residence </h1>
                                    <img src="assets/images/inn/jr.jpg" alt="" >
                                    <p>Location:Anda, Bohol.<br>
                                    
                                        Check-in: 2PM || Check-out: 12NN </p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>2-Bedroom Family Apartment</h3>
                                         <img src="assets/images/inn/2bedfam.jpg" alt="" >
                                         <p>
                                            good for 2 pax<br>
                                         
                                            1 King Bed<br>
                                            P3,500/night
                                        </p>
                                        <br>
                                    
                                        <br>
                                        <h3>Beach Villa</h3>
                                        <img src="assets/images/inn/beachvilla17.jpg" alt="" >
                                         <p>
                                            good for 6 pax<br>
                                            2 Double Bed<br>
                                            P6,000/night
                                        </p><br>
                                        <h3>Amenities</h3>
                                         <p>
                                            Massage<br>
                                            Swimming Pool<br>
                                            Wifi<br>
                                            Dining Restaurant
                                        </p>
                                </div><!--End tag for tabs4-4-->
                                <div id="tabs4-4">
                                <h1>Isis Bungalows</h1>
                                    <img src="assets/images/inn/isis.jpg" alt="" >
                                    <p>Location: Panglao, Bohol<br>
                                 
                                        Check-in: 7AM || Check-out: 12NN </p>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>Standard</h3>
                                         <img src="assets/images/inn/standardisis2.jpg" alt="" >
                                         <p>
                                            good for 2 pax<br>
                                            1 Double Bed<br>
                                            P1,900/night
                                        </p>
                                        <br>
                                        <h3>Family Deluxe Bungalow</h3>
                                        <img src="assets/images/inn/standardisis.jpg" alt="" >
                                         <p>
                                            good for 6 pax<br>
                                            1 King Bed and 1 Queen<br>
                                            P3,400/night
                                        </p>
                                        <br>
                                        <h3>Family Deluxe Bungalow</h3>
                                        <img src="assets/images/inn/deluxeisis.jpg" alt="" >
                                         <p>
                                            good for 6 pax<br>
                                            1 King Bed and 1 Queen<br>
                                            P4,000/night
                                            Seaside view
                                        </p><br>
                                        
                                </div><!--End tag for tabs4-4-->

                                <div id="tabs4-5">
                                <h1>Greenhut</h1>
                                    <img src="assets/images/inn/greenhut.jpg" alt="" >
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
                        
                                         <h3>Double Standard</h3>
                                         <img src="assets/images/inn/doublestandard.jpg" alt="" >
                                         <p>
                                            good for 2 pax<br>
                                            1 Double Bed<br>
                                            P850/night
                                        </p>
                                        <br>
                                        <h3>Standard Room</h3>
                                        <img src="assets/images/inn/greenstandard.jpg" alt="" >
                                         <p>
                                            good for 2 pax<br>
                                            1 Bed<br>
                                            P1,000/night
                                        </p>
                                        <br>
                                        <h3>Deluxe Double Room </h3>
                                        <img src="assets/images/inn/deluxegreen.jpg" alt="" >
                                         <p>
                                         2 Adults + 1 Child<br>
                                            3 Double Bed<br>
                                            P1,200/night
                                        </p><br>
                                        <h3>Amenities</h3>
                                         <p>
                                           Karaoke<br>
                                            Dining Hall<br>
                                            Wifi<br>
                                           Massages P600-1500 Price Range
                                        </p>
                                </div><!--End tag for tabs4-5-->


                            </div><!--End tag for conts-->
                        </div><!--End tag for tabs4-->
                        </div><!--End tag for conts-->

                        <div class=conts>
                        <div id="tabs-5"> <!--Resort-->
                        <div id="tabs5"> 
                                <ul>
                                 <li><a href="#tabs5-1">The Peacock Garden </a></li>
                                 <li><a href="#tabs5-2">Loboc River Resort  </a></li>
                                 <li><a href="#tabs5-3">Villa De Gloria </a></li>
                                 <li><a href="#tabs5-4">Hennan Resort Alona Beach  </a></li>
                                 <li><a href="#tabs5-5">Three Little Birds Resort</a></li>
                                </ul>
                    
                             <div class=conts1>
                                <div id="tabs5-1">
                                <h1> Peacock Garden </h1>
                                <img src="assets/images/Resort/cockgarden.jpg" alt="" >
                                    <p>Location: Baclayon, Bohol<br>
                                        Check-in: 8AM || Check-out: 12NN <br>
                                       </p><br></br>
                        
                                        </p>
                                        <br><br>
                                        <h3>Suites</h3>
                                       <img src="assets/images/Resort/suite.jpg" alt="" >
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
                                            3 Pools with Slides
                                            Jet Skies
                                            Peddling Board
                                            <br>
                                        </p>
                                </div><!--End tag for tabs5-1-->
                                <div id="tabs5-2">
                                <h1>Loboc River Resort </h1>
                                    <img src="assets/images/Resort/loboc.jpg" alt="" >
                                    <p>Location: Loboc, Bohol<br>
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>Deluxe Double or Twin Room with River View</h3>
                                         <p>
                                            <img src="assets/images/Resort/twinroom.jpg" alt="" >
                                            Standard Room <br>
                                            good for 2 pax<br>
                                            free breakfast<br>
                                            P3,500/night
                                        </p>
                                        <br><br>
                                        <h3>King Room with Spa Bath</h3>
                                        <p>
                                            <img src="assets/images/Resort/spa bathking.jpg" alt="" >
                                            Deluxe Room<br>
                                            good for 4 pax<br>
                                            free breakfast<br>
                                            P8,000/night
                                        </p>
                                        <br><br>
                                        <h3>Family Room with Balcony</h3>
                                        <p>
                                            <img src="assets/images/Resort/fambal.jpg" alt="" >
                                            VIP Room <br>
                                            good for 6 pax<br>
                                            free breakfast<br>
                                            free entertainment activity for 1 hour <br>
                                            P12,000/night
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            SPA(7AM to 10PM only)
                                            Dining Restaurant<br>
                                            Karaoke (until 10PM only)<br>
                                            Swimming pools and Slides (7AM to 10PM only)<br>
                                           
                                        </p>
                                </div><!--End tag for tabs5-2-->
                                <div id="tabs5-3">
                                <h1>Villa De Gloria </h1>
                                    <img src="assets/images/Resort/villagloria.jpg" alt="" >
                                    <p>Location: Dauis,Boholl<br>  
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>PACKAGE 1</h3>
                                         <p>
                                            <img src="assets/images/Resort/pack1.jpg" alt="" >
                                            Standard Room <br>
                                            good for 2 pax<br>
                                            free breakfast<br>
                                            P1,500/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            <img src="assets/images/Resort/pack2.jpg" alt="" >
                                            Superior Room<br>
                                            good for 2 pax<br>
                                            free breakfast<br>
                                            P3,000/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 3</h3>
                                        <p>
                                            <img src="assets/images/Resort/pack3.jpg" alt="" >
                                            Family Room with 2 Double Beds <br>
                                            good for 6 pax<br>
                                            free breakfast<br>
                                            free entertainment activity for 1 hour <br>
                                            P5,000/night
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            Karaoke (until 10PM only)<br>
                                            Swimming pools and Slides (7AM to 10PM only)<br>
                                        </p>
                                        </div>   <!--End tag for tabs5-3-->
                                             <div id="tabs5-4">
                                <h1>Hennan Resort Alona Beach </h1>
                                    <img src="assets/images/Resort/hennan.jpg" alt="" >
                                   <p>Location:  Panglao, Bohol<br> 
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>PACKAGE 1</h3>
                                         <p>
                                            <img src="assets/images/Resort/junior.jpg" alt="" >
                                            Junior Suite <br>
                                            good for 2 pax<br>
                                            free breakfast<br>
                                            P4,000/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            <img src="assets/images/Resort/fam2bedroom.jpg" alt="" >
                                            Family Two-Bedroom<br>
                                            good for 4 pax<br>
                                            free breakfast<br>
                                            P8,000/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 3</h3>
                                        <p>
                                            <img src="assets/images/Resort/VIP suite.jpg" alt="" >
                                            Presidential Suite<br>
                                            good for 6 pax<br>
                                            free breakfast<br>
                                            free entertainment activity for 1 hour <br>
                                            P9,000/night
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            Dining Hall<br>
                                            Karaoke (until 10PM only)<br>
                                            Swimming pools and Slides (7AM to 10PM only)<br>
                                        </p>
                     </div> <!--End tag for tabs5-4-->
                                             <div id="tabs5-5">
                                <h1>Three Little Birds Resort</h1>
                                    <img src="assets/images/Resort/3bird.jfif" alt="" >
                                    <p>Location:Anda, Boholl<br> 
                                        <center><div class="stars">Ratings:
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div></center><br></br>
                        
                                         <h3>PACKAGE 1</h3>
                                         <p>
                                            <img src="assets/images/Resort/standardroom.jpg" alt="" >
                                            Standard Room <br>
                                            good for 2 pax<br>
                                            free breakfast<br>
                                            P1,700/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 2</h3>
                                        <p>
                                            <img src="assets/images/Resort/doubleroom.jpg" alt="" >
                                            Double Room with Pool View<br>
                                            good for 4 pax<br>
                                            free breakfast<br>
                                            P3,400/night
                                        </p>
                                        <br><br>
                                        <h3>PACKAGE 3</h3>
                                        <p>
                                            <img src="assets/images/Resort/family bung.jpg" alt="" >
                                            Family Bungalow<br>
                                            good for 6 pax<br>
                                            free breakfast<br>
                                            free entertainment activity for 1 hour <br>
                                            P5,500/night
                                        </p>
                                        <br><br>
                                        <h3>Amenities and Other Activities</h3>
                                        <p>
                                            Bowling and Arcades (1PM to 10PM)<br>
                                            Karaoke (until 10PM only)<br>
                                            Swimming pools and Slides (7AM to 10PM only)<br>
                                        </p>
                                             <!--End tag for tabs5-5-->

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