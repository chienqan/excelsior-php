<?php
require_once("db/mysql.php");
require_once("func/session.php");
session();

if (isset($_GET['act']) == 'new') {
    if ($_GET['act'] == 'new') {
        echo '<h1>Add New Products</h1>
                <form action="products.php?act=new&act=add" method="post">
                    Title:&nbsp<input type="text" name="title" placeholder=""><br>
                    Technology:&nbsp<input type="text" name="technology" placeholder=""><br>
                    2G bands:&nbsp<input type="text" name="2gbands" placeholder=""><br>
                    3G bands:&nbsp<input type="text" name="3gbands" placeholder=""><br>
                    4G bands:&nbsp<input type="text" name="4gbands" placeholder=""><br>
                    Speed:&nbsp<input type="text" name="speed" placeholder=""><br>
                    GPRS:&nbsp<input type="text" name="gprs" placeholder=""><br>
                    EDGE:&nbsp<input type="text" name="edge" placeholder=""><br>
                    Announced:&nbsp<input type="text" name="announced" placeholder=""><br>
                    Status:&nbsp<input type="text" name="status" placeholder=""><br>
                    Dimensions:&nbsp<input type="text" name="dimensions" placeholder=""><br>
                    Weight:&nbsp<input type="text" name="weight" placeholder=""><br>
                    SIM:&nbsp<input type="text" name="sim" placeholder=""><br>
                    Type:&nbsp<input type="text" name="type" placeholder=""><br>
                    Size:&nbsp<input type="text" name="size" placeholder=""><br>
                    Resolution:&nbsp<input type="text" name="resolution" placeholder=""><br>
                    Multitouch:&nbsp<input type="text" name="multitouch" placeholder=""><br>
                    OS:&nbsp<input type="text" name="os" placeholder=""><br>
                    Chipset:&nbsp<input type="text" name="chipset" placeholder=""><br>
                    CPU:&nbsp<input type="text" name="cpu" placeholder=""><br>
                    GPU:&nbsp<input type="text" name="gpu" placeholder=""><br>
                    Cardslot:&nbsp<input type="text" name="cardslot" placeholder=""><br>
                    Internal:&nbsp<input type="text" name="internal" placeholder=""><br>
                    Primary:&nbsp<input type="text" name="pr" placeholder=""><br>
                    Features:&nbsp<input type="text" name="features" placeholder=""><br>
                    Video:&nbsp<input type="text" name="video" placeholder=""><br>
                    Secondary:&nbsp<input type="text" name="secondary" placeholder=""><br>
                    Alert types:&nbsp<input type="text" name="alerttypes" placeholder=""><br>
                    Loud speaker:&nbsp<input type="text" name="loudspeaker" placeholder=""><br>
                    3.5mm jack:&nbsp<input type="text" name="jack" placeholder=""><br>
                    WLAN:&nbsp<input type="text" name="wlan" placeholder=""><br>
                    Bluetooth:&nbsp<input type="text" name="bluetooth" placeholder=""><br>
                    GPS:&nbsp<input type="text" name="gps" placeholder=""><br>
                    Radio:&nbsp<input type="text" name="radio" placeholder=""><br>
                    USB:&nbsp<input type="text" name="usb" placeholder=""><br>
                    Sensors:&nbsp<input type="text" name="sensors" placeholder=""><br>
                    Messaging:&nbsp<input type="text" name="messaging" placeholder=""><br>
                    Browser:&nbsp<input type="text" name="browser" placeholder=""><br>
                    Java:&nbsp<input type="text" name="java" placeholder=""><br>
                    Type Battery:&nbsp<input type="text" name="typebattery" placeholder=""><br>
                    Colors:&nbsp<input type="text" name="colors" placeholder=""><br>
                    <input type="submit" name="submit" value="Submit">
                </form>';
    }

    if (isset($_GET['act']) == 'add') {
        if ($_GET['act'] == 'add') {
            $add = "INSERT INTO products (
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
            colors
            ) VALUES (
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
            '".$_POST['colors']."')";
            mysqli_query($connect, $add);
            echo mysqli_error($connect);
        }
    }
}
if (isset($_GET['act']) == 'list') {
    if ($_GET['act'] == 'list') {
        $get = "SELECT id,title FROM products";
        $getinfo = mysqli_query($connect, $get);
        while ($row = mysqli_fetch_array($getinfo)) {
            echo '<a href="../products-page.php?id='.$row['id'].'">'.$row['title'].'</a>'.'<br>';
        }
        echo '<br>';
    }
}
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Products</title>
        </head>
        <body>
            <a href="products.php?act=new">Add Products</a><br>
            <a href="products.php?act=list">List products</a>
        </body>
    </html>
