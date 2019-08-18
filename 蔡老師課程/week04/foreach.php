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
	
	
	foreach ($article as $a_key => $a_value) {
		echo "索引鍵值 {$a_key} 內容{$a_value} <br>";
	}
	
	echo "<hr>";
	
	foreach ($article as $value) {			//在沒有定義鍵值變數時，只會有內容
		
		echo "索引鍵值 {$key} 內容{$value} <br>";	//由於沒影定義鍵值，所以 $key 這變數在迴圈中，是一個無效的變數，就會出錯。所以必須拿掉
	}

	
	echo "<hr><hr>";
	
	// other_article 陣列中，放了三個陣列，個別有 url, img, title索引鍵值
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
		)
	);
	
	foreach ($other_article as $a_article) {
		//由於沒有定義鍵值，所只會有內容
		//我們用 var_dump 來看看這內容的形態與資料
		var_dump($a_article);
		
		//由於 $a_article 是一個陣列，而我們也知道裡面有 url, img, title三個索引鍵值，所以可以直接取用
		echo "<p>網址 {$a_article['url']}</p>";
		echo "<p>圖片網址 {$a_article['img']}</p>";
		echo "<p>標題 {$a_article['title']}</p>";
		
		echo "<hr>";
		
	}
?>
