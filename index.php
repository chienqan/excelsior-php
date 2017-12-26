<?php
    require_once("admin/includes/header.php");
    require_once("admin/includes/footer.php");
    require_once("admin/includes/form.php");
    require_once("admin/db/mysql.php");
    
    $bigarticles = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM articles WHERE id='15'"));
    $smallarticles = mysqli_query($connect, "SELECT * FROM articles WHERE id!='15' ORDER BY time DESC LIMIT 4");
    $products = mysqli_query($connect, "SELECT * FROM products ORDER BY time DESC LIMIT 8"); /* ERROR APPLE */
    $phones = mysqli_query($connect, "SELECT * FROM products WHERE device='phone' LIMIT 8");
    $tablets = mysqli_query($connect, "SELECT * FROM products WHERE device='tablet' LIMIT 8");
    $watches = mysqli_query($connect, "SELECT * FROM products WHERE device='watch' AND id!='115' LIMIT 8");
?>

<!DOCTYPE html>
<html>
    
    <head>
        <?php echo $headerp; ?>
        <link rel="stylesheet" type="text/css" href="assets/css/home.css">
    </head>
    <body>
    <?php echo $nav; ?>
    <?php echo $form; ?>
    <div class="reviews">
        <div class="latestnews">
            <a href="articles_out.php?id=<?php echo $bigarticles['id']?>">
                <h3><?php echo $bigarticles['title']?>"</h3>
<!--                 <img src="assets/img/iphone.jpg" height="602px" width="792px"> -->
                <img src="<?php echo $bigarticles['url']?>" height="100%" width="100%">
            </a>
        </div>
        <div class="news">
          <?php while($getsmallarticles = mysqli_fetch_array($smallarticles)) { ?>
            <div class="box-news">
                <a href="articles_out.php?id=<?php echo $getsmallarticles['id'] ?>">
                    <h3><?php echo $getsmallarticles['title'] ?></h3>
                    <img src="<?php echo $getsmallarticles['url'] ?>" height="100%" width="100%">
                </a>
            </div>
          <?php } ?>
<!--             <div class="box-news">
                <a href="#">
                    <h3>news2</h3>
                    <img src="assets/img/home.jpeg" height="392" width="300">
                </a>
            </div>
            <div class="box-news">
                <a href="#">
                    <h3>news2</h3>
                    <img src="assets/img/home.jpeg" height="100%" width="100%">
                </a>
            </div>
            <div class="box-news">
                <a href="#">
                    <h3>news1</h3>
                    <img src="assets/img/desk.jpg" height="100%" width="100%">
                </a>
            </div> -->
        </div>
    </div>
    <div class="main">
            <div class="device">
                    <div class="device-title">
                         <h3>Lastest Product</h3>
                    </div>
                
                    <div class="device-box">
                      <?php while($getproducts = mysqli_fetch_array($products)) { ?>
                        <div class="device-box-content">
                            <a href="products.php?id=<?php echo $getproducts['id']?>">
                             <img src="<?php echo $getproducts['url']; ?>" width="160px" height="212px">
                             <span><?php echo $getproducts['title']; ?></span>
                            </a>
                        </div>
                      <?php } ?>
                    </div>
            </div>
            <div class="device">
                    <div class="device-title">
                         <h3>Phone Finder</h3>
                    </div>
                
                    <div class="device-box">
                      <?php while ($getphones = mysqli_fetch_array($phones)) { ?>
                        <div class="device-box-content">
                            <a href="products.php?id=<?php echo $getphones['id']?>">
                             <img src="<?php echo $getphones['url']; ?>" width="160px" height="212px">
                             <span><?php echo $getphones['title']; ?></span>
                            </a>
                        </div>
                      <?php } ?>
                    </div>
            </div>
            <div class="device">
                    <div class="device-title">
                         <h3>Tablet Finder</h3>
                    </div>
                    <div class="device-box">
                      <?php while($gettablets = mysqli_fetch_array($tablets)) { ?>
                        <div class="device-box-content">
                            <a href="products.php?id=<?php echo $gettablets['id']?>">
                             <img src="<?php echo $gettablets['url']; ?>" width="160px" height="212px">
                             <span><?php echo $gettablets['title']; ?></span>
                            </a>
                        </div>
                      <?php } ?>
                    </div>
                </div>
             
            <div class="device">
                <div class="device-title">
                     <h3>Watch Finder</h3>
                </div>
                <div class="device-box">
                  <?php while($getwatches = mysqli_fetch_array($watches)) { ?>
                    <div class="device-box-content">
                        <a href="products.php?id=<?php echo $getwatches['id']?>">
                         <img src="<?php echo $getwatches['url']?>" width="160px" height="212px">
                         <span><?php echo $getwatches['title']?></span>
                        </a>
                    </div>
                  <?php } ?>
                </div>
            </div>        
        </div>
    <?php echo $footerp; ?>
    </body>
</html>

