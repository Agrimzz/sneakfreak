<?php
    require_once "db.php";
    $id = $_GET['criteria'];
    $query = "SELECT * FROM product where pid = $id";
    $res = mysqli_query($conn,$query);
    $prod = mysqli_fetch_assoc($res);

    if(!empty($_POST)){
        $name = $_POST['sname'];
        $price = $_POST['price'];
        $desc = $_POST['desc']; 

        $query2 = "UPDATE product SET pname = '$name', price = '$price', description = '$desc' WHERE pid = $id ";
        $result = mysqli_query($conn,$query2);
        if($result){
            header('Location: admin.php');
        }
        else{
            echo "error";
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
    <link rel="stylesheet" href="style/adstyle.css">
</head>
<body>
<form class="upform container" method="post" enctype="multipart/form-data">
                    <label for="sname">Shoe Name</label>
                    <input type="text" name="sname" id="sname" value="<?php echo $prod['pname']; ?>">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" value="<?php echo $prod['price']; ?>">
                    <label for="desc">Description</label>
                    <textarea name="desc" id="desc" cols="30" rows="10" ><?php echo $prod['description']; ?></textarea>
                    <button>Edit</button>
                </form>
</body>
</html>