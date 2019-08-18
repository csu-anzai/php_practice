<!-- 若在 windows 看有亂碼，記得加上 <meta charset='utf-8'> 將編碼設定為utf-8，以正確顯示繁體中文 -->
<?php
	//一個 party_need 陣列變數，裡面放了七個字串
	$party_need = array("可口可樂", "雪碧", "洋芋片", "衛生杯", "啤酒", "PS4", "XBOX");
	//使用 print_r(); 方法，將陣列輸出
	print_r($party_need);
	echo "<hr>";
	
	
	$song_list = array(
		2 => "可惜沒如果", 
		3 => "多遠都要在一起", 
		8 => "我還是愛著你"
	);
	
	print_r($song_list);
	
	echo "<hr>";
	
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
	
	print_r($article);
	
	echo "<hr>";
	//一個空的陣列
	$movies = array();
	echo "第1次 ";
	print_r($movies);
	echo "<br>";
	
	//[]中沒有指定索引鍵值，所以會自動產生，
	//若尚未有數字的索引值，就會重0開始。
	//若已經有值了，就從最後的索引值+1後產生
	$movies[] = "玩命關頭7";		//索引值 0
	$movies[] = "復仇者聯盟2";		//索引值 1
	echo "第2次 ";
	print_r($movies);
	echo "<br>";
	
	//若有自動產生的情況，也是可以手動指定字串的索引值
	$movies['money'] = 500;
	echo "第3次 ";
	print_r($movies);
	echo "<br>";
	
	$movies[] = "成人世界";		//索引值 2
	echo "第4次 ";
	print_r($movies);
	echo "<br>";
	
	//當然可以手動指定數字的索引值
	$movies[10] = "金牌任務";		//索引值 10, 因為我們直接指定10
	echo "第5次 ";
	print_r($movies);
	echo "<br>";
	
	$movies[] = "大喜臨門";		//索引值 11，因為目前最大的索引值為10，所以直接從10 + 1
	echo "第6次 ";
	print_r($movies);
	echo "<br>";
	
	$movies['love'] = "變形金剛";
	echo "第7次 ";
	print_r($movies);
	echo "<br>";
	
	$movies[] = "魔戒1";			//索引值 12
	$movies[] = "魔戒2";			//索引值 12
	$movies[] = "魔戒3";			//索引值 12
	echo "第8次 ";
	print_r($movies);
	echo "<br>";
?>
