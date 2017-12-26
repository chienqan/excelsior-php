<?php
    require_once("admin/includes/header.php");
    require_once("admin/includes/footer.php");
    require_once("admin/includes/form.php");
    require_once("admin/db/mysql.php");
    if ($_GET['product1']) {
      $product1 = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM products WHERE id='".$_GET['product1']."'"));
    } else {
      $product1 = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM products WHERE id='1'"));
    }
    if ($_GET['product2']) {
      $product2 = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM products WHERE id='".$_GET['product2']."'"));
    } else {
      $adddevice1 = array("title" => "Add a device to compare","url" => '<i class="fa fa-tablet" aria-hidden="true"></i>');
    }
    if ($_GET['product3']) {
      $product3 = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM products WHERE id='".$_GET['product3']."'"));
    } else {
      $adddevice2 = array("title" => "Add a device to compare","url" => '<i class="fa fa-tablet" aria-hidden="true"></i>');
    }
    
?>

<!DOCTYPE html>
<html>

<head>
    <?php echo $headerp; ?>
    <style>
      .compare {
        float: left;
        position: relative;
        height: 0px;
      }
      #inst {
        position: relative;
        top: 38px;
      }
    </style>
    <script>
      function showProduct1(str) {
          if (str == "") {
              document.getElementById("product1").innerHTML = "";
              return;
          } else {
              if (window.XMLHttpRequest) {
                  // code for IE7+, Firefox, Chrome, Opera, Safari
                  xmlhttp = new XMLHttpRequest();
              } else {
                  // code for IE6, IE5
                  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
              }
              xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("product1").innerHTML = this.responseText;
                  }
              };
              xmlhttp.open("GET","search.php?product1="+str,true);
              xmlhttp.send();
          }
      }
      function showProduct2(str) {
          if (str == "") {
              document.getElementById("product2").innerHTML = "";
              return;
          } else {
              if (window.XMLHttpRequest) {
                  // code for IE7+, Firefox, Chrome, Opera, Safari
                  xmlhttp = new XMLHttpRequest();
              } else {
                  // code for IE6, IE5
                  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
              }
              xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("product2").innerHTML = this.responseText;
                  }
              };
              var pathArray = window.location.href.replace('http://exclr.tk/compare.php','').replace('?product1=','');
              var pathArray1 = window.location.href.replace('http://exclr.tk/compare.php','').replace('?product1=','').replace(/^\d/g,'').replace(/^\d/g,'').replace(/^\d/g,'').replace(/^\d/g,'').replace('&product2=','');
              xmlhttp.open("GET","search.php?url1="+pathArray+"&url2="+pathArray1+"&product2="+str,true);
              xmlhttp.send();
          }
      }
      function showProduct3(str) {
          if (str == "") {
              document.getElementById("product3").innerHTML = "";
              return;
          } else {
              if (window.XMLHttpRequest) {
                  // code for IE7+, Firefox, Chrome, Opera, Safari
                  xmlhttp = new XMLHttpRequest();
              } else {
                  // code for IE6, IE5
                  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
              }
              xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("product3").innerHTML = this.responseText;
                  }
              };
              var pathArray = window.location.href.replace('http://exclr.tk/compare.php','').replace('?product1=','');
              var pathArray1 = window.location.href.replace('http://exclr.tk/compare.php','').replace('?product1=','').replace(/^\d/g,'').replace(/^\d/g,'').replace(/^\d/g,'').replace(/^\d/g,'').replace('&product2=','');
              var pathArray2 = window.location.href.replace('http://exclr.tk/compare.php','').replace('?product1=','').replace(/^\d/g,'').replace(/^\d/g,'').replace(/^\d/g,'').replace(/^\d/g,'').replace('&product2=','').replace(/^\d/g,'').replace(/^\d/g,'').replace(/^\d/g,'').replace('&product3=','');
              xmlhttp.open("GET","search.php?url1="+pathArray+"&url2="+pathArray1+"&url3="+pathArray2+"&product3="+str,true);
              xmlhttp.send();
          }
      }
    </script>
</head>

