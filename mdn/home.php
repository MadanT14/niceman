<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    header("location: login.php");
    exit;
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="./css/home.css">
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
            <?php
            // $user = $_SESSION['name'];
            // $query = mysqli_query($conn, "Select * from userdata where name = '$user' ");
            // $row = mysqli_fetch_array($query);
            // $id = $row['id'];
            // // $sel = "SELECT * FROM userdata";
            // // $query = mysqli_query($conn, $sel);
            // // $result = mysqli_fetch_assoc($query);


            $query = mysqli_query($conn, "SELECT * FROM `userdata` WHERE `name`='$_SESSION[loggedin]'") or die(mysqli_error());
            $fetch = mysqli_fetch_array($query);
            
            ?>
            <h2 class="dash-title">Welcome <?php echo $fetch['username']; ?></h2>
            <p class="top-places">TOP PLACES</p>
            
            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body place-imgholder">
                            <img class="place1" src="./Images/place1.jpg" alt="">
                    </div>
                    <div class="card-footer">
                        <a href="">Pokara, Nepal</a>
                    </div>
                </div>
                
                <div class="card-single">
                    <div class="card-body">
                        <img class="place1" src="./Images/place3.jpg" alt="">
                       
                    </div>
                    <div class="card-footer">
                        <a href="">View all</a>
                    </div>
                </div>
                
                <div class="card-single">
                    <div class="card-body">
                        <img class="place1" src="./Images/place2.jpg" alt="">
        
                    </div>
                    <div class="card-footer">
                        <a href="">View all</a>
                    </div>
                </div>
            </div>
            
            
            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Recent activity</h3>
                        
                        <div class="table-responsive">
                            <iframe class="googlemap1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28505.163969887773!2d83.98342875467067!3d28.212445115526805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995937bbf0376ff%3A0xf6cf823b25802164!2sPokhara!5e0!3m2!1sen!2snp!4v1671961579912!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                        </div>
                    </div>
                    
                    <div class="summary">
                        <div class="summary-card">
                            <iframe class="youtube" src="https://www.youtube.com/embed/IQzfprW0Yl0?controls=0&amp;start=5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        
                        <div class="bday-card">
                            <div class="bday-flex">
                                <div class="bday-img"></div>
                                <div class="bday-info">
                                    <h5>Madan Timilsina</h5>
                                    <small>Contact Guide</small>
                                </div>
                            </div>
                            
                            <div class="text-center">
                                <button>
                                    <a class="guider" href="">Contact</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
        
    </div>
    
</body>
</html>