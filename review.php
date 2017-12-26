<?php
    require_once("admin/includes/header.php");
    require_once("admin/includes/footer.php");
    require_once("admin/includes/form.php");
    require_once("admin/db/mysql.php");

$list = "SELECT * FROM articles ORDER BY id ASC";
$getlist = mysqli_query($connect, $list);

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
      
      
     
    
  <div class="main-article">
            <div class="reviews1">
   
                <div class="latestart">
                
                        <h3>Reviews</h3>
                      <img src= "http://specials-images.forbesimg.com/imageserve/38606109/960x0.jpg?fit=scale" height= "402px" width="700px">
                      
                    </a>
                </div>
                <div class="news">
                    <div class="box-art1">
                        <a href="articles_out.php?id=11">
                            <h3>Apple iPhone 7 review</h3>
                            <img src="http://cdn.gsmarena.com/imgroot/reviews/16/apple-iphone-7/-347x151/thumb3.jpg" height = "200px" >    
                        </a>
                    </div>
                    <div class="box-art2">
                        <a href="articles_out.php?id=12">
                            <h3>Samsung Gear S3 review </h3>
                            <img src="http://cdn.gsmarena.com/imgroot/reviews/16/samsung-gear-s3/-347x151/gsmarena_001.jpg" height = "200px">
                        </a>    
                    </div>
                </div>
            </div>
                    
   <div class = "articles">
     <h2>New Releases</h2>
     
   <?php            
  while($row = mysqli_fetch_array($getlist)) {
  echo '<div class="images">';
  echo '<a href="articles_out.php?id='.$row['id'].'">'.'<img src="'.$row['url'].'" style = "width:400px;height:200px">'.'</a>'.'<br>'.'<br>'.'<br>';
  echo '<a href="articles_out.php?id='.$row['id'].'">'.$row['title'].'</a>'.'<br>';
  echo '</div>';
}
?>       
           
    </div>
  </div>
  
    <?php echo $footerp; ?>
    </body>
    </html>