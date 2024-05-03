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
        <link rel="stylesheet"type="text/css" href="css/book.css">
    
		<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">  
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>  
		<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>  
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
<br><br><br><br><br>


	<section class="book" id="book">
        
        <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        </h1>
    
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <img src="assets\images\Online payment_Flatline.png" alt="">
                </div>

                <div class="col-md-3">
                    <div>
                        <h1>Personal Details</h1>
                    </div>

                    <div class="input-group input-group-lg" style="margin-top: 30px; margin-bottom: 30px;">
                        <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 90px;">Name</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                    </div>
                    <div class="input-group input-group-lg" style="margin-top: 30px; margin-bottom: 30px;">
                        <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 90px;">Email</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                    </div>
                    <div class="input-group input-group-lg" style="margin-top: 30px; margin-bottom: 30px;">
                        <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 90px;">Contact No.</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                    </div>
                </div>

                <div class="col-md-3">

                    <div>
                        <h1>Booking Details</h1>
                    </div>

                    <div class="input-group input-group-lg" style="margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Place</label>
                        <select class="form-select" id="place" name="place">
                            <option value="00" >Choose...</option>
                            <option value="01">Batangas</option>
                            <option value="02">Bohol</option>
                            <option value="03">Cebu</option>
                            <option value="04">Pangasinan</option>
                            <option value="05">Siargao</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showA" style="margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Category</label>
                        <select class="form-select">
                            <option >Pick a place first</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showA-1" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Category</label>
                        <select class="form-select" id="category" name="category">
                            <option value="00" >Choose...</option>
                            <option value="01">Beaches in Batangas</option>
                            <option value="02">Mountains in Batangas</option>
                            <option value="03">Tourist Spots in Batangas</option>
                            <option value="04">Traveller's Inn in Batangas</option>
                            <option value="05">Resorts in Batangas</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showA-2" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Category</label>
                        <select class="form-select" id="category1" name="category1">
                            <option value="00">Choose...</option>
                            <option value="01">Beaches in Bohol</option>
                            <option value="02">Mountains in Bohol</option>
                            <option value="03">Tourist Spots in Bohol</option>
                            <option value="04">Traveller's Inn in Bohol</option>
                            <option value="05">Resorts in Bohol</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showA-3" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Category</label>
                        <select class="form-select" id="category2" name="category2">
                            <option value="00">Choose...</option>
                            <option value="01">Beaches in Cebu</option>
                            <option value="02">Mountains in Cebu</option>
                            <option value="03">Tourist Spots in Cebu</option>
                            <option value="04">Traveller's Inn in Cebu</option>
                            <option value="05">Resorts in Cebu</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showA-4" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Category</label>
                        <select class="form-select" id="category3" name="category3">
                            <option value="00">Choose...</option>
                            <option value="01">Beaches in Pangasinan</option>
                            <option value="02">Mountains in Pangasinan</option>
                            <option value="03">Tourist Spots in Pangasinan</option>
                            <option value="04">Traveller's Inn in Pangasinan</option>
                            <option value="05">Resorts in Pangasinan</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showA-5" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Category</label>
                        <select class="form-select" id="category4" name="category4">
                            <option value="00">Choose...</option>
                            <option value="01">Beaches in Siargao</option>
                            <option value="02">Tourist Spots in Siargao</option>
                            <option value="03">Traveller's Inn in Siargao</option>
                            <option value="04">Resorts in Siargao</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB" style="margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="options2" name="options2">
                            <option>Pick a Category first</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-1" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg1" name="subcateg1">
                            <option value="00">Choose...</option>
                            <option value="01">Coral Beach Club</option>
                            <option value="02">Matabungkay Beach Hotel</option>
                            <option value="03">Crusoe Cabins Casobe</option>
                            <option value="04">Pico Sands Hotel</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-2" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg2" name="subcateg2">
                            <option value="00">Choose...</option>
                            <option value="01">Laiya Adventure Park</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-3" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg3" name="subcateg3">
                            <option value="00">Choose...</option>
                            <option value="01">Taal Volcano</option>
                            <option value="02">Milea Bee Farm</option>
                            <option value="03">Fortune Island</option>
                            <option value="04">Fantasy World</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-4" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg4" name="subcateg4">
                            <option value="00">Choose...</option>
                            <option value="01">Cintai - Coritos Garden Hotel</option>
                            <option value="02">Days Hotel By Wyndham Batangas</option>
                            <option value="03">Solano Hotel</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-5" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg5" name="subcateg5">
                            <option value="00">Choose...</option>
                            <option value="01">Camp Netanya Resort And Spa</option>
                            <option value="02">Batangas Country Club</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-1-1" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg6" name="subcateg6">
                            <option value="00">Choose...</option>
                            <option value="01">Panglao Beach</option>
                            <option value="02">Talisay Beach</option>
                            <option value="03">Can-Uba Beach</option>
                            <option value="04">Palo Beach</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-2-1" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg7" name="subcateg7">
                            <option value="00">Choose...</option>
                            <option value="01">Mt. Matunog</option>
                            <option value="02">Tayong Peak</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-3-1" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg8" name="subcateg8">
                            <option value="00">Choose...</option>
                            <option value="01">Chocolate Hills Adventure Park</option>
                            <option value="02">Blood Compact Site</option>
                            <option value="03">Philippine Tarsier Sanctuary</option>
                            <option value="04">Danao Adventure Park</option>
                            <option value="05">Mirror Of The World</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-4-1" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg9" name="subcateg9">
                            <option value="00">Choose...</option>
                            <option value="01">Brielles Travellers Inn</option>
                            <option value="02">Highway To H, Travellers Inn</option>
                            <option value="03">J&R Residence</option>
                            <option value="04">Isis Bungalows</option>
                            <option value="05">Greenhut Pension & Bar</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-5-1" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg10" name="subcateg10">
                            <option value="00">Choose...</option>
                            <option value="01">The Peacock Garden</option>
                            <option value="02">Loboc River Resort</option>
                            <option value="03">Villa De Gloria</option>
                            <option value="04">Hennan Resort Alona Beach</option>
                            <option value="05">Three Little Birds Resort</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-1-2" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg11" name="subcateg11">
                            <option value="00">Choose...</option>
                            <option value="01">Pescador Island</option>
                            <option value="02">Lambug Beach</option>
                            <option value="03">Virgin Island</option>
                            <option value="04">Langub Beach</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-2-2" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg12" name="subcateg12">
                            <option value="00">Choose...</option>
                            <option value="01">Osmeña Peak</option>
                            <option value="02">Mt. Manunggal</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-3-2" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg13" name="subcateg13">
                            <option value="00">Choose...</option>
                            <option value="01">Magellan's Cross</option>
                            <option value="02">Grandeur Of The Temple Of Leah</option>
                            <option value="03">Flowers At Sirao Garden</option>
                            <option value="04">Museo Sugbo</option>
                            <option value="05">Lechon Food Trip</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-4-2" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg14" name="subcateg14">
                            <option value="00">Choose...</option>
                            <option value="01">Cargotel Travel Inn</option>
                            <option value="02">Express Inn</option>
                            <option value="03">Frankfurter Deluxe Inn</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-5-2" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg15" name="subcateg15">
                            <option value="00">Choose...</option>
                            <option value="01">Jpark Island Resort & Waterpark</option>
                            <option value="02">Plantation Bay Resort & Spa</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-1-3" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg16" name="subcateg16">
                            <option value="00">Choose...</option>
                            <option value="01">Treasures Of Bolinao</option>
                            <option value="02">Tambobong White Beach Resort</option>
                            <option value="03">Grey Sands Beach And Resort</option>
                            <option value="04">Tondol White Sand Beach</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-2-3" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg17" name="subcateg17">
                            <option value="00">Choose...</option>
                            <option value="01">Balungao Hilltop Adventure</option>
                            <option value="02">VIEWtiful Deck Nature Park</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-3-3" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg18" name="subcateg18">
                            <option value="00">Choose...</option>
                            <option value="01">Our Lady Of Manaoag Shrine</option>
                            <option value="02">Tayug Sunflower Eco Park</option>
                            <option value="03">Bolinao Falls</option>
                            <option value="04">Hundred Islands National Park</option>
                            <option value="05">Natividad Sky Park</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-4-3" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg19" name="subcateg19">
                            <option value="00">Choose...</option>
                            <option value="01">2428 Suites</option>
                            <option value="02">RDT Hotels & Spa</option>
                            <option value="03">Ruperto's Inland Resort</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-5-3" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg20" name="subcateg20">
                            <option value="00">Choose...</option>
                            <option value="01">Riverside Resort</option>
                            <option value="02">Aquatica Marina Water Park</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-1-4" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg21" name="subcateg21">
                            <option value="00">Choose...</option>
                            <option value="01">Siargao Island Villas</option>
                            <option value="02">Isla Cabana Resort</option>
                            <option value="03">Romantic Beach Villas Siargao</option>
                            <option value="04">Las Palmas Villas And Casitas Siargao</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-2-4" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg22" name="subcateg22">
                            <option value="00">Choose...</option>
                            <option value="01">Cloud 9</option>
                            <option value="02">Siargao Naked Island</option>
                            <option value="03">Sugba Lagoon</option>
                            <option value="04">Sohoton Cove National Park</option>
                            <option value="05">Magpupungko Rock Pools</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-3-4" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg23" name="subcateg23">
                            <option value="00">Choose...</option>
                            <option value="01">Siargao Inn Beach Resort</option>
                            <option value="02">Vivo Inn</option>
                            <option value="03">Payag Suites</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showB-4-4" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                        <select class="form-select" id="subcateg24" name="subcateg24">
                            <option value="00">Choose...</option>
                            <option value="01">Tropical Temple Siargao Resort</option>
                            <option value="02">Club Tara Resort</option>
                            <option value="03">Jonas & Twins Resort</option>
                            <option value="04">Soeliana Resort</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showC" style="margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Packages</label>
                        <select class="form-select" id="options2" name="options2">
                            <option>Pick a Sub-Category first</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" id="showC-coral" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Packages</label>
                        <select class="form-select" id="package1" name="package1">
                            <option value="00">Choose...</option>
                            <option value="01">PACKAGE 1: P4,737/NIGHT, PREMIER, GOOD FOR 2 PAX, FREE BREAKFAST FOR 2, PARKING, COFFEE & TEA, FREE WIFI, DRINKING WATER, </option>
                            <option value="02">PACKAGE 2: P5,341/NIGHT, DELUXE COTTAGE, GOOD FOR 2 PAX, FREE BREAKFAST FOR 2, PARKING, COFFEE & TEA, FREE WIFI, DRINKING WATER</option>
                            <option value="03">PACKAGE 3: P5,999/NIGHT, OCEAN VIEW, GOOD FOR 3-4 PAX, FREE BREAKFAST FOR 2, FREE PARKING, FREE WIFI, DRINKING WATER</option>
                        </select>
                    </div>
                    <div class="input-group input-group-lg control-group" id="showC-matabungkay" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Packages</label>
                        <select class="form-select" id="package1" name="package1">
                            <option value="00">Choose...</option>
                            <option value="01">PACKAGE 1: P4,441/NIGHT DELUXE, GOOD FOR 1-2 PAX, FREE BREAKFAST FOR 2, PARKING, FREE WIFI</option>
                            <option value="02">PACKAGE 2: P5,553/NIGHT DELUXE SUITE, GOOD FOR 2-3 PAX, FREE BREAKFAST FOR 2</option>
                            <option value="03">PACKAGE 3: P9,689/NIGHT GARDEN VILLA, GOOD FOR 4-6 PAX, FREE BREAKFAST FOR 5</option>
                        </select>
                    </div>
                    <div class="input-group input-group-lg control-group" id="showC-crusoe" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Packages</label>
                        <select class="form-select" id="package1" name="package1">
                            <option value="00">Choose...</option>
                            <option value="01">GARDEN CABIN: P9,522/NIGHT GOOD FOR 2-4 PAX, 1 QUEEN BED, FREE BREAKFAST</option>
                            <option value="02">PREMIER GARDEN CABIN: P10,689/NIGHT GOOD FOR 4-6 PAX, 1 QUEEN BED, FREE BREAKFAST</option>
                            <option value="03">SEAVIEW CABIN: P11,856/NIGHT GOOD FOR 4-8 PAX, 2 DOUBLE BED, FREE BREAKFAST</option>
                            <option value="04">BEACHFRONT CABIN: P13,022/NIGHT GOOD FOR 4-8 PAX, 2 BUNK BEDS, FREE BREAKFAST</option>
                        </select>
                    </div>
                    <div class="input-group input-group-lg control-group" id="showC-pico" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Packages</label>
                        <select class="form-select" id="package1" name="package1">
                            <option value="00">Choose...</option>
                            <option value="01">STANDARD ROOM: P7,212/NIGHT GOOD FOR 2 PAX, 1 QUEEN BED, FREE BREAKFAST FOR 2</option>
                            <option value="02">SUPERIOR ROOM: P7,000/NIGHT GOOD FOR 3 PAX, 1 KING BED</option>
                            <option value="03">PREMIER ROOM: P7,838/NIGHT GOOD FOR 2-4 PAX, 2 QUEEN BEDS, FREE BREAKFAST FOR 2</option>
                            <option value="04">SUPERIOR ROOM: P8,146/NIGHT GOOD FOR 2-3 PAX, 1 KING BED, 1 SINGLE BED, FREE BREAKFEAST FOR 2</option>
                            <option value="05">DELUXE ROOM: P8,570/NIGHT GOOD FOR 2-4 PAX, 2 QUEEN BEDS, FREE BREAKFAST FOR 2</option>
                        </select>
                    </div>
                    <div class="input-group input-group-lg control-group" id="showC-laiya" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Packages</label>
                        <select class="form-select" id="package1" name="package1">
                            <option value="00">Choose...</option>
                            <option value="01">ADVENTURE PACKAGE A: P730</option>
                            <option value="02">ADVENTURE PACKAGE B: P600</option>
                            <option value="03">ADVENTURE PACKAGE C: P400</option>
                        </select>
                    </div>
                    <div class="input-group input-group-lg control-group" id="showC-taal" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Packages</label>
                        <select class="form-select" id="package1" name="package1">
                            <option value="00">Choose...</option>
                            <option value="01">THE LAKE HOTEL TAGAYTAY: P4,176 FOR 24 HOURS WITH AIRCON, SHOWER, MINI-REF GOOD FOR 2-4 PAX</option>
                            <option value="02">TAAL VISTA HOTEL: P6,585 FOR 24 HOURS WITH AIRCON, SHOWER, MINI-REF GOOD FOR 4 PAX</option>
                        </select>
                    </div>
                    <div class="input-group input-group-lg control-group" id="showC-milea" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Packages</label>
                        <select class="form-select" id="package1" name="package1">
                            <option value="00">Choose...</option>
                            <option value="01">THE ZILLION BUILDERS PAVILION: P1,746 FOR 24 HOURS WITH AIRCON, SHOWER, MINI-REF GOOD FOR 2-3 PAX</option>
                            <option value="02">SOLANO HOTEL: P8,211 FOR 24 HOURS WITH AIRCON, SHOWER, MINI-REF GOOD FOR 2-4 PAX</option>
                            <option value="03">MEACO ROYAL HOTEL: P1,486 FOR 24 HOURS WITH AIRCON, SHOWER, MINI-REF WITH BREAKFAST GOOD FOR 2-3 PAX</option>
                        </select>
                    </div>
                    <div class="input-group input-group-lg control-group" id="showC-fortune" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Packages</label>
                        <select class="form-select" id="package1" name="package1">
                            <option value="00">Choose...</option>
                            <option value="01">CANYON COVE HOTEL AND SPA: P9,939 FOR 24 HOURS WITH AIRCON, SHOWER, MINI-REF GOOD FOR 2-3 PAX</option>
                            <option value="02">OYO 816 OKTOWAVES HOTEL: P2,840 FOR 24 HOURS WITH AIRCON, SHOWER, MINI-REF GOOD FOR 2-4 PAX</option>
                        </select>
                    </div>
                    <div class="input-group input-group-lg control-group" id="showC-fantasy" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Packages</label>
                        <select class="form-select" id="package1" name="package1">
                            <option value="00">Choose...</option>
                            <option value="01">STARDUST BEACH HOTEL: P2,401 FOR 24 HOURS WITH AIRCON, SHOWER, MINI-REF GOOD FOR 2-3 PAX</option>
                            <option value="02">WHITE AND YELLOW CASTLE RESORT AND HOTEL: P1,879 FOR 24 HOURS WITH AIRCON, SHOWER, MINI-REF GOOD FOR 2-4 PAX</option>
                        </select>
                    </div>
                    <div class="input-group input-group-lg control-group" id="showC-cintai" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Packages</label>
                        <select class="form-select" id="package1" name="package1">
                            <option value="00">Choose...</option>
                            <option value="01">TERRACE VILLA: P3,736/NIGHT GOOD FOR 2 PAX, FREE BREAKFAST FOR 1, 1 QUEEN BED</option>
                            <option value="02">GARDEN VILLA: P8,999/NIGHT GOOD FOR 8 PAX (6 ADULTS AND 2 KIDS), FREE BREAKFAST FOR 6, 3 QUEEN BEDS</option>
                        </select>
                    </div>
                    <div class="input-group input-group-lg control-group" id="showC-days" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Packages</label>
                        <select class="form-select" id="package1" name="package1">
                            <option value="00">Choose...</option>
                            <option value="01">SUPERIOR: P3,009/NIGHT GOOD FOR 4 PAX (2 ADULTS, 2 KIDS), 2 SINGLE BED</option>
                            <option value="02">DELUXE: P3,709/NIGHT GOOD FOR 4 PAX, 2 QUEEN BEDS</option>
                            <option value="03">SUITE: P2,459/NIGHT GOOD FOR 2 PAX, 1 QUEEN BED</option>
                        </select>
                    </div>
                    <div class="input-group input-group-lg control-group" id="showC-solano" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Packages</label>
                        <select class="form-select" id="package1" name="package1">
                            <option value="00">Choose...</option>
                            <option value="01">SUPERIOR DOUBLE ROOM: P5,599/NIGHT GOOD FOR 4 PAX (2 ADULTS, 2 KIDS), 2 DOUBLE BEDS</option>
                            <option value="02">DELUXE DOUBLE ROOM: P6,399/NIGHT GOOD FOR 4 PAX (2 ADULTS, 2 KIDS), 2 DOUBLE BEDS OR 2 SINGLE BEDS</option>
                            <option value="03">SUITE: P8,999/NIGHT GOOD FOR 4 PAX (2 ADULTS, 2 KIDS), 1 KING BED OR 1 KING BED AND 1 SINGLE BED</option>
                        </select>
                    </div>
                    <div class="input-group input-group-lg control-group" id="showC-netanya" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Packages</label>
                        <select class="form-select" id="package1" name="package1">
                            <option value="00">Choose...</option>
                            <option value="01">ROOM TYPE 1: P5,572/NIGHT DELUXE TWIN, GOOD FOR 2 PAX, 2 SINGLE BEDS, PARKING, COFFEE & TEA, FREE WIFI, DRINKING WATER</option>
                            <option value="02">ROOM TYPE 2: P6,368/NIGHT SUPERIOR - KING SIZE BED, GOOD FOR 2-3 PAX, PARKING, COFFEE & TEA, FREE WIFI, DRINKING WATER</option>
                            <option value="03">ROOM TYPE 3: P6,999/NIGHT VILLA, GOOD FOR 2-4 PAX, PARKING, COFFEE & TEA, FREE WIFI, DRINKING WATER, 1 KING BED</option>
                        </select>
                    </div>
                    <div class="input-group input-group-lg control-group" id="showC-club" style="display:none; margin: 10px;">
                        <label class="input-group-text" for="inputGroupSelect01">Packages</label>
                        <select class="form-select" id="package1" name="package1">
                            <option value="00">Choose...</option>
                            <option value="01">SUPERIOR ROOM: P3,502/NIGHT PARKING, EXPRESS CHECK-IN, FREE WIFI, FREE FITNESS CENTER ACCESS, GOOD FOR 2 PAX, FREE BREAKFAST FOR 2</option>
                        </select>
                    </div>

                    <div class="input-group input-group-lg control-group" style="margin-left: 10px;">
                        <button class="btn btn-success" onclick="pay()">Book now!</button>
                    </div>

                </div>
            </div>
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
    
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <!-- custom js file link  -->
    <script src="script/book.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
</body>
</html>
<?php 
}else{
    header("Location: loginpage.php");
    exit();
}
?>