<body>
<?php echo $nav; ?>
<?php echo $form; ?>
    <div id="login-signup">
        <a class="" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Log in</a>
    </div>
    
    <div id="main_compare_page">

        <div id="side-bar">
        <a href="#" id="side-bar-finder"><i class="fa fa-search" aria-hidden="true"></i> PHONE FINDER</a>
        <ul id="side-bar-brand-list">
            <li><a href="devices.php">Apple</a></li>
            <li><a href="devices.php">Samsung</a></li>
            <li><a href="devices.php">Microsoft</a></li>
            <li><a href="devices.php">Nokia</a></li>
            <li><a href="devices.php">Sony</a></li>
            <li><a href="devices.php">LG</a></li>
            <li><a href="devices.php">HTC</a></li>
            <li><a href="devices.php">Motorola</a></li>
            <li><a href="devices.php">Huawei</a></li>
            <li><a href="devices.php">Lenovo</a></li>
            <li><a href="devices.php">Xiaomi</a></li>
            <li><a href="devices.php">Google</a></li>
            <li><a href="devices.php">Acer</a></li>
            <li><a href="devices.php">Asus</a></li>
            <li><a href="devices.php">Oppo</a></li>
            <li><a href="devices.php">Oneplus</a></li>
            <li><a href="devices.php">Meizu</a></li>
            <li><a href="devices.php">Blackberry</a></li>
            <li><a href="devices.php">Alcatel</a></li>
            <li><a href="devices.php">ZTE</a></li>
            <li><a href="devices.php">Toshiba</a></li>
            <li><a href="devices.php">Vodaphone</a></li>
            <li><a href="devices.php">Gigabyte</a></li>
            <li><a href="devices.php">Xolo</a></li>
            <li><a href="devices.php">Lava</a></li>
            <li><a href="devices.php">Micromax</a></li>
            <li><a href="devices.php">Blu</a></li>
            <li><a href="devices.php">Gionee</a></li>
            <li><a href="devices.php">Vivo</a></li>
            <li><a href="devices.php">Yu</a></li>
        </ul>
        <a href="devices.php" id="side-bar-all-brand"><i class="fa fa-mobile" aria-hidden="true"></i> ALL BRANDS</a>
    </div>

        <nav id="comp_candidate">
            <nav class="comp_device_item">
                <nav class="comp_fill">
                    <span>COMPARE WITH</span>
                    <div class="compare">
                      <input type="text" name="search" onkeyup="showProduct1(this.value)" size="29">
                      <div id="product1"></div>
                    </div>
                    <p id="inst"><i class="fa fa-info-circle" aria-hidden="true"></i> Please enter model name or part of it</p>
                </nav>
                <nav class="comp_detail">
                    <a href="products.php?id=<?php echo $product1['id']?>"><?php echo $product1['title'] ?></a>
                    <img src="<?php echo $product1['url']?>">
                </nav>
            </nav>
            <nav class="comp_device_item" id="sec_device">
                <nav class="comp_fill">
                    <span>COMPARE WITH</span>
                    <div class="compare">
                      <input type="text" name="search" onkeyup="showProduct2(this.value)" size="29">
                      <div id="product2"></div>
                    </div>
                    <p id=inst><i class="fa fa-info-circle" aria-hidden="true"></i> Please enter model name or part of it</p>
                </nav>
                <nav class="comp_detail" id="add_device_to_comp">
                    <a href="products.php?id=<?php echo $product2['id']?>"><?php echo $product2['title'];echo $adddevice1['title']; ?></a>
                    <img src="<?php echo $product2['url']?>">
                    <?php echo $adddevice1['url'];?>
                </nav>
            </nav>
            <nav class="comp_device_item">
                <nav class="comp_fill">
                    <span>COMPARE WITH</span>
                    <div class="compare">
                      <input type="text" name="search" onkeyup="showProduct3(this.value)" size="29">
                      <div id="product3"></div>
                    </div>
                    <p id="inst"><i class="fa fa-info-circle" aria-hidden="true"></i> Please enter model name or part of it</p>
                </nav>
                <nav class="comp_detail" id="add_device_to_comp">
                    <a href="#"><?php echo $product3['title'];echo $adddevice2['title']; ?></a>
                    <img src="<?php echo $product3['url']?>">
                    <?php echo $adddevice2['url'];?>
                </nav>
            </nav>
        </nav>
        <nav id="comp_table">
            <table cellspacing="0">
                <!--                NETWORK-->
                <tr>
                    <td id="table_header" rowspan="8" class="first-row">NETWORK</td>
                    <td id="comp_title">Technology</td>
                    <td class="col_detail"><?php echo $product1['technology'] ?></td>
                    <td class="col_detail"><?php echo $product2['technology'] ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['technology'] ?></td>
                </tr>
                <tr>
                    <td id="comp_title">2G bands</td>
                    <td class="col_detail"><?php echo $product1['2gbands']; ?></td>
                    <td class="col_detail"><?php echo $product2['2gbands']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['2gbands']; ?></td>
                </tr>
                <tr>

                </tr>
                <tr>
                    <td id="comp_title">3G Network</td>
                    <td class="col_detail"><?php echo $product1['3gbands']; ?></td>
                    <td class="col_detail"><?php echo $product2['3gbands']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['3gbands']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">4G Network</td>
                    <td class="col_detail"><?php echo $product1['4gbands']; ?></td>
                    <td class="col_detail"><?php echo $product2['4gbands']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['4gbands']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">Speed</td>
                    <td class="col_detail"><?php echo $product1['speed']; ?></td>
                    <td class="col_detail"><?php echo $product2['speed']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['speed']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">GPRS</td>
                    <td class="col_detail"><?php echo $product1['gprs']; ?></td>
                    <td class="col_detail"><?php echo $product2['gprs']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['gprs']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">EDGE</td>
                    <td class="col_detail"><?php echo $product1['edge']; ?></td>
                    <td class="col_detail"><?php echo $product2['edge']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['edge']; ?></td>
                </tr>
                <!--                LAUNCH-->
                <tr>
                    <td id="table_header" rowspan="2" class="first-row">LAUNCH</td>
                    <td id="comp_title">Announced</td>
                    <td class="col_detail"><?php echo $product1['announced']; ?></td>
                    <td class="col_detail"><?php echo $product2['announced']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['announced']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">Status</td>
                    <td class="col_detail"><?php echo $product1['status']; ?></td>
                    <td class="col_detail"><?php echo $product2['status']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['status']; ?></td>
                </tr>
                <!--                BODY-->
                <tr>
                    <td id="table_header" rowspan="3" class="first-row">BODY</td>
                    <td id="comp_title">Dimensions</td>
                    <td class="col_detail"><?php echo $product1['dimensions']; ?></td>
                    <td class="col_detail"><?php echo $product2['dimensions']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['dimensions']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">Weight</td>
                    <td class="col_detail"><?php echo $product1['weight']; ?></td>
                    <td class="col_detail"><?php echo $product2['weight']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['weight']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">SIM</td>
                    <td class="col_detail"><?php echo $product1['sim']; ?></td>
                    <td class="col_detail"><?php echo $product2['sim']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['sim']; ?></td>
                </tr>
                <!--                DISPLAY-->
                <tr>
                    <td id="table_header" rowspan="4" class="first-row">DISPLAY</td>
                    <td id="comp_title">Type</td>
                    <td class="col_detail"><?php echo $product1['type']; ?></td>
                    <td class="col_detail"><?php echo $product2['type']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['type']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">Size</td>
                    <td class="col_detail"><?php echo $product1['size']; ?></td>
                    <td class="col_detail"><?php echo $product2['size']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['size']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">Resolution</td>
                        <td class="col_detail"><?php echo $product1['resolution']; ?></td>
                        <td class="col_detail"><?php echo $product2['resolution']; ?></td>
                        <td class="col_detail" id="last_col"><?php echo $product3['resolution']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">Multitouch</td>
                    <td class="col_detail"><?php echo $product1['multitouch']; ?></td>
                    <td class="col_detail"><?php echo $product2['multitouch']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['multitouch']; ?></td>
                </tr>
                <!--                PLATFORM-->
                <tr>
                    <td id="table_header" rowspan="4" class="first-row">PLATFORM</td>
                    <td id="comp_title">OS</td>
                    <td class="col_detail"><?php echo $product1['os']; ?></td>
                    <td class="col_detail"><?php echo $product2['os']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['os']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">Chipset</td>
                    <td class="col_detail"><?php echo $product1['chipset']; ?></td>
                    <td class="col_detail"><?php echo $product2['chipset']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['chipset']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">CPU</td>
                    <td class="col_detail"><?php echo $product1['cpu']; ?></td>
                    <td class="col_detail"><?php echo $product2['cpu']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['cpu']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">GPU</td>
                    <td class="col_detail"><?php echo $product1['gpu']; ?></td>
                    <td class="col_detail"><?php echo $product2['gpu']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['gpu']; ?></td>
                </tr>
                <!--                MEMORY-->
                <tr>
                    <td id="table_header" rowspan="2" class="first-row">MEMORY</td>
                    <td id="comp_title">Card slot</td>
                    <td class="col_detail"><?php echo $product1['cardslot']; ?></td>
                    <td class="col_detail"><?php echo $product2['cardslot']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['cardslot']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">Internal</td>
                    <td class="col_detail"><?php echo $product1['internal']; ?></td>
                    <td class="col_detail"><?php echo $product2['internal']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['internal']; ?></td>
                </tr>
                <!--                CAMERA-->
                <tr>
                    <td id="table_header" rowspan="4" class="first-row">CAMERA</td>
                    <td id="comp_title">Primary</td>
                    <td class="col_detail"><?php echo $product1['pr']; ?></td>
                    <td class="col_detail"><?php echo $product2['pr']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['pr']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">Features</td>
                    <td class="col_detail"><?php echo $product1['features']; ?></td>
                    <td class="col_detail"><?php echo $product2['features']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['features']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">Video</td>
                    <td class="col_detail"><?php echo $product1['video']; ?></td>
                    <td class="col_detail"><?php echo $product2['video']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['video']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">Secondary</td>
                    <td class="col_detail"><?php echo $product1['secondary']; ?></td>
                    <td class="col_detail"><?php echo $product2['secondary']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['secondary']; ?></td>
                </tr>
                <!--                SOUND-->
                <tr>
                    <td id="table_header" rowspan="4" class="first-row">SOUND</td>
                    <td id="comp_title">Alert types</td>
                    <td class="col_detail"><?php echo $product1['alerttypes']; ?></td>
                    <td class="col_detail"><?php echo $product2['alerttypes']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['alerttypes']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">Loudspeaker</td>
                    <td class="col_detail"><?php echo $product1['loudspeaker']; ?></td>
                    <td class="col_detail"><?php echo $product2['loudspeaker']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['loudspeaker']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">3.5mm jack</td>
                    <td class="col_detail"><?php echo $product1['jack']; ?></td>
                    <td class="col_detail"><?php echo $product2['jack']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['jack']; ?></td>
                </tr>
                <tr>
                </tr>
                <!--                COMMS-->
                <tr>
                    <td id="table_header" rowspan="5" class="first-row">COMMS</td>
                    <td id="comp_title">WLAN</td>
                    <td class="col_detail"><?php echo $product1['wlan']; ?></td>
                    <td class="col_detail"><?php echo $product2['wlan']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['wlan']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">Bluetooth</td>
                    <td class="col_detail"><?php echo $product1['bluetooth']; ?></td>
                    <td class="col_detail"><?php echo $product2['bluetooth']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['bluetooth']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">GPS</td>
                    <td class="col_detail"><?php echo $product1['gps']; ?></td>
                    <td class="col_detail"><?php echo $product2['gps']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['gps']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">Radio</td>
                    <td class="col_detail"><?php echo $product1['radio']; ?></td>
                    <td class="col_detail"><?php echo $product2['radio']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['radio']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">USB</td>
                    <td class="col_detail"><?php echo $product1['usb']; ?></td>
                    <td class="col_detail"><?php echo $product2['usb']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['usb']; ?></td>
                </tr>
                <!--                FEATURES-->
                <tr>
                    <td id="table_header" rowspan="5" class="first-row">FEATURES</td>
                    <td id="comp_title">Sensors</td>
                    <td class="col_detail"><?php echo $product1['sensors']; ?></td>
                    <td class="col_detail"><?php echo $product2['sensors']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['sensors']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">Messaging</td>
                    <td class="col_detail"><?php echo $product1['messaging']; ?></td>
                    <td class="col_detail"><?php echo $product2['messaging']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['messaging']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">Browser</td>
                    <td class="col_detail"><?php echo $product1['browser']; ?></td>
                    <td class="col_detail"><?php echo $product2['browser']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['browser']; ?></td>
                </tr>
                <tr>
                    <td id="comp_title">Java</td>
                    <td class="col_detail"><?php echo $product1['java']; ?></td>
                    <td class="col_detail"><?php echo $product2['java']; ?></td>
                    <td class="col_detail" id="last_col"s><?php echo $product3['java']; ?></td>
                </tr>
                <tr>
                </tr>
<!--                BATTERY-->
                <tr>
                    <td id="table_header" rowspan="1" class="first-row">BATTERY</td>
                    <td id="comp_title">Type Battery</td>
                    <td class="col_detail"><?php echo $product1['typebattery']; ?></td>
                    <td class="col_detail"><?php echo $product2['typebattery']; ?></td>
                    <td class="col_detail" id="last_col"><?php echo $product3['typebattery']; ?></td>
                </tr>
            </table>
        </nav>
    </div>
    <?php echo $footerp; ?>
</body>
</html>