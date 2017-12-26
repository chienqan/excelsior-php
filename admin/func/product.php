<?php 
function getlist($connect) {
  $list = "SELECT * FROM products";
  return mysqli_query($connect, $list);
}

function get($connect) {
  $get = "SELECT * FROM products WHERE title='".$_GET['title']."'";
  return mysqli_fetch_array(mysqli_query($connect, $get));
}

function add($connect) {
  if (isset($_GET['act']) == 'add') {
      if ($_GET['act'] == 'add') {
          $add = "INSERT INTO products (
          category,
          url,
          title,
          technology, 
          2gbands, 
          3gbands, 
          4gbands, 
          speed, 
          gprs, 
          edge, 
          announced, 
          status, 
          dimensions, 
          weight, 
          sim, 
          type, 
          size, 
          resolution, 
          multitouch, 
          os, 
          chipset, 
          cpu, 
          gpu,
          cardslot,
          internal,
          pr,
          features,
          video,
          secondary,
          alerttypes,
          loudspeaker,
          jack,
          wlan,
          bluetooth,
          gps,
          radio,
          usb,
          sensors,
          messaging,
          browser,
          java,
          typebattery,
          colors,
          device
          ) VALUES (
          '".$_POST['category']."',
          '".$_POST['url']."',
          '".$_POST['title']."',
          '".$_POST['technology']."',
          '".$_POST['2gbands']."',
          '".$_POST['3gbands']."',
          '".$_POST['4gbands']."',
          '".$_POST['speed']."',
          '".$_POST['gprs']."',
          '".$_POST['edge']."',
          '".$_POST['announced']."',
          '".$_POST['status']."',
          '".$_POST['dimensions']."',
          '".$_POST['weight']."',
          '".$_POST['sim']."',
          '".$_POST['type']."',
          '".$_POST['size']."',
          '".$_POST['resolution']."',
          '".$_POST['multitouch']."',
          '".$_POST['os']."',
          '".$_POST['chipset']."',
          '".$_POST['cpu']."',
          '".$_POST['gpu']."',
          '".$_POST['cardslot']."',
          '".$_POST['internal']."',
          '".$_POST['pr']."',
          '".$_POST['features']."',
          '".$_POST['video']."',
          '".$_POST['secondary']."',
          '".$_POST['alerttypes']."',
          '".$_POST['loudspeaker']."',
          '".$_POST['jack']."',
          '".$_POST['wlan']."',
          '".$_POST['bluetooth']."',
          '".$_POST['gps']."',
          '".$_POST['radio']."',
          '".$_POST['usb']."',
          '".$_POST['sensors']."',
          '".$_POST['messaging']."',
          '".$_POST['browser']."',
          '".$_POST['java']."',
          '".$_POST['typebattery']."',
          '".$_POST['colors']."',
          '".$_POST['device']."')";
          if (mysqli_query($connect, $add)) {
            return "Add product successfully";
          } else {
            return "Add product fail".mysqli_error($connect);
          }
      }
  }
}

function edit($connect) {
    if (isset($_GET['act']) == 'edit') {
        if ($_GET['act'] == 'edit') {
            $add = "UPDATE products SET
            category = '".$_POST['category']."',
            url = '".$_POST['url']."',
            title = '".$_POST['title']."',
            technology = '".$_POST['technology']."', 
            2gbands = '".$_POST['2gbands']."', 
            3gbands = '".$_POST['3gbands']."', 
            4gbands = '".$_POST['4gbands']."', 
            speed = '".$_POST['speed']."', 
            gprs = '".$_POST['gprs']."', 
            edge = '".$_POST['edge']."', 
            announced = '".$_POST['announced']."', 
            status = '".$_POST['status']."', 
            dimensions = '".$_POST['dimensions']."', 
            weight = '".$_POST['weight']."', 
            sim = '".$_POST['sim']."', 
            type = '".$_POST['type']."', 
            size = '".$_POST['size']."', 
            resolution = '".$_POST['resolution']."', 
            multitouch = '".$_POST['multitouch']."', 
            os = '".$_POST['os']."', 
            chipset = '".$_POST['chipset']."', 
            cpu = '".$_POST['cpu']."', 
            gpu = '".$_POST['gpu']."',
            cardslot = '".$_POST['cardslot']."',
            internal = '".$_POST['internal']."',
            pr = '".$_POST['pr']."',
            features = '".$_POST['features']."',
            video = '".$_POST['video']."',
            secondary = '".$_POST['secondary']."',
            alerttypes = '".$_POST['alerttypes']."',
            loudspeaker = '".$_POST['loudspeaker']."',
            jack = '".$_POST['jack']."',
            wlan = '".$_POST['wlan']."',
            bluetooth = '".$_POST['bluetooth']."',
            gps = '".$_POST['gps']."',
            radio = '".$_POST['radio']."',
            usb = '".$_POST['usb']."',
            sensors = '".$_POST['sensors']."',
            messaging = '".$_POST['messaging']."',
            browser = '".$_POST['browser']."',
            java = '".$_POST['java']."',
            typebattery = '".$_POST['typebattery']."',
            colors = '".$_POST['colors']."',
            device = '".$_POST['device']."'
            WHERE title='".$_GET['title']."'";
            if (mysqli_query($connect, $add)) {
              header("location:edit-product.php?title=".$_POST['title']."&status=updated");
            } else {
              return "There is nothing change";
            }
        }
    }
  }

function update() {
  if (isset($_GET['status']) == 'updated') {
    if ($_GET['status'] == 'updated') {
       return 'Updated Successfully';
    } else {
        return 'Updated Fail';
    }
  } 
}
  
function remove($connect) {
  if(isset($_GET['act']) == 'remove') {
    if ($_GET['act'] == 'remove') {
      $remove = "DELETE FROM products WHERE title='".$_GET['title']."'";
      mysqli_query($connect, $remove);
      $refresh = "ALTER TABLE products AUTO_INCREMENT = 1";
      mysqli_query($connect, $refresh);
      header("location:product.php");
    }
  }
}

?>