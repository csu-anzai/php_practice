<?php
	//取得標題
    $title = $_GET['title'];
	
	//取得分類
    $category = $_GET['category'];
	
	//取得內容
    $content = $_GET['content'];
	
	//取得發布狀況
    $publish = $_GET['publish'];
	
	//取得複選的關鍵字
    $keyword = $_GET['keyword'];
	
?>
<h2>以下為傳過來的資料</h2>

<p>標題：<?php echo $title;?></p>
<p>分類：<?php echo $category;?></p>
<p>內容：<?php echo $content;?></p>
<p>發布狀況：<?php echo $publish;?></p>
<p>關鍵字：<?php echo join(", ",$keyword);?></p>