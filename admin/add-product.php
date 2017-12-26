<?php
require_once("includes/header.php");
require_once("includes/footer.php");
require_once("db/mysql.php");
require_once("func/product.php");
require_once("func/session.php");
session();
$add = add($connect);
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
                <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User</p>
                    </a>
                </li>
                <li class="active">
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
                    <a class="navbar-brand" href="#">Products</a>
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
                                <h4 class="title">Add Product</h4>
																<?php echo $add; ?>
                            </div>
                            <div class="content">
															<form action="add-product.php?act=add" method="post">
																Category:<input type="text" class="form-control" name="category" placeholder="">
																Image URL:<input type="text" class="form-control" name="url" placeholder="">
                                Title:<input type="text" class="form-control" name="title" placeholder="">
																Technology:<input type="text" class="form-control" name="technology" placeholder="">
																2G bands:<input type="text" class="form-control" name="2gbands" placeholder="">
																3G bands:<input type="text" class="form-control" name="3gbands" placeholder="">
																4G bands:<input type="text" class="form-control" name="4gbands" placeholder="">
																Speed:<input type="text" class="form-control" name="speed" placeholder="">
																GPRS:<input type="text" class="form-control" name="gprs" placeholder="">
																EDGE:<input type="text" class="form-control" name="edge" placeholder="">
																Announced:<input type="text" class="form-control" name="announced" placeholder="">
																Status:<input type="text" class="form-control" name="status" placeholder="">
																Dimensions:<input type="text" class="form-control" name="dimensions" placeholder="">
																Weight:<input type="text" class="form-control" name="weight" placeholder="">
																SIM:<input type="text" class="form-control" name="sim" placeholder="">
																Type:<input type="text" class="form-control" name="type" placeholder="">
																Size:<input type="text" class="form-control" name="size" placeholder="">
																Resolution:<input type="text" class="form-control" name="resolution" placeholder="">
																Multitouch:<input type="text" class="form-control" name="multitouch" placeholder="">
																OS:<input type="text" class="form-control" name="os" placeholder="">
																Chipset:<input type="text" class="form-control" name="chipset" placeholder="">
																CPU:<input type="text" class="form-control" name="cpu" placeholder="">
																GPU:<input type="text" class="form-control" name="gpu" placeholder="">
																Cardslot:<input type="text" class="form-control" name="cardslot" placeholder="">
																Internal:<input type="text" class="form-control" name="internal" placeholder="">
																Primary:<input type="text" class="form-control" name="pr" placeholder="">
																Features:<input type="text" class="form-control" name="features" placeholder="">
																Video:<input type="text" class="form-control" name="video" placeholder="">
																Secondary:<input type="text" class="form-control" name="secondary" placeholder="">
																Alert types:<input type="text" class="form-control" name="alerttypes" placeholder="">
																Loud speaker:<input type="text" class="form-control" name="loudspeaker" placeholder="">
																3.5mm jack:<input type="text" class="form-control" name="jack" placeholder="">
																WLAN:<input type="text" class="form-control" name="wlan" placeholder="">
																Bluetooth:<input type="text" class="form-control" name="bluetooth" placeholder="">
																GPS:<input type="text" class="form-control" name="gps" placeholder="">
																Radio:<input type="text" class="form-control" name="radio" placeholder="">
																USB<input type="text" class="form-control" name="usb" placeholder="">
																Sensors:<input type="text" class="form-control" name="sensors" placeholder="">
																Messaging:<input type="text" class="form-control" name="messaging" placeholder="">
																Browser:<input type="text" class="form-control" name="browser" placeholder="">
																Java:<input type="text" class="form-control" name="java" placeholder="">
																Type Battery:<input type="text" class="form-control" name="typebattery" placeholder="">
																Colors:<input type="text" class="form-control" name="colors" placeholder="">
																Device:<input type="text" class="form-control" name="device" placeholder="">
                              <button type="submit" class="btn btn-info btn-fill pull-right">Add Product</button>
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
