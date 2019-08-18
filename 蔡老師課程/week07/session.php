<?php
	//啟用 session，若要使用 session 一定要在網頁的最上方，使用 session_start(); 啟用它
	session_start();
	
	//設定 session 為 myName 變數的值
	$_SESSION['myName'] = 'Hey!!!!';
	
	//馬上設定的session存在server上，所以可以直接使用唷
	echo '$_SESSION["myName"] ' . $_SESSION['myName'];
?>