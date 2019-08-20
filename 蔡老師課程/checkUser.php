<?php
//啟動 session
session_start();
//假設的有效會員帳號
$db_user = "0000";
$db_password = '0000';


//使用 isset 判別有沒有此變數可以使用
if (isset($_POST['username']) && isset($_POST['password'])) {
	//直接對傳過來的帳號密碼做比對

	if ($_POST['username'] == $db_user && $_POST['password'] == $db_password) {
		//如果密碼一樣，以及帳號一樣，那就代表正確，所以顯示登入成功
		//將 session 加入一個已經登入的紀錄
		$_SESSION['is_login'] = true;
		if ($_SESSION['is_login'] = true)
		//使用php header 來轉址 前往後台
		{
			header('Location:backend.php');
		}
	} else {
		//要不然就是登入失敗
		//將 session 加入一個失敗的紀錄
		$_SESSION['is_login'] = false;
		//使用php header 來轉址回 login.php 必加入在網址加入 msg 的 GET 用變數 返回登入頁
		header('Location:login.php?msh=wrong');
		
	}
} else {
	//安全一點，若沒有用 POST 傳 username 跟 password
	//就使用php header 來轉址 返回登入頁，並在警告一下
	header('Location:login.php?msh=請輸入');
}
