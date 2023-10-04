<?php
    require_once "db.php";

    if(!empty($_POST)){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $cpassword = $_POST['cpassword'];

        $query = "INSERT INTO user (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$password')";
        $result = mysqli_query($conn, $query);
        if($result){
            echo "Registered Succesfully";
        }
        else{
            echo "Error";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <section class="navigation row container">
            <div class="logo">
            <a href="index.php"><h2>SNEAK<span class="rrr">FREAK</span></h2></a>
            </div>
            <div class="log">
                <input type="text" placeholder="Search">
                <span>Login</span>
            </div>
        </section>
    </header>
    <nav class="container">
        <ul>
            <li>Nike</li>
            <li>Addidas</li>
            <li>New Balance</li>
            <li>Under Armour</li>
            <li>Puma</li>
        </ul>
    </nav>

    <section class="log-sec">
        <div class="log-form">
            <h2>Sign Up</h2>
            <form action="" method="post">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname">
                <label for="text">Email</label>
                <input type="text" name="email" id="email">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <label for="cpassword">Confirm Password</label>
                <input type="password" name="cpassword" id="cpassword">
                <!-- <a href="" class="login">Sign Up</a> -->
                <button class="login">Sign up</button>
            </form>
            <hr>
            <p>NEW TO SNEAKFREAK?</p>
            <a href="login.php" class="signup">LOGIN</a>
        </div>
    </section>
    <footer>
        <div class="foot container">
            <p>&copy;2022 SneakFreak. All Rights Reserved</p>
        </div>
        
    </footer>
</body>
</html>