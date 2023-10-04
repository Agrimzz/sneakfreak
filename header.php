<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>SneakFreak</title>
</head>
<body>
    <header>
        <section class="navigation row container">
            <div class="logo">
                <a href="index.php"><h2>SNEAK<span class="rrr">FREAK</span></h2></a>
            </div>
            <div class="log">
                <form action="search.php" method="get">
                    <input type="text" placeholder="Search" name="keyword">
                    <!-- <input type="submit" name="submit" value="Search"> -->
                </form>
                    <?php if(isset($_SESSION['fname'])):?>
                    <?php echo $_SESSION['fname']; ?>
                    <a href="logout.php">Logout</a>
                    <?php else: ?>
                        <a href="login.php">Login</a>
                    <?php endif; ?>
                
            </div>
        </section>
    </header>
    <nav class="container">
        <ul>
            <?php
                while($roww = mysqli_fetch_assoc($res2)){
            ?>
            <li><a href="brand.php?crit=<?= $roww['bid'];?>"><?php echo $roww['bname']?></a></li>
            <?php
                }
            ?>
        </ul>
    </nav>