<?php


$conn = mysqli_connect("localhost", "root", "", "expenditure_system");

if (!$conn){
    die("Database not connected");
}

$errors = [
    'username' => '',
    'password' => ''
];


if(!empty($_POST)){
    if($_POST['submit'] == 'Login'){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sql = "SELECT * FROM users where user_name = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            header('Location: add.php');
        }
        else{
            echo "<script> alert ('invalid password')</script>";
            $errors['username'] = 'Username and Password do not match';
        }
    }
    else{
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        
        $checksql = "SELECT * FROM users";
        $checkres = mysqli_query($conn, $checksql);
        while($row = mysqli_fetch_assoc($checkres)){
            $checkuser = $row['username'];
            if($username === $checkuser){

                $errors['username'] = "Username already Exists";
                
            }else{

                if($password==$cpassword){
                    $password=md5($password);
                    $query = "INSERT INTO users (user_name, password) VALUES ('$username', '$password')";
                    $result = mysqli_query($conn, $query);
                    if($result){
                        echo "<script>console.log('register successfuly')</script>";
                    }
                    else{
                        echo "<script>alert ('register failed')</script>";
                    }
                }
                else{
                    echo "<script>alert ('password doesnot match')</script>";
                    $errors['password'] = "Password do not match";
                }
            }

            
        }
        
    }
}
?>