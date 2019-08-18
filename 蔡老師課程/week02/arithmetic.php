<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>算術</title>
	</head>

	<body>
		<a href='./'>回首頁</a>
		<hr>
		<?php
			echo 10 + 10; 	//輸出 10 + 10 的結果
			echo "<br>";	//輸出 html 的<br>換行
			
			echo 10 - 10;	//輸出 10 - 10 的結果
			echo "<br>";	//輸出 html 的<br>換行
			
			echo 10 * 10;	//輸出 10 x 10 的結果
			echo "<br>";	//輸出 html 的<br>換行
			
			echo 10 / 10;	//輸出 10 ÷ 10 的結果
			echo "<br>";	//輸出 html 的<br>換行
			
			echo (2 + 3) * 4; //輸出 括號2+3 之後再 x 4的結果
			echo "<br>";	//輸出 html 的<br>換行
			
			//課堂小練習 用 php 撰寫計算 6÷2(1+2) = ?
			$z = 6/2*(1+2);
			echo '6÷2(1+2) = ' . $z; //答案是 9
		?>
	</body>
</html>
