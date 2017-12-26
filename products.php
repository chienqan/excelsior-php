<?php
    require_once("admin/includes/header.php");
    require_once("admin/includes/footer.php");
		require_once("admin/includes/form.php");
		require_once("admin/db/mysql.php");
		if (isset($_GET['id'])) {
			if ($_GET['id']) {
				$info = "SELECT * FROM products WHERE id='".addslashes($_GET['id'])."'";
				$getinfo = mysqli_fetch_array(mysqli_query($connect, $info));
			}
		} else {
			header("location:/");
		}
?>
<!DOCTYPE html>
<html>
  <head>
    <?php echo $headerp; ?>
		<style>
			/*========================================================*/


			/*BODY*/
			.container {
				width: 50%;
				margin: auto;
			}
			table {
				width: 100%;
			}
			table,
			th,
			td {
				border: 1px solid black;
				border-collapse: collapse;
			}

			th,
			td {
				padding: 5px;
				text-align: left;
			}

			td:hover {
				background-color: #CFFFFE;
			}

			h1 {
				text-align: center;
			}

			#main-page-right-content {
				width: 290px;
				height: 400px;
				/*    border: 1px solid #ccc;*/
				position: absolute;
				top: 70px;
				right: 150px;
			}

			.title {
				display: inline-block;
				width: 100px;
				height: 25px;
				background-color: #1e8b8a;
				color: white;
				padding: 10px 10px;
				margin-bottom: -17px;
			}

			#title-new {
				transform: translateY(5px);
				z-index: 1;
			}


			/*
			#title-hot{
					transform: translateY(9px) translateX(-35px);
					height: 20px;
					line-height: 20px;
					z-index: -1;
			}
			*/

			#title-new:after {
				z-index: 2;
				content: ' ';
				display: block;
				width: 0;
				height: 0;
				border: 25px solid;
				border-bottom-color: transparent;
				border-top-color: transparent;
				border-left-color: transparent;
				border-right-color: #eff;
				position: absolute;
				top: 0;
				right: 0;
				transform: translateX(25px) translateY(-25px) rotateZ(135deg);
			}

			#recent-news #recent-news-item ul {
				list-style: none;
				border: 1px solid #1e8b8a;
				padding-top: 5px;
			}

			#recent-news #recent-news-item li {
				width: 290px;
				height: 100px;
				margin-left: -40px;
				border-bottom: 1px dotted #ccc;
			}

			#recent-news #recent-news-item img {
				width: 75px;
				height: 75px;
				margin-top: 10px;
				margin-left: 10px;
			}

			#recent-news-item ul li span {
				color: dimgray;
				display: inline-block;
				width: 200px;
				height: 75px;
				transform: translateY(-30px);
			}
			/*========================================================*/
		</style>
  </head>
<body>
<?php echo $nav; ?>
<?php echo $form; ?>
<div id="login-signup">
    <a class="" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Log in</a>
