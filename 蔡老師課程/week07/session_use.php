<?php
	//啟用 session，若要使用 session 一定要在網頁的最上方，使用 session_start(); 啟用它
    session_start();
	
	//使用session變數名稱為 myName
	echo '$_SESSION["myName"] ' . $_SESSION["myName"];
?>