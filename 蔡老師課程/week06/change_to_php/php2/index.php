<?php
$p = 'index';
if(isset($_GET['p']))
{
	$p = $_GET['p'];
}
?>

<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>首頁</title>
		<meta name="description" content="">
		<meta name="author" content="蔡孟珂">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="favicon.ico">
		<!-- html5 reset -->
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
		<!-- 如果為ie瀏覽器，且版本小於9，也就是ie6, ie7, ie8 的時候，載入 js/html5shiv.min.js-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class='menu'>
			<nav>
				<ul>
					<li><a href='?p=index'>首頁</a></li>
					<li><a href='?p=video'>Gameplay</a></li>
					<li><a href='?p=contact'>聯絡我們</a></li>
				</ul>
			</nav>
		</div>
		<div class='main'>
			<?php
			if($p == "index") include 'page1.php';
			if($p == "video") include 'page2.php';
			if($p == "contact") include 'page3.php';
			?>

		</div>
	</body>
</html>
