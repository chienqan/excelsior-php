<?php
require_once("includes/header.php");
require_once("includes/footer.php");
require_once("db/mysql.php");
require_once("func/user.php");
require_once("func/session.php");
session();
$getinfo = getlist($connect);
remove($connect);
?>

<!doctype html>
<html lang="en">
  
<?php echo $header; ?>
  
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Excelsior
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="profile.php">
                        <i class="pe-7s-graph"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li class="active">
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User</p>
                    </a>
                </li>
                <li>
                    <a href="product.php">
                        <i class="pe-7s-note2"></i>
                        <p>Product</p>
                    </a>
                </li>
                <li>
                    <a href="article.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Article</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
  
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Users</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="logout.php">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                              <div class="row">
                                <div class="col-md-2">
                                  <h4 class="title">List User</h4>
                                </div>
                                <div class="col-md-10">
                                    <a href="add-user.php"><button class="btn btn-info btn-fill pull-right">Add User</button></a>
                                </div>
                              </div>
                                <p class="category">List / Add / Edit / Remove Users</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                      <th>ID</th>
                                    	<th>Full Name</th>
                                    	<th>Username</th>
                                    	<th>Email</th>
                                    	<th>Action</th>
                                    </thead>
                                    <tbody>
                                      <?php while($row = mysqli_fetch_array($getinfo)) { ?>
                                        <tr>
                                        	<td><?php echo $row['id']; ?></td>
                                        	<td><?php echo $row['name']; ?></td>
                                        	<td><?php echo $row['username']; ?></td>
                                        	<td><?php echo $row['email']; ?></td>
                                        	<td><a href="<?php echo 'edit-user.php?edit='.$row['username']; ?>">Edit</a> / <a href="<?php echo 'user.php?act=remove&username='.$row['username'];?>">Remove</a></td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>



    </div>
</div>


</body>

<?php echo $footer; ?>

</html>
