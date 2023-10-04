<?php
    require_once "db.php";

    $id = $_GET['id'];
    $query = "DELETE FROM product where pid = $id";
    $res = mysqli_query($conn,$query);
    if ($res){
        echo '<script>alert("Succesfully Delete")</script>';
        sleep(1);
        header( 'Location:admin.php');
    }
    else{

    }
?>
