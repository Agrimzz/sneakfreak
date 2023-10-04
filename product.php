<?php
    $id = $_GET['criteria'];
    require_once "db.php";

    $sql = "SELECT * FROM product where pid = $id";
    $result = mysqli_query($conn,$sql);
    $prod = mysqli_fetch_assoc($result);
    $query2 = "SELECT * FROM brand";
    $res2 = mysqli_query($conn,$query2);

    require_once "header.php";
?>


    <section class="prod">
        <div class="prodd container">
            <div class="prod-img hidden">
                    <img src="images/shoes/<?php echo $prod['image']; ?>" alt="">
            </div>
            <div class="prod-desc hidden">
                <?php
                    $bid = $prod['bid']; 
                    $cat = "SELECT * FROM brand where bid = $bid";
                    $result2 = mysqli_query($conn,$cat);
                    $cate = mysqli_fetch_assoc($result2);
                ?>

                <p class="cat"><?php echo $cate['bname']; ?></p>
                <p class="prod-title"><?php echo $prod['pname']; ?></p>
                <!-- <hr> -->
                <p class="prod-price">$<?php echo $prod['price']; ?></p>
                <!-- <hr> -->
                <p class="about">About this product</p>

                <p class="desc"><?php echo $prod['description']; ?></p>
                <!-- <hr>                 -->
                <a href="" class="buy">Buy Now</a>
                <a href="" class="add">Add to Cart</a>
            </div>
            <!-- <div class="prod-img hidden">
                <img src="images/airforce.jpg" alt="">
            </div> -->
            <!-- <div class="prod-desc hidden">
                <p class="cat">Nike</p>
                <p class="prod-title">AirForce</p>
                <hr>
                <p class="prod-price">$$$</p>
                <hr>
                <p class="about">About this product</p>

                <p class="desc">Drake-inspired details imbue the NOCTA x Nike Air Force 1 Low ‘Certified Lover Boy’, an understated version of the unmistakable white-on-white AF1 colorway. Asymetric NOCTA and Nike Air branding on each heel tab ornament the white tumbled leather upper, with a nod to heritage details with a perforated toe box, variable width lacing and a low-cut padded collar. Drake's final wink is ‘Love You Forever’ inscribed in embossed lettering across the lateral sidewall of its white midsole, giving this classic a 2022 twist</p>
                <hr>                
                <a href="" class="buy">Buy Now</a>
                <a href="" class="add">Add to Cart</a>
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