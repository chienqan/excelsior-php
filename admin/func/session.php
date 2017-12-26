<?php
function session() {
  session_start();
  switch ($_SESSION['permission']) {
    case 3:
      break;
    case 2:
      break;
    case 1:
      header("location:users.php");
      break;
    case 0:
      header("location:../login.php");
      break;
  }
}
function session_child() {
  session_start();
  switch ($_SESSION['permission']) {
    case 3:
      header("location:admin/profile.php");
      break;
    case 2:
      header("location:admin/profile.php");
      break;
    case 1:
      header("location:admin/users.php");
      break;
    case 0:
      header("location:login.php");
      break;
  }
}
function session_admin() {
    session_start();
    switch ($_SESSION['permission']) {
      case 3:
        header("location:profile.php");
        break;
      case 2:
        header("location:profile.php");
        break;
      case 1:
        header("location:users.php");
        break;
      case 0:
        header("location:../login.php");
        break;
  }
}
function session_users() {
    session_start();
    switch ($_SESSION['permission']) {
        case 3:
            header("location:profile.php");
            break;
        case 2:
            header("location:profile.php");
            break;
        case 1:
            break;
        case 0:
            header("location:login.php");
            break;
    }
}
?>