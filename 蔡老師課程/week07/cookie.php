<?php
	//設定一個cookie，變數名稱為 myName，存放時間由當下開始算1天，內有效。60秒 x 60 = 1小時，再 x 24就等於 1天
	//並用戶端的電腦上存一個cookie檔案。
	setcookie("myName", "洋叔叔", time() + 60 * 60 * 24);
	
	//剛剛設定後馬上使用 $_COOKIE 會無法取用，會顯示錯誤。因為電腦才剛建立cookie檔，這邊還無法存取。
	echo '$_COOKIE["myName"] ' . $_COOKIE["myName"];
?>