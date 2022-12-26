<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>User Setting</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="./css/user-setting.css">
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
            
            <h2 class="dash-title">User info</h2>
            
            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <div class="accountinfo">
                            <p class="username">Username : Unknown</p>
                            <p class="email">email : Unknown</p>
                            <p class="email">Last time logged in : Unknown</p>
                            <button name="" type="button" class="loggout">Logout</button>

                        </div>
                    </div>
                </div>
                
             
            
        </main>
        
    </div>
    
</body>
</html>