<?php
require 'connection.php';
if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];

    $query = "INSERT INTO userdata VALUES('', '$name', '$username', '$email', '$password', '$day', '$month', '$year')";
    mysqli_query($conn, $query);
    echo 
    "<script> alert('Your info was submitted');
     window.location.assign('login.php') 
    
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login-signup.css">
    <title>Signup</title>
</head>
<body>
    <section class="signup-background">
        <div class="form-box1">
            <div class="form-items1">
                <h1>Sign up</h1>
                <form action="" method="post">
                    <input class="signup-details" type="text" name="name" id="" placeholder="Full Name" required>
                    <input class="signup-details" type="text" name="username" id="" placeholder="Username" required>
                    <input class="signup-details" type="email" name="email" id="" placeholder="Email Address" required>
                    <input class="signup-details" type="password" name="password" id="" placeholder="Password" required>
                    <label for="">Date of Birth</label>
                    <input class="day" name="day" type="text" placeholder="Day" required>
                    <select class="form-dropdown" name="month" id="" required>
                    <option value="" selected hidden>Month</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                    <input class="year" type="text" name="year" placeholder="Year" required>
                    
                    <button type="submit" name="submit" class="submit submit2">Submit</button>
                </form>

                <p class="already-account">Already have account? <a href="./login.php">Login here</a></p>

            </div>
        </div>
        <div class="textbox">
            <div class="textitems">
                <h1>Explore, Dream, Discover</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio maxime cumque quasi officia tempore impedit, ex repellendus velit sed itaque?</p>
            </div>
        </div>
    </section>
</body>
</html>