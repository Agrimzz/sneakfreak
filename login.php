<?php

session_start();
if (isset($_SESSION['fname']) && $_SESSION['is_login'] = true) {
    header('Location: index.php');
}
require_once("db.php");

$errors = [
    'email' => '',
    'password' => ''
];

// }

if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM user where email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $userinfo = mysqli_fetch_assoc($result);
        $_SESSION['fname'] = $userinfo['fname'];
        $_SESSION['is_login'] = true;
        header('Location: index.php');
    } else {
        echo "Error";
    }
}

$query2 = "SELECT * FROM brand";
$res2 = mysqli_query($conn, $query2);


require_once "header.php";
?>

<section class="log-sec">
    <div class="log-form">
        <h2>Login</h2>
        <form action="" method="post">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button href="" class="login">LOG IN</button>
        </form>
        <hr>
        <p>NEW TO SNEAKFREAK?</p>
        <a href="register.php" class="signup">CREATE ACCOUNT</a>
    </div>
</section>
<footer>
    <div class="foot container">
        <p>&copy;2022 SneakFreak. All Rights Reserved</p>
    </div>
</footer>
</body>

</html>