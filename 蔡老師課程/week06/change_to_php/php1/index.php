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
	<?php if($p == "index"):?>
	<h1 class="welcome">歡迎</h1>
	<div class='intro'>
		<p>
			我們是一群愛好戰地風雲4的玩家，如果您也想要加入我們的行列非常歡迎你與我們一起同樂，<br/>
			我們在Battlelog的伺服器名稱如下[BF4TW] Taiwan Public Server歡迎您的加入，<br/>
			另外也有伺服器運轉計畫，期待你們的贊助我們將提供進入遊戲的保留位給您，<br/>不怕找不到伺服器可玩唷。
		</p>
		<p>
			詳情可看<a href='http://bf4tw.blogspot.tw/' target="_blank">伺服器運轉計畫</a>。
		</p>
	</div>
	<?php endif;?>
	
	<?php if($p == "video"):?>
	<div class='game_video'>
		<iframe width="853" height="480" src="//www.youtube.com/embed/LRZqdSre4nQ" frameborder="0" allowfullscreen> </iframe>
	</div>
	<div class='game_video'>
		<iframe width="853" height="480" src="//www.youtube.com/embed/Jkz_sFmpEtQ" frameborder="0" allowfullscreen> </iframe>
	</div>
	<div class='game_video'>
		<iframe width="853" height="480" src="//www.youtube.com/embed/o1etHuvR2Ms" frameborder="0" allowfullscreen> </iframe>
	</div>
	<div class='game_video'>
		<iframe width="853" height="480" src="//www.youtube.com/embed/UeLSqh1nn_Q" frameborder="0" allowfullscreen> </iframe>
	</div>
	<?php endif;?>
	
	<?php if($p == "contact"):?>
	<div class='contact_form'>
		<form>
			<p>
				<label for="subject">主旨：</label><input type="text" id="subject" name="subject" title="主旨"/>
			</p>
			<p>
				<label for="contact">內文：</label><textarea id="contact" name='contact'></textarea>
			</p>
			<p>
				<button type="submit">送出</button>
			</p>
		</form>
	</div>
	<?php endif;?>
</div>
	</body>
</html>
