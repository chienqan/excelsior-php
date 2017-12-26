<?php 

$header = '<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Excelsior Admin</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don\'t include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
		<style>
		button > a:link, button > a:hover, button > a:visited, button > a:active {
		 color: white;
		}
		</style>

</head>';

$headerp = '<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Excelsior</title>
    <meta name="description" content="An interactive getting started guide for Brackets.">
    <link rel="stylesheet" href="assets/css/main2.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <script src="assets/JQuery/jquery-3.1.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $(\'#cbo_brand\').change(function () {
                var _v = $(this).val();
                $(\'.device-list\').hide();
                $(\'#\' + _v).fadeIn(300);
            });
            var selectCtrl = document.getElementById("#cbo_brand");

        });
    </script>
		<link rel="stylesheet" type="text/css" href="assets/css/contacts/form.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/contacts/revealer.css" />
		<script>document.documentElement.className = \'js\';</script>';

$nav = '<div class="menu">
            <ul>
                <li id="logo"><a href="/"><img src="assets/img/logo5.png" width="255px" height="72px" style="position:relative;"></a></li>
                <li><a href="review.php">Review</a></li>
                <li><a href="devices.php">Device</a></li>
                <li><a href="compare.php">Compare</a></li>
                <li><a class="btn--form-open" id="specialform">Contact</a></li>
            </ul>
        </div>'
?>