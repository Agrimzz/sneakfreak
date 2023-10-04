<?php
    require_once "db.php";

    if(!empty($_POST)){
        $sname = $_POST['sname'];
        $sname = mysqli_real_escape_string($conn,$sname);
        $price = $_POST['price'];
        $desc = $_POST['desc'];
        $desc = mysqli_real_escape_string($conn,$desc);
        $bname = $_POST['brand'];
        $targetDir = "images/shoes/";
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        // $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        // $filename = md5(microtime()).'.'.$ext;

        // $name = $_FILES ['image']['name'];
        // $tmpname = $_FILES['image']['tmp_name'];

        // if(move_uploaded_file($tmpname,$name)){
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
            
            $query2 = "SELECT bid FROM brand where bname = $bname";
            $result = mysqli_query($conn,$query2);
            $row = mysqli_fetch_assoc($result);
            // $bid = $row['bid'];

            $query = "INSERT INTO product(pname, price, description, image, bid) VALUES('$sname', '$price', '$desc', '$fileName', '$bname')";
            $res = mysqli_query($conn,$query); 
            

            if($res){
                header('Location: admin.php');
            }

            else{
                echo "there was a problem";
            }
        }
    }

?>