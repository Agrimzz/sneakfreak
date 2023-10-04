<?php
    require_once "db.php";

    if (isset($_GET['keyword'])) {
        $keyword = mysqli_real_escape_string($conn, $_GET['keyword']);
        $sql = "SELECT * FROM product WHERE pname LIKE '%$keyword%'";
        $result = mysqli_query($conn,$sql);
    }
    
    $query2 = "SELECT * FROM brand";
    $res2 = mysqli_query($conn,$query2);

    require_once "header.php";
?>


    <section class="search-result">
        <div class="container">
            <h1>Search Result for : <?php echo $keyword;?></h1>
            <div class="product">
                <?php 
                    if(mysqli_num_rows($result)>0){  
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                <a class="shoe-box " href="product.php?criteria=<?= $row['pid'];?>">
                    <img src="images/shoes/<?php echo $row['image'];?>" alt="">
                    <h3><?php echo $row['pname'];?></h3>
                </a>
                <?php
                        }    
                    }else{
                        echo "<h1>Result not found</h1>";
                    }
                ?>
            </div>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>