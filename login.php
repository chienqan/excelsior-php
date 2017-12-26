<?php
  require_once("admin/db/mysql.php");
  session_start();
switch($_SESSION['permission']) {
      case '3':
          header("location:admin/profile.php");
          break;
      case '2':
          header("location:admin/profile.php");
          break;
      case '1':
          header("location:admin/users.php");
          break;
      case '0':
          break;
  }
  if (isset($_GET['act']) == 'do') {
      if ($_GET['act'] == 'do') {
          $username = addslashes($_POST['username']);
          $password = addslashes(md5($_POST['password']));
          if (isset($_POST['username']) && isset($_POST['password'])) {
              if (!empty($_POST['username']) && !empty($_POST['password'])) {
                  $get_info = mysqli_query($connect, "SELECT username, password, admin FROM members WHERE username='" . $username . "'");
                  $get_username = mysqli_num_rows($get_info);
                  $get_password = mysqli_fetch_array($get_info);
                  $getpermission = $get_password;
                  if ($get_username == 1 && $get_password['password'] == $password) {
                      $_SESSION['permission'] = $getpermission['admin'];
                      $_SESSION['username'] = $getpermission['username'];
                      switch ($_SESSION['permission']) {
                        case '3':
                          header("location:admin/profile.php");
                          break;
                        case '2':
                          header("location:admin/profile.php");
                          break;
                        case '1':
                          header("location:admin/users.php");
                          break;
                        case '0':
                          header("location:1index.php");
                          break;
                      }
                  } else {
                      $result = 'You have enter incorrectly username and password. Please enter again!';
                  }
              } else {
                  $result = 'You forget to enter username or password';
              }
          } else {
              $result = 'Error! Please contact to board management';
          }
      } else {
          $result = '';
      }
  } else {
    $result = '';
  }
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Login</title>
            <meta name="Description" content="This page is a login page">
            <meta name="Keywords" content="login">
            <meta name="Author" content="Chien">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
            <link rel="stylesheet" href="assets/css/style.css">
            <style>
                .alertform {
                    display:block;
                    font-size:12px;
                    color:#f00;
                    float:left;
                }
            </style>
        </head>
        <body>
            <div class="login-form">
                <h1>eXcelsior</h1>
                <form id="login" action="login.php?act=do" method="post">
                    <div class="form-group ">
                        <input type="text" class="form-control" placeholder="Username " name="username" id="UserName">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="Passwod">
                        <i class="fa fa-lock"></i>
                    </div>
                    <span class="alertform"><?php echo $result ?></span>
                </form>
                <button form="login" type="submit" class="log-btn" >Log in</button>
            </div>
            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

            <script src="assets/js/index.js"></script>

        </body>
    </html>