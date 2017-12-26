<?php
require_once("admin/db/mysql.php");
$product1 = mysqli_query($connect, "SELECT * FROM products WHERE title LIKE '%".$_GET['product1']."%' LIMIT 5");
$product2 = mysqli_query($connect, "SELECT * FROM products WHERE title LIKE '%".$_GET['product2']."%' LIMIT 5");
$product3 = mysqli_query($connect, "SELECT * FROM products WHERE title LIKE '%".$_GET['product3']."%' LIMIT 5");

?>
<!DOCTYPE html>
<html>
<head>
  <style>
    #livesearch {
      position: absolute;
      z-index: 9999;
      box-shadow:0 2px 9px rgba(0,0,0,.4);
      border: 1px solid #eee;
      list-style-type: none;
      margin: 0;
      padding: 0;
      background-color: white;
    }
    #livesearch > a > li {
      height: 83px;
      padding: 5px 7px;
    }
    #livesearch > a:link, li > a:visited, li > a:hover, li > a:active {
      text-decoration: none;
    }
    #livesearch > a > li > img {
      height: 83px;
      padding-right: 5px;
      float:left;
    }
    #livesearch > a > li > span {
      vertical-align: middle;
    }
  </style>
</head>
<body>
<!--------------- Product 1 ------------------->
<?php if ($_GET['product1']) { ?>
<ul id="livesearch">
<?php while($getproduct1 = mysqli_fetch_array($product1)) {?>
    <a href="?product1=<?php echo $getproduct1['id']?>"><li>
      <img src="<?php echo $getproduct1['url']?>">
      <span><?php echo $getproduct1['title']?></span>
    </li></a>
<?php } ?>
<?php } ?>
<!--------------- Product 2 ------------------->
<?php if (!empty($_GET['url1']) && empty($_GET['url2'])) { ?>
<?php if ($_GET['product2']) { ?>
<ul id="livesearch">
<?php while($getproduct2 = mysqli_fetch_array($product2)) {?>
    <a href="?product1=<?php echo $_GET['url1']; ?>
&product2=<?php echo $getproduct2['id']?>"><li>
      <img src="<?php echo $getproduct2['url']?>">
      <span><?php echo $getproduct2['title']?></span>
    </li></a>
<?php } ?>
<?php } ?>
<?php } else if (($_GET['url1']) == '') {?>
<?php if ($_GET['product2']) { ?>
<ul id="livesearch">
<?php while($getproduct2 = mysqli_fetch_array($product2)) {?>
    <a href="?product2=<?php echo $getproduct2['id']?>"><li>
      <img src="<?php echo $getproduct2['url']?>">
      <span><?php echo $getproduct2['title']?></span>
    </li></a>
<?php } ?>
<?php } ?>
<?php } ?>

<!--------------- Product 3 ------------------->
<?php if (!empty($_GET['url1']) && !empty($_GET['url2']) && empty($_GET['url3'])) {?>
<?php if ($_GET['product3']) { ?>
<ul id="livesearch">
<?php while($getproduct3 = mysqli_fetch_array($product3)) {?>
    <a href="<?php echo '?product1='.$_GET['url1'].'&product2='.$_GET['url2']; ?>&product3=<?php echo $getproduct3['id']?>"><li>
      <img src="<?php echo $getproduct3['url']?>">
      <span><?php echo $getproduct3['title']?></span>
    </li></a>
<?php } ?>
<?php } ?>
<?php } else {?>
<?php if ($_GET['product3']) { ?>
<ul id="livesearch">
<?php while($getproduct3 = mysqli_fetch_array($product3)) {?>
    <a href="?product3=<?php echo $getproduct3['id']?>"><li>
      <img src="<?php echo $getproduct3['url']?>">
      <span><?php echo $getproduct3['title']?></span>
    </li></a>
<?php } ?>
<?php } ?>
<?php } ?>

</ul>
</body>
</html>