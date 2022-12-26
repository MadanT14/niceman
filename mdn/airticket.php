<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Air Ticketing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="./css/airticket.css">
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
            
            <h2 class="dash-title">Book an Air Tickets</h2>
            
            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <div>
                            <p class="warning">Make sure to submit payment before booking air tickets.<br> If you haven't submitted <a class="forward-payment" href="">Click here</a> </p>
                            <form action="" method="post">
                                <input class="input-fields userlocation" type="text" name="user-location" id="" placeholder="Your Location" required>
                                <input class="input-fields " type="text" name="airlines" id="" placeholder="Airlines" required>
                                <input class="input-fields from" type="text" name="from" id="" placeholder="From" required>
                                <input class="input-fields to" type="text" name="to" id="" placeholder="To" required>
                                <button class="submit" type="submit" name="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
                



                
                <div class="card-single dat-timebox">
                    <div class="card-body">
                        <div class="date-time">
                            <h1 class="time">Loading </h1>
                            <p class="date">Loading Date ----</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </main>
        
    </div>
    <script>
        let a;
        let time;
        let date;
        setInterval(() => {
    
        a = new Date();
        time = a.getHours() + " : " + a.getMinutes() + " : " + a.getSeconds()
        date = a.toLocaleDateString();
        if(a.getHours()<12){
            document.querySelector(".time").innerHTML = `${time} AM`;
        }
        else{
            document.querySelector(".time").innerHTML = `${time} PM`;
        }
        document.querySelector(".date").innerHTML = date;
        }, 1000);

    </script>
</body>
</html>