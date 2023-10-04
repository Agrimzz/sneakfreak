<?php
    session_start();
    $id = $_GET['crit'];
    require_once "db.php";

    $query = "SELECT * FROM product WHERE bid = $id";
    $res = mysqli_query($conn,$query);
    $query2 = "SELECT * FROM brand";
    $res2 = mysqli_query($conn,$query2);
    $query3 = "SELECT * FROM brand WHERE bid = $id";
    $res3 = mysqli_query($conn,$query3);
    $brand = mysqli_fetch_assoc($res3);
    
    require_once "header.php";
?>

    <section class="prod">
        <div class="container">
            <h2><?php echo $brand['bname']?></h2>
                <div class="product">
                    <?php
                        while($row = mysqli_fetch_assoc($res)){
                    ?>
                    <a class="shoe-box hidden" href="product.php?criteria=<?= $row['pid'];?>">
                        <img src="images/shoes/<?php echo $row['image'];?>" alt="">
                        <h3><?php echo $row['pname'];?></h3>
                    </a>
                    <?php
                        }
                    ?>
                </div>
        </div>
    </section>
    <footer>
        <div class="foot container">
            <p>&copy;2022 SneakFreak. All Rights Reserved</p>
        </div>
        
    </footer>
    <script src="js/script.js"></script>
</body>
</html>