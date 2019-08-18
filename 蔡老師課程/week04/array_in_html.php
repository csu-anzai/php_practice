<?php 
	$article = array(
		'title' => "別以為盜版會變正版，Windows 10 升級「有條件」", 
		'date' => "2015 年 03 月 19 日", 
		'author' => "VR-Zone",
		'url' => "http://technews.tw/2015/03/19/windows-10-microsoft-illegal/",
		'img' => "http://img.technews.tw/wp-content/uploads/2014/10/windows_10_0-624x350.jpg",
		'content' => "<p>昨天傳出「Windows 10 連盜版都能升級」一事，Microsoft（台灣）於 19 日指出盜版 Windows 作業系統可以免費直接升級至 Windows 10 並且「扶正」一事，實為誤解。</p>
					  <p>根據 Microsoft 所言，非正版 PC 確實可升級至 Windows 10，但是未經過官方授權的盜版軟件，依舊不會改變「身份」，仍舊不會享有微軟或合作夥伴提供的技術支援。</p>
					  <p>換言之，盜版升級了 Windows 10 就是「Windows 10 的盜版」，並不會因為升級就變成正版。</p>"
	);
	
	
	$other_article = array(
		array(
			'url' => "http://technews.tw/2015/03/21/ie-lifetime/",
			'img' => "http://img.technews.tw/wp-content/uploads/2014/08/iiee-150x150.jpg",
			'title' => "IE 瀏覽器要被微軟拋棄了，回顧一下它被網民嫌棄的一生吧"
		),
		array(
			'url' => "http://technews.tw/2015/03/19/windows-10-microsoft-illegal/",
			'img' => "http://img.technews.tw/wp-content/uploads/2014/10/windows_10_0-150x150.jpg",
			'title' => "別以為盜版會變正版，Windows 10 升級「有條件」"
		),
		array(
			'url' => "http://technews.tw/2015/03/16/google-12-things/",
			'img' => "http://img.technews.tw/wp-content/uploads/2015/01/google-search-9-970x0-150x150.jpg",
			'title' => "Google 做過的 12 件奇葩事"
		),
		array(
			'url' => "http://technews.tw/2015/03/16/google-12-things/",
			'img' => "http://img.technews.tw/wp-content/uploads/2015/01/google-search-9-970x0-150x150.jpg",
			'title' => "Google 做過的 12 件奇葩事"
		)
	);
?>

<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>foreach 實際搭配 html</title>
		<style>
			.article, .other_list{
				padding:20px;
				margin:10px;
				border:solid 1px #aaa;
				border-radius: 6px;
			}
			
			.other_list img{
				width:80px;
			}
		</style>
	</head>
	<body>
		<div class="article">
			<h2><?php echo $article['title'];?></h2>
			<p>發布日期：<?php echo $article['date'];?>|作者：<?php echo $article['author'];?></p>
			<p>網址：<a href='<?php echo $article['url'];?>' target="_blank"><?php echo $article['url'];?></a></p>
			<div class='content'>
				<img src='<?php echo $article['img'];?>'>
				<?php echo $article['content'];?>
			</div>
		</div>
		
		<div class="other_list">
			<ul>
				<?php foreach($other_article as $list):?>
				<li>
					<img src='<?php echo $list['img'];?>'>
					<a href='<?php echo $list['url'];?>'><?php echo $list['title'];?></a>
				</li>
				<?php endforeach;?>
			</ul>
		</div>
	</body>
</html>
