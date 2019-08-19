<!DOCTYPE html>
<html lang="zh-TW">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>課堂作業</title>
	<style>
		.question {
			padding: 20px;
			margin: 10px;
			border: solid 1px #aaa;
			border-radius: 6px;
		}

		.answer {
			color: red;
		}

		.answer a:hover {
			color: red;
		}
	</style>
</head>

<body>
	<div class="question">
		<p>請使用php輸出 10, 20, 30, 40, 50, 60, 80, 100</p>
		<p>要輸出的結果如紅色字體，要一模一樣唷，100後面沒有,唷</p>
		<p>提示：可用for或者while迴圈，並搭配if/else判別輸出</p>
		<p>答案：</p>
		<div class="answer">
			<?php
			//請在這裡寫上你的程式
			//for迴圈，帶入預設i = 10, 當i小於101的時候，做迴圈內容，完成後 i + 10
			$ar = array();
			for ($i = 10; $i <= 100; $i+=10) { 
			
				if($i !== 70 && $i !==90){
					array_push($ar,$i);
				}
			}
			echo join(" , ", $ar );








			// for ($i = 10; $i < 101; $i += 10) { 
			// 	if($i != 70 && $i != 90)		//如果 i 不等於 90的情況
			// 	{
			// 		echo $i;		//輸出 i
			// 		if($i < 100)	//如果 i 小於 100
			// 		{
			// 			echo ", ";	//才輸出逗點
			// 		}
			// 	}
			// }

			/*
        
				//使用 while
				echo "<hr>";
				//定義開始為 10
				$a = 10;
				while ($a <= 100) {		//當 a 小於或等於 100的時候 做以下事情
					if($a != 70 && $a != 90)		//如果 i 不等於 90的情況
					{
						echo $a;		//輸出 i
						if($a < 100)	//如果 i 小於 100
						{
							echo ", ";	//才輸出逗點
						}
					}
					$a += 10;			//最後把 a + 10
				}
        
        echo "<hr>";
        //定義開始為 10
        $a = 10;
        while (true) {   //當 a 小於或等於 100的時候 做以下事情
          if($a != 70 && $a != 90)    //如果 i 不等於 90的情況
          {
            echo $a;    //輸出 i
            if($a < 100)  //如果 i 小於 100
            {
              echo ", ";  //才輸出逗點
            }
          }
          
          $a += 10;     //最後把 a + 10
          
          //當a超過100就 break 跳出迴圈
          if($a > 100)
          {
            break;
          }
        }
        
        */
			?>
		</div>
	</div>

	<div class="question">
		<p>有一個新聞標題的陣列，請將該陣列輸出成可以點擊的新聞連結，連結暫時用#代替，輸出的結果，可用 li 或者 ol 列表標籤來呈現。</p>
		<p>$news_title = array("契約書耍詐 惡房東涉坑房客", "國道4車撞 全指飛鳥肇逃", "賓士失控撞破門 家具金童棄醉友落跑", "機車逆向撞單車 高中生撞死高中生", "外交部網頁涉侵權 攝影家擬告");</p>
		<p>提示：用foreach迴圈，輸出 &lt;a href='#'&gt;新聞標題 &lt;/a&gt;</p>
		<p>答案：</p>
		<div class="answer">
			<?php
			/**
			 * 有一個新聞標題的陣列，請將該陣列輸出成可以點擊的新聞連結，連結暫時用#代替，輸出的結果，可用 li 或者 ol 列表標籤來呈現。
			 * 提示：用foreach迴圈，輸出 <a href='#'>新聞標題 </a>
			 * 答案：
			 */
			//請在這裡寫上你的程式
			$news_title = array(
				"契約書耍詐 惡房東涉坑房客",
				"國道4車撞 全指飛鳥肇逃",
				"賓士失控撞破門 家具金童棄醉友落跑",
				"機車逆向撞單車 高中生撞死高中生",
				"外交部網頁涉侵權 攝影家擬告"
			);
			echo "<ul>";
			foreach ($news_title as $key => $value) {
				echo "<li><a href='#'>{$key}:{$value}</a></li>";
			}
			echo "</ul>";
			?>
		</div>
	</div>
</body>

</html>