</div>
<br>
<div class="container">
<div class="table"> 
	<table> 
			<tbody> 
				<h1>
					<u><?php echo $getinfo['title']?></u>
				</h1>
					<img src="<?php echo $getinfo['url']?>">
				<!------------------- Chien ---------------------->
				<!-- Network -->
				<tr> 
					<th rowspan="">Network</th>
					<td>Techonology</td> 
					<td><?php echo $getinfo['technology']; ?></td> 
				</tr> 
				<!-- Launch --> 
				<tr> 
					<th rowspan="2">Launch</th> 
					<td>Announced</td> 
					<td><?php echo $getinfo['announced']; ?></td> 
				</tr> 
				<tr> 
					<td>Status</td> 
					<td><?php echo $getinfo['status']; ?></td> 
				</tr> 
				<!-- Body --> 
				<tr> 
					<th rowspan="3">Body</th> 
					<td>Dimensions</td> 
					<td><?php echo $getinfo['dimensions']; ?></td> 
				</tr>
				<tr> 
					<td>Weight</td> 
					<td><?php echo $getinfo['weight']; ?></td> 
				</tr> 
				<tr> 
					<td>SIM</td> 
					<td><?php echo $getinfo['sim']; ?></td> 
				</tr> 
				<!-- Display --> 
				<tr> 
					<th rowspan="4">Display</th> 
					<td>Type</td> 
					<td><?php echo $getinfo['type']; ?></td> 
				</tr>
				<tr> 
					<td>Size</td> 
					<td><?php echo $getinfo['size']; ?></td> 
				</tr>
				<tr> 
					<td>Resolution</td>
					<td><?php echo $getinfo['resolution']; ?></td> 
				</tr> 
				<tr> 
					<td>Multitouch</td> 
					<td><?php echo $getinfo['multitouch']; ?></td> 
				</tr> 
				<!------------------- Trung ----------------------> 
				<tr> 
					<th rowspan="4">Platform</th>
					<td>OS</td> 
					<td><?php echo $getinfo['os']; ?></td> 
				</tr> 
				<tr> 
					<td>Chipset</td> 
					<td><?php echo $getinfo['chipset']; ?></td> 
				</tr>
				<tr> 
					<td>CPU</td> 
					<td><?php echo $getinfo['cpu']; ?></td> 
				</tr>
				<tr> 
					<td>GPU</td> 
					<td><?php echo $getinfo['gpu']; ?></td> 
				</tr>
				<tr> 
					<th rowspan="2">Memory</th> 
					<td>Card slot</td> 
					<td><?php echo $getinfo['cardslot']; ?></td> 
				</tr> 
				<tr> 
					<td>Internal</td> 
					<td><?php echo $getinfo['internal']; ?></td> 
				</tr> 
				<tr> 
					<th rowspan="4">Camera</th> 
					<td>Primary</td> 
					<td><?php echo $getinfo['pr']; ?></td> 
				</tr> 
				<tr> 
					<td>Features</td> 
					<td><?php echo $getinfo['features']; ?></td> 
				</tr> 
				<tr> 
					<td>Video</td> 
					<td><?php echo $getinfo['video']; ?></td> 
				</tr> 
				<tr> 
					<td>Secondary</td> 
					<td><?php echo $getinfo['secondary']; ?></td> 
				</tr> 
				<!------------------- Hien ----------------------> 
				<tr> <th rowspan="3">Sound</th> 
					<td>Aler type</td>
					<td><?php echo $getinfo['alerttypes']; ?></td> 
				</tr> 
				<tr> 
					<td> Loudspeaker </td>
					<td><?php echo $getinfo['loudspeaker']; ?></td> 
				</tr> 
				<tr> 
					<td> 3.5mm jack </td> 
					<td><?php echo $getinfo['jack']; ?></td> 
				</tr> 
				<tr> <th rowspan="5">Comms</th> 
					<td>WLAN</td> 
					<td><?php echo $getinfo['wlan']; ?></td> 
				</tr> 
				<tr> 
					<td> Bluetooth </td>
					<td><?php echo $getinfo['bluetooth']; ?></td> 
				</tr> 
				<tr> 
					<td> GPS </td> 
					<td><?php echo $getinfo['gps']; ?></td> 
				</tr>  
					<td> Radio </td> 
					<td><?php echo $getinfo['radio']; ?></td> 
				</tr>
				<tr> 
					<td> USB </td> 
					<td><?php echo $getinfo['usb']; ?></td> 
				</tr> 
				<tr> 
					<th rowspan="4">Features</th> 
					<td>Sensors</td> 
					<td><?php echo $getinfo['sensors']; ?></td> 
				</tr> 
				<tr> 
					<td>Messaging </td> 
					<td><?php echo $getinfo['messaging']; ?></td> 
				</tr> 
				<tr> 
					<td> Browser </td> 
					<td><?php echo $getinfo['browser']; ?></td> 
				</tr> 
				<tr> 
					<td>Java </td> 
					<td><?php echo $getinfo['java']; ?></td> 
				</tr> 
				<tr> 
					<th rowspan="1">Battery</th> 
					<td>Type battery</td> 
					<td><?php echo $getinfo['typebattery']; ?></td> 
				</tr>
				<tr> 
					<th rowspan="1">Colors</th> 
					<td>Type battery</td> 
					<td><?php echo $getinfo['colors']; ?></td> 
				</tr>
			</tr>
		</tbody> 
	</table> 
</div> 
<div id="disqus_thread"></div>
<script>


(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//http-excelsiorvn-ml.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
<?php echo $footerp; ?>
</body>
</html>