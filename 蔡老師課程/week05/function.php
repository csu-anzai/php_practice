<style>
	p {
		color:red;
	}
</style>
<?php
	//顯示系統php資訊 方法
    //phpinfo();
	
	//使用 strlen() 方法，取得字元長度
	echo '<p>strlen() 方法</p>';
	
	$str = 'abcec';
	$length = strlen($str);
    echo $str . ' 字元長度為:' . $length . "<br>";
	//輸出 abcec 字元長度為:5
	
	$str = '中文字串';
	$length = strlen($str);
    echo $str . ' 字元長度為:' . $length . "<br>";
	//輸出 中文字串 字元長度為:12
	
	echo "<hr>";
	//使用 mb_strlen() 方法，取得字數長度
	echo '<p>mb_strlen() 方法</p>';
	
	$str = '中文字串 123';
	$length = mb_strlen($str);
	echo $str . ' 字數:' . $length . "<br>";
	//輸出 中文字串 123 字數:8 ，因為空白也算佔一個字
	
	echo "<hr>";
	//使用 substr() 取得字串中部分文字
	echo '<p>substr() 方法</p>';
	$str = "abcdefg";
	$get = substr($str, 3, 3);
	echo $str . " 字串取得從第4個取3碼：「" . $get . "」<br>";
	//輸出 abcdefg 字串取得從第4個取3碼：def
		
	
	echo "<hr>";
	//使用 mb_substr() 取得中文字串中部分文字
	echo '<p>mb_substr() 方法</p>';
	$str = "IE 瀏覽器要被微軟拋棄了";
	$get = mb_substr($str, 10, 3);
	echo $str . " 字串取得從第10個取3字：「" . $get . "」<br>";
	//輸出 IE 瀏覽器要被微軟拋棄了 字串取得從第10個取3字：拋棄了

	echo "<hr>";
	//使用 str_replace() 把字串中的文字置換
	echo '<p>str_replace() 方法</p>';
	$str = "IE 瀏覽器要被微軟拋棄了，回顧一下它被網民嫌棄的一生吧";
	$get = str_replace("IE 瀏覽器", "討厭的IE", $str);
	echo $str . "<br>" . $get . "<br>";
	//輸出 討厭的IE要被微軟拋棄了，回顧一下它被網民嫌棄的一生吧
	
	echo "<hr>";
	//使用 strtoupper() 把字串中的英文字母轉大寫
	echo '<p>strtoupper() 方法</p>';
	$str = "Google Chrome OS";
	$get = strtoupper($str);
	echo $str . " 轉為 " . $get . "<br>";
	//輸出 Google Chrome OS 轉為 GOOGLE CHROME OS
	
	echo "<hr>";
	//使用 strtolower() 把字串中的英文字母轉小寫
	echo '<p>strtolower() 方法</p>';
	$str = "Google Chrome OS";
	$get = strtolower($str);
	echo $str . " 轉為 " . $get . "<br>";
	//輸出 Google Chrome OS 轉為 google chrome os

	echo "<hr>";
	//使用 strpos() 判別某字在該字串中的那個位元位置
	echo '<p>strpos() 方法</p>';
	echo strpos("emily", "e");   //輸出 0
	echo "<br>";
	echo strpos("emily", "i");   //輸出 2
	echo "<br>";
	echo strpos("emily", "ily"); //輸出 2
	echo "<br>";
	echo strpos("emily", "zxc"); //因為是false ，所以印出空白
	echo "<br>";
	echo strpos("迫降台南F/A-18戰機　隸屬美軍陸戰隊","戰機"); //輸出 18
	
	echo "<hr>";
	//使用 strpos() 判別某字在該字串中的那個位元位置
	echo '<p>mb_strpos() 方法</p>';
	echo mb_strpos("迫降台南F/A-18戰機　隸屬美軍陸戰隊","戰機"); //輸出 10
	
	
	echo "<hr>";
	//使用 round() 四捨五入，可以設定取至小數點幾位
	echo '<p>round() 方法</p>';
	$num = 3.1413;
	echo round($num); //輸出 3
	echo "<br>";
	echo round($num, 2);//輸出 3.14
	
	
	echo "<hr>";
	//使用 rand() 亂數取得一個範圍內的數字
	echo '<p>rand() 方法</p>';
	$min = 1;
	$max = 100;
	$num = rand($min, $max);
	echo $num;
	//從 1~100 亂數取得一數字，每次執行都不一樣
	
	
	echo "<hr>";
	//使用 array_push() 將值塞入一個陣列中，並排在最後面
	echo '<p>array_push() 方法</p>';
	$star = array();
	array_push($star, "天王星");
	array_push($star, "海王星");
	array_push($star, "小星星", "假惺惺");
	print_r($star);
	// 輸出 Array ( [0] => 天王星 [1] => 海王星 [2] => 小星星 [3] => 假惺惺 )
	// 相當於 $star[] = "天王星"; 這種方法。
	
	echo "<hr>";
	//使用 count() 計算陣列內數量
	echo '<p>count() 方法</p>';
	$star = array("天王星", "海王星", "小星星", "假惺惺", "滿天星");
	echo count($star);
	//輸出 5
	
	
	echo "<hr>";
	//使用 sort() 對陣列內容進行排序，由小到大，索引值會被用數字重編
	echo '<p>sort() 方法</p>';
	$array = array(5, 6, 3, 7, 1);
	sort($array);
	print_r($array);
	//輸出 Array ( [0] => 1 [1] => 3 [2] => 5 [3] => 6 [4] => 7 )
	
	
	
	echo "<hr>";
	//使用 rsort() 對陣列內容進行排序，由大到小，索引值會被用數字重編
	echo '<p>rsort() 方法</p>';
	$array = array(5, 6, 3, 7, 1);
	rsort($array);
	print_r($array);
	//輸出 Array ( [0] => 7 [1] => 6 [2] => 5 [3] => 3 [4] => 1 )

	
	echo "<hr>";
	//使用 join() 輸出陣列為字串，以自訂符號分開
	echo '<p>join() 方法</p>';
	$strs = array(
		"我是中文",
		123,
		true,
		false,
		"999",
		"純金"
	);
	$new_str = join(", ", $strs);
	echo $new_str;
	//輸出 我是中文, 123, 1, , 999, 純金
		
?>  