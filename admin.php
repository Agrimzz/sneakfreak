<?php
    require_once "db.php";
    $sql = "SELECT * FROM brand";
    $result = mysqli_query($conn,$sql);
    $prod = mysqli_fetch_assoc($result);

    $query = "SELECT * FROM product ORDER BY pid DESC";
    $res = mysqli_query($conn,$query);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style/style.css"> -->
    <link rel="stylesheet" href="style/adstyle.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="title">
            <h1>Admin Panel</h1>
        </div>
    </header>
    <div class="wrapper">
        <div class="sidepanel">
            <div class="container">
                <div class="logo">
                    <h2>SNEAK<span class="rrr">FREAK</span> ADMIN</h2>
                </div>
            </div>
            <div class="admin-control">
                <ul>
                    <li id="add-prod">Add Products</li>
                    <li id="man-prod">Manage Products</li>
                </ul>
            </div>
        </div>
    

        

        <section class="pupload" id="pupload">
            
            <div class="upload">
                <h1>Add Products</h1>
                <form action="upload.php" class="upform container" method="post" enctype="multipart/form-data">
                    <label for="sname">Shoe Name</label>
                    <input type="text" name="sname" id="sname">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price">
                    <label for="desc">Description</label>
                    <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image">
                    <label for="brand">Brand</label>
                    <select name="brand" id="brand">
                    <?php
                        while($row = mysqli_fetch_assoc($result)){
                    ?>  
                        
                        <option value="<?= $row['bid']?>"><?php echo $row['bname']?></option>
                    <?php
                        }
                    ?>
                    </select>
                    <button>Upload</button>
                </form>
            </div>
        </section>

        <section class="mprod" id="mprod">
            <div class="manage">
                <h1>Manage Products</h1>
                <table>
                    <tr>
                        <th>PID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Brand</th>
                        <!-- <th>Quantity</th> -->
                        <th>Operations</th>
                    </tr>
                
                    <?php
                        while($row = mysqli_fetch_assoc($res)){
                            $bid = $row['bid']; 
                            $cat = "SELECT * FROM brand where bid = $bid";
                            $result2 = mysqli_query($conn,$cat);
                            
                    ?>
                    <tr>
                        <td><?php echo $row['pid'];?></td>
                        <td><?php echo $row['pname'];?></td>
                        <td><?php echo $row['price'];?></td>
                        <td><?php echo $row['description'];?></td>
                        <td><img src ="images/shoes/<?php echo $row['image'];?>"></td>
                        <td><?php 
                                while($cate = mysqli_fetch_assoc($result2)){
                                    echo $cate['bname']; }
                            ?>
                        </td>
                        <!-- <td> </td> -->
                        <td>
                            <a href="update.php?criteria=<?= $row['pid'];?>"><button>Edit</button></a>
                            <a href="delete.php?id=<?= $row['pid'];?>"><button>Delete</button></a>
                        </td>    
                    </tr>
                    <?php
                        }
                    ?>
                
                </table>
            </div>
        </section>
    </div>  
    <script src="js/admin.js"></script>
</body>
</html>