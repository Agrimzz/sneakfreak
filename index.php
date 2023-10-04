<?php
    session_start();
    require_once "db.php";

    $query = "SELECT * FROM product ORDER BY pid DESC";
    $res = mysqli_query($conn,$query);
    $query2 = "SELECT * FROM brand";
    $res2 = mysqli_query($conn,$query2);

    require_once "header.php";
?>
 
    <section class="banner hidden">
        <img src="images/adidas.jpg" alt="">
    </section>

    <section class="new-arrivals">
        <div class="container">
            <h2 class="hidden">New Arrivals</h2>
            <div class="product">
                <?php
                    $i = 0;
                    while($row = mysqli_fetch_assoc($res)){
                        if($i<8){
                ?>
                <a class="shoe-box hidden" href="product.php?criteria=<?= $row['pid'];?>">
                    <img src="images/shoes/<?php echo $row['image'];?>" alt="">
                    <h3><?php echo $row['pname'];?></h3>
                </a>
                <?php
                    }
                    else{
                        break;
                    }
                    $i++;
                    }
                ?>
                <!-- <a class="shoe-box hidden" href="product.html">
                    <img src="images/airforce.jpg" alt="">
                    <h3>AirForce</h3>
                    <p>$$$</p>
                </a>
                <div class="shoe-box hidden">
                    <img src="images/airjordan1.jpg" alt="">
                    <h3>AirForce</h3>
                    <p>$$$</p>
                </div>
                <div class="shoe-box hidden">
                    <img src="images/dunk.jpg" alt="">
                    <h3>AirForce</h3>
                    <p>$$$</p>
                </div>
                <div class="shoe-box hidden">
                    <img src="images/jordan4.jpg" alt="">
                    <h3>AirForce</h3>
                    <p>$$$</p>
                </div> -->
            </div>
            <!-- <div class="product row">
                <div class="shoe-box hidden">
                    <img src="images/jordan11.jpg" alt="">
                    <h3>AirForce</h3>
                    <p>$$$</p>
                </div>
                <div class="shoe-box hidden">
                    <img src="images/yeezy.jpg" alt="">
                    <h3>AirForce</h3>
                    <p>$$$</p>
                </div>
                <div class="shoe-box hidden">
                    <img src="images/yeezyboost350.jpg" alt="">
                    <h3>AirForce</h3>
                    <p>$$$</p>
                </div>
                <div class="shoe-box hidden">
                    <img src="images/jordan7.jpg" alt="">
                    <h3>AirForce</h3>
                    <p>$$$</p>
                </div>
            </div> -->
        </div>
    </section>

    <section class="brand">
        <div class="brands container">
            
            <h2>Brands</h2>
            <div class="brand-col">
                <div class="brand-box">
                    <img src="images/logo1.webp" alt="">
                </div>
                <div class="brand-box">
                    <img src="images/logo2.webp" alt="">
                </div>
                <div class="brand-box">
                    <img src="images/logo3.webp" alt="">
                </div>
                <div class="brand-box">
                    <img src="images/logo4.webp" alt="">
                </div>
                <div class="brand-box">
                    <img src="images/logo5.webp" alt="">
                </div>
                <div class="brand-box">
                    <img src="images/logo6.webp" alt="">
                </div>
                <div class="brand-box">
                    <img src="images/logo7.webp" alt="">
                </div>
                <div class="brand-box">
                    <img src="images/logo8.webp" alt="">
                </div>
            </div>
<!-- 
            <div class="brand-col row">
                <div class="brand-box">
                    <img src="images/logo1.webp" alt="">
                </div>
                <div class="brand-box">
                    <img src="images/logo2.webp" alt="">
                </div>
                <div class="brand-box">
                    <img src="images/logo3.webp" alt="">
                </div>
                <div class="brand-box">
                    <img src="images/logo4.webp" alt="">
                </div>
                <div class="brand-box">
                    <img src="images/logo5.webp" alt="">
                </div>
                <div class="brand-box">
                    <img src="images/logo1.webp" alt="">
                </div>
                <div class="brand-box">
                    <img src="images/logo1.webp" alt="">
                </div>
                <div class="brand-box">
                    <img src="images/logo1.webp" alt="">
                </div>
                
            </div> -->
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