<?php
require_once("includes/header.php");
require_once("includes/footer.php");
require_once("db/mysql.php");
require_once("func/product.php");
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
                                <h4 class="title">Edit Product</h4>
																<?php echo $edit; echo $update; ?>
                            </div>
                            <div class="content">
																			<form action="edit-product.php?act=edit&title=<?php echo $_GET['title']; ?>" method="post">
																			Category:<input type="text" class="form-control" name="category" value="<?php echo $getinfo['category']; ?>">
																			Image URL:<input type="text" class="form-control" name="url" value="<?php echo $getinfo['url']; ?>">
																			Title:<input type="text" class="form-control" name="title" value="<?php echo $getinfo['title']; ?>">
																			Technology:<input type="text" class="form-control" name="technology" value="<?php echo $getinfo['technology']; ?>">
																			2G bands:<input type="text" class="form-control" name="2gbands" value="<?php echo $getinfo['2gbands']; ?>">
																			3G bands:<input type="text" class="form-control" name="3gbands" value="<?php echo $getinfo['3gbands']; ?>">
																			4G bands:<input type="text" class="form-control" name="4gbands" value="<?php echo $getinfo['4gbands']; ?>">
																			Speed:<input type="text" class="form-control" name="speed" value="<?php echo $getinfo['speed']; ?>">
																			GPRS:<input type="text" class="form-control" name="gprs" value="<?php echo $getinfo['gprs']; ?>">
																			EDGE:<input type="text" class="form-control" name="edge" value="<?php echo $getinfo['edge']; ?>">
																			Announced:<input type="text" class="form-control" name="announced" value="<?php echo $getinfo['announced']; ?>">
																			Status:<input type="text" class="form-control" name="status" value="<?php echo $getinfo['status']; ?>">
																			Dimensions:<input type="text" class="form-control" name="dimensions" value="<?php echo $getinfo['dimensions']; ?>">
																			Weight:<input type="text" class="form-control" name="weight" value="<?php echo $getinfo['weight']; ?>">
																			SIM:<input type="text" class="form-control" name="sim" value="<?php echo $getinfo['sim']; ?>">
																			Type:<input type="text" class="form-control" name="type" value="<?php echo $getinfo['type']; ?>">
																			Size:<input type="text" class="form-control" name="size" value="<?php echo $getinfo['size']; ?>">
																			Resolution:<input type="text" class="form-control" name="resolution" value="<?php echo $getinfo['resolution']; ?>">
																			Multitouch:<input type="text" class="form-control" name="multitouch" value="<?php echo $getinfo['multitouch']; ?>">
																			OS:<input type="text" class="form-control" name="os" value="<?php echo $getinfo['os']; ?>"><br>
																			Chipset:<input type="text" class="form-control" name="chipset" value="<?php echo $getinfo['chipset']; ?>">
																			CPU:<input type="text" class="form-control" name="cpu" value="<?php echo $getinfo['cpu']; ?>">
																			GPU:<input type="text" class="form-control" name="gpu" value="<?php echo $getinfo['gpu']; ?>">
																			Cardslot:<input type="text" class="form-control" name="cardslot" value="<?php echo $getinfo['cardslot']; ?>">
																			Internal:<input type="text" class="form-control" name="internal" value="<?php echo $getinfo['internal']; ?>">
																			Primary:<input type="text" class="form-control" name="pr" value="<?php echo $getinfo['pr']; ?>">
																			Features:<input type="text" class="form-control" name="features" value="<?php echo $getinfo['features']; ?>">
																			Video:<input type="text" class="form-control" name="video" value="<?php echo $getinfo['video']; ?>">
																			Secondary:<input type="text" class="form-control" name="secondary" value="<?php echo $getinfo['secondary']; ?>">
																			Alert types:<input type="text" class="form-control" name="alerttypes" value="<?php echo $getinfo['alerttypes']; ?>">
																			Loud speaker:<input type="text" class="form-control" name="loudspeaker" value="<?php echo $getinfo['loudspeaker']; ?>">
																			3.5mm jack:<input type="text" class="form-control" name="jack" value="<?php echo $getinfo['jack']; ?>">
																			WLAN:<input type="text" class="form-control" name="wlan" value="<?php echo $getinfo['wlan']; ?>">
																			Bluetooth:<input type="text" class="form-control" name="bluetooth" value="<?php echo $getinfo['bluetooth']; ?>">
																			GPS:<input type="text" class="form-control" name="gps" value="<?php echo $getinfo['gps']; ?>">
																			Radio:<input type="text" class="form-control" name="radio" value="<?php echo $getinfo['radio']; ?>">
																			USB<input type="text" class="form-control" name="usb" value="<?php echo $getinfo['usb']; ?>">
																			Sensors:<input type="text" class="form-control" name="sensors" value="<?php echo $getinfo['sensors']; ?>">
																			Messaging:<input type="text" class="form-control" name="messaging" value="<?php echo $getinfo['messaging']; ?>">
																			Browser:<input type="text" class="form-control" name="browser" value="<?php echo $getinfo['browser']; ?>">
																			Java:<input type="text" class="form-control" name="java" value="<?php echo $getinfo['java']; ?>">
																			Type Battery:<input type="text" class="form-control" name="typebattery" value="<?php echo $getinfo['typebattery']; ?>">
																			Colors:<input type="text" class="form-control" name="colors" value="<?php echo $getinfo['colors']; ?>">
																			Device:<input type="text" class="form-control" name="device" value="<?php echo $getinfo['device']; ?>">
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Product</button>
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
