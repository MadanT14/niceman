<?php
$login = "";
$showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'connection.php';
$email = $_POST["email"];
$password = $_POST["password"];


$sql = "Select * from userdata where email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num == 1){
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    echo "<script> alert('YOU ARE LOGINNNED');
    </script>";
    header("location: home.php");
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login-signup.css">
    <title>Document</title>
</head>
<body>
    <section class="background">
        <div class="textbox">
            <div class="textitems">
                <h1>Welcome !</h1>
                <p>Please enter your information to continue to the jounrey and exploring. We were always waiting for you and we will love you to see you comming back again and again</p>
            </div>
        </div>
        <div class="form-box">
            <div class="form-items">
                <h1>Sign in</h1>
                <form action="" method="post">
                    <input class="login-details" type="email" name="email" id="" placeholder="Email">

                    <input class="login-details" type="password" name="password" id="" placeholder="Password">
                    <?php
                    if(!$login){
                        echo '<p class="invalid">Invalid Username or Password</p>';
                    }
                    ?>
                    <button type="submit" name="submit" class="submit">Submit</button>
                </form>

                <p class="already-account">Doesn't have account? <a href="./signup.php">Create new</a></p>

            </div>
        </div>
    </section>
</body>
</html>