<?php

    require_once("admin/includes/header.php");
    require_once("admin/includes/footer.php");
    require_once("admin/includes/form.php");
    require_once("admin/db/mysql.php");

 if (isset($_GET['id'])) {
     if ($_GET['id']) {
        $get = "SELECT * FROM articles WHERE id ='".addslashes($_GET['id'])."'";
        $getinfo =  mysqli_fetch_array(mysqli_query($connect, $get));
     }
 } 
?>

<!DOCTYPE html>
<html>
 
<head> 
    <?php echo $headerp; ?>
    <title><?php echo $getinfo['title'] ?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
    <style>
      .container {
        width: 50%;
        margin: auto;
      }
    </style>
    
</head>
<body>
   <?php echo $nav; ?>
    <?php echo $form; ?>
  <div class="container">
  <h1><?php echo $getinfo['title'] ?></h1>
  
  <p><img src= "<?php echo $getinfo['url'] ?>" alt = "Cannot load image" style = "width:512px; height:256px"> </p>
  <p><?php echo $getinfo['content'] ?></p>
  
  
  <div id="disqus_thread">
<script>


(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//http-excelsiorvn-ml.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
          </div>
  </div>
  <?php echo $footerp; ?>
</body>
</html>