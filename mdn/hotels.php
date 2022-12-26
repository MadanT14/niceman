<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Hotels</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="./css/hotels.css">
</head>
<body>
    
    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="ti-unlink"></span> 
                <span>WC Travel</span>
            </h3> 
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>
        
        <div class="sidebar-menu">
            <ul>
            <li class="home-bar">
                    <a href="./home.php">
                        <span class="ti-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li class="hotelbar">
                    <a href="./hotels.php">
                        <span class="ti-agenda"></span>
                        <span>Hotels</span>
                    </a>
                </li>
                <li class="airticket-bar">
                    <a href="./airticket.php">
                        <span class="ti-ticket"></span>
                        <span>Air Ticketing</span>
                    </a>
                </li>
                <li class="pakagebar">
                    <a href="">
                        <span class="ti-location-pin"></span>
                        <span>Travel Pakages</span>
                    </a>
                </li>
                <li class="payment-bar">
                    <a href="./payment.php">
                        <span class="ti-credit-card"></span>
                        <span>Payment</span>
                    </a>
                </li>
                <li class="contact-bar">
                    <a href="./contact.php">
                        <span class="ti-email"></span>
                        <span>Contact</span>
                    </a>
                </li>
                <li class="feedback-bar">
                    <a href="./feedback.php">
                        <span class="ti-comments-smiley"></span>
                        <span>Feedback</span>
                    </a>
                </li>
 
                <li class="user-setting-bar">
                    <a href="./user-setting.php">
                        <span class="ti-settings"></span>
                        <span>Account</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    
    <div class="main-content">
        
        <header>
            <div class="search-wrapper">
                <span class="ti-search"></span>
                <input type="search" placeholder="Search">
            </div>
            
            <div class="social-icons">

                <div></div>
            </div>
        </header>
        
        <main>
            
            <h2 class="dash-title">Choose hotels for your destination</h2>
            
            <div class="dash-cards">



                <div class="card-single">
                    <div class="card-body place-imgholder">
                        <img class="place1" src="./Images/nepali hotel.jpg" alt="">
                    </div>
                    <div class="card-footer">
                        <p class="hotel-name">Hamro Hotel</p>
                        <p class="hotel-details hotel-cost">Cost: $16.99</p>
                        <p class="hotel-details hotel-location">Location: Nagdhunga Pokhara-33700</p>
                        <p class="hotel-details available-room">Available rooms: 14</p>
                        <a class="booking" href="">Click to book</a>
                    </div>
                </div>


                <div class="card-single">
                    <div class="card-body place-imgholder">
                        <img class="place1" src="./Images/Four seasons.jpg" alt="">
                    </div>
                    <div class="card-footer">
                        <p class="hotel-name">Four Seasons</p>
                        <p class="hotel-details hotel-cost">Cost: $79.99</p>
                        <p class="hotel-details hotel-location">Location: California, United States-9900</p>
                        <p class="hotel-details available-room">Available rooms: 45</p>
                        <a class="booking" href="">Click to book</a>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body place-imgholder">
                        <img class="place1" src="./Images/Aman resort.jpg" alt="">
                    </div>
                    <div class="card-footer">
                        <p class="hotel-name">Aman Resort</p>
                        <p class="hotel-details hotel-cost">Cost: $89.99</p>
                        <p class="hotel-details hotel-location">Location: Parkojar-781, Iceland</p>
                        <p class="hotel-details available-room">Available rooms: 12</p>
                        <a class="booking" href="">Click to book</a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body place-imgholder">
                        <img class="place1" src="./Images/hotel valentine.jpg" alt="">
                    </div>
                    <div class="card-footer">
                        <p class="hotel-name">Hotel Valentine</p>
                        <p class="hotel-details hotel-cost">Cost: $499.99</p>
                        <p class="hotel-details hotel-location">Location: Bunkyo City, Tokyo, Japan-204</p>
                        <p class="hotel-details available-room">Available rooms: 108</p>
                        <a class="booking" href="">Click to book</a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body place-imgholder">
                        <img class="place1" src="./Images/south korea hotel.jpg" alt="">
                    </div>
                    <div class="card-footer">
                        <p class="hotel-name">The Peninsula Chicago</p>
                        <p class="hotel-details hotel-cost">Cost: $119.99</p>
                        <p class="hotel-details hotel-location">Location: Songpa-gu, Seoul, South Korea</p>
                        <p class="hotel-details available-room">Available rooms: 98</p>
                        <a class="booking" href="">Click to book</a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body place-imgholder">
                        <img class="place1" src="./Images/canadian hotel.jpg" alt="">
                    </div>
                    <div class="card-footer">
                        <p class="hotel-name">Giggle Resort</p>
                        <p class="hotel-details hotel-cost">Cost: $45.99</p>
                        <p class="hotel-details hotel-location">Location: Toronto Ontario-45, Canada</p>
                        <p class="hotel-details available-room">Available rooms: 145</p>
                        <a class="booking" href="">Click to book</a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body place-imgholder">
                        <img class="place1" src="./Images/iceland hotel.jpg" alt="">
                    </div>
                    <div class="card-footer">
                        <p class="hotel-name">Parkonicok's Angels</p>
                        <p class="hotel-details hotel-cost">Cost: $99.99</p>
                        <p class="hotel-details hotel-location">Location: Parkojar-781, Iceland</p>
                        <p class="hotel-details available-room">Available rooms: 45</p>
                        <a class="booking" href="">Click to book</a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body place-imgholder">
                        <img class="place1" src="./Images/hotel china.jpg" alt="">
                    </div>
                    <div class="card-footer">
                        <p class="hotel-name">Hotel China</p>
                        <p class="hotel-details hotel-cost">Cost: $180</p>
                        <p class="hotel-details hotel-location">Location: Putuo, Shanghai, China-200063</p>
                        <p class="hotel-details available-room">Available rooms: 45</p>
                        <a class="booking" href="">Click to book</a>
                    </div>
                </div>






                
            </div>
            
        </main>
        
    </div>
    
</body>
</html>