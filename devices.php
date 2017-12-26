<?php
    require_once("admin/includes/header.php");
    require_once("admin/includes/footer.php");
    require_once("admin/includes/form.php");
    require_once("admin/db/mysql.php");

    $limit = 12;
    
    function page($getpage) {
      if ($getpage) {
        $page = $getpage;
      } else {
        $page = 1;
      }
      return $page;
    }

    $page = page($_GET['page']) - 1;

    function nextp($page) {
      global $limit;
      if ($page == 0) {
        $next = $page;
      } else {
        $next = $page * $limit;
      }
      return $next;
    }
    
    $next = nextp($page);

    function prev_pagi($page) {
      if ($page == 1) {
        $prev = $page - 1;
      } else if($page == 0) { 
        $prev = $page;
      } else {
        $prev = $page - 1;
      }
      return $prev;
    }
    
    $prev_pagi = prev_pagi(page($_GET['page']));

    $countall = mysqli_fetch_array(mysqli_query($connect, "SELECT COUNT(*) FROM products"));
    $all = mysqli_query($connect, "SELECT * FROM products LIMIT ".$next.",".$limit."");
    
    $countapple = mysqli_fetch_array(mysqli_query($connect, "SELECT COUNT(*) FROM products WHERE category='apple'"));
    $apple = mysqli_query($connect, "SELECT * FROM products WHERE category='apple' LIMIT ".$next.",".$limit."");

    $countsamsung = mysqli_fetch_array(mysqli_query($connect, "SELECT COUNT(*) FROM products WHERE category='samsung'"));
    $samsung = mysqli_query($connect, "SELECT * FROM products WHERE category='samsung' LIMIT ".$next.",".$limit."");
    
    $countsony = mysqli_fetch_array(mysqli_query($connect, "SELECT COUNT(*) FROM products WHERE category='sony'"));
    $sony = mysqli_query($connect, "SELECT * FROM products WHERE category='sony' LIMIT ".$next.",".$limit."");

    $countother = mysqli_fetch_array(mysqli_query($connect, "SELECT COUNT(*) FROM products WHERE category!='apple' AND category!='samsung' AND category!='sony'"));
    $other = mysqli_query($connect, "SELECT * FROM products WHERE category!='apple' AND category!='samsung' AND category!='sony' LIMIT ".$next.",".$limit."");
  
    $articles = mysqli_query($connect, "SELECT * FROM articles ORDER BY time DESC LIMIT 4");
?>

<!DOCTYPE html>
<html>

<head>
    <?php echo $headerp; ?>
    <script>
    // Run on document ready
    $(function() {
       // If the current url contains the string '&'
       if (document.location.href.indexOf('&apple') > -1)
       {
          // Use jQuery to set the value of the select box to 'apple'
          $('[name=cbo_brand]').val('device-list-Apple');
       }
       else if (document.location.href.indexOf('&samsung') > -1)
       {
          // Use jQuery to set the value of the select box to 'samsung'
          $('[name=cbo_brand]').val('device-list-Samsung');
       }
       else if (document.location.href.indexOf('&sony') > -1)
       {
          // Use jQuery to set the value of the select box to 'sony'
          $('[name=cbo_brand]').val('device-list-Sony');
       }
       else if (document.location.href.indexOf('&others') > -1)
       {
          // Use jQuery to set the value of the select box to 'others'
          $('[name=cbo_brand]').val('device-list-Others');
       }
    });
    </script>
</head>

<body>
<?php echo $nav; ?>
<?php echo $form; ?>
<div id="login-signup">
        <a class="" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Log in</a>
    </div>
    <div id="main_device_page">
        <nav id="cmp-device">
            <select name="cbo_brand" id="cbo_brand">
                <option value="device-list-All">All</option>
                <option value="device-list-Apple">Apple</option>
                <option value="device-list-Samsung">Samsung</option>
                <option value="device-list-Sony">Sony</option>
                <option value="device-list-Others">Others</option>
            </select>
        </nav>
        <nav class="device-list" id="device-list-Samsung">
          <?php while($getsamsung = mysqli_fetch_array($samsung)) { ?>
            <nav id="device-detail">
              <a href="products.php?id=<?php echo $getsamsung['id']; ?>">
                <img src="<?php echo $getsamsung['url']; ?>">
                <?php echo $getsamsung['title']; ?>
              </a>
            </nav>
          <?php } ?>
        </nav>
        <nav class="device-list" id="device-list-Sony">
          <?php while($getsony = mysqli_fetch_array($sony)) { ?>
            <nav id="device-detail">
              <a href="products.php?id=<?php echo $getsony['id']; ?>">
                <img src="<?php echo $getsony['url'];?>">
                <?php echo $getsony['title'];?>
              </a>
            </nav>
          <?php } ?>
          
        </nav>
        <nav class="device-list" id="device-list-Others">
          <?php while($getother = mysqli_fetch_array($other)) { ?>
            <nav id="device-detail">
              <a href="products.php?id=<?php echo $getother['id']; ?>">
                <img src="<?php echo $getother['url']; ?>">
                <?php echo $getother['title']; ?>
              </a>
          </nav>
          <?php } ?>
          
        </nav>
        <nav class="device-list" id="device-list-Apple">
          <?php while($getapple = mysqli_fetch_array($apple)) { ?>
            <nav id="device-detail">
              <a href="products.php?id=<?php echo $getapple['id']; ?>">
                <img src="<?php echo $getapple['url']; ?>">
                <?php echo $getapple['title'];?>
              </a>
            </nav>
          <?php } ?>
          
        </nav>
        <nav class="device-list" id="device-list-All">
          <?php while($getall = mysqli_fetch_array($all)) { ?>
            <nav id="device-detail">
              <a href="products.php?id=<?php echo $getall['id']; ?>">
                <img src="<?php echo $getall['url']; ?>">
                <?php echo $getall['title'];?>
              </a>
            </nav>
          <?php } ?>
          
        </nav>
         <nav id="page-choose">
              <span>Page: </span>
              <?php for($i=0;$i<=($countall['0']/12);$i++) { ?>
              <a class="page-num" href="/devices.php?page=<?php echo $i+1 ?>"><?php echo $i+1 ?></a>
              <?php } ?>
              <div class="angle">
                <a class="page-btn" href="/devices.php?page=<?php echo $prev_pagi ?>"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                <a class="page-btn" href="/devices.php?page=<?php echo $_GET['page'] + 1; ?>"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </div>
         </nav>
        <nav id="main-page-right-content">
            <nav id="recent-news">
                <span id="title-new" class="title">
                    News
                </span>
                <!--
                <span id="title-hot" class="title">
                    Hot
                </span>
-->
                <nav id="recent-news-item">
                    <ul>
                      <?php while($getarticles = mysqli_fetch_array($articles)) { ?>
                        <li>
                            <img src="<?php echo $getarticles['url']?>">
                            <span><a href="articles_out.php?id=<?php echo $getarticles['id']?>"><?php echo $getarticles['title']?></a></span>
                        </li>
                      <?php } ?>
                    </ul>
                </nav>
            </nav>
            <!--
            <nav id="ads">
                <img src="./img/ad3.jpg"/>
            </nav>
-->
        </nav>
    </div>
<?php echo $footerp; ?>
</body>

</html>