<?php
require_once("includes/header.php");
require_once("includes/footer.php");
require_once("db/mysql.php");
require_once("func/user.php");
require_once("func/session.php");
session();
$getinfo = get($connect);
$edit = edit($connect);
$update = update();
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
                    <a class="navbar-brand" href="#">Profile</a>
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
                                <h4 class="title">Edit Profile</h4>
																<?php echo $edit;echo $update; ?>
                            </div>
                            <div class="content">
                                <form action="edit-user.php?act=change&edit=<?php echo $_GET['edit']; ?>" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $getinfo['username']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo $getinfo['email']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    
                                     <div class="row">                                    
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Full Name" value="<?php echo $getinfo['name']; ?>">
                                            </div>
                                        </div>
                                         <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Birthday</label>
                                                <input type="text" class="form-control" name="birthday" placeholder="Birthday" value="<?php echo $getinfo['birthday']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>URLS</label>
                                                <input type="text" class="form-control" name="urls" placeholder="Urls" value="<?php echo $getinfo['urls']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control" name="password" placeholder="Change Password">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
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
