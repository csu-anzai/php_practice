<?php
session_start();

$host =  'localhost';

$dbuser = 'jason';

$dbpw = 'z27089433';

$dbname = 'my_db';
//宣告一個 link 變數，並執行連結資料庫函式 mysqli_connect()，連結結果會帶入 link 當中
$_SESSION['link'] = mysqli_connect($host, $dbuser, $dbpw, $dbname);

if (isset($_SESSION['link'])) {
    mysqli_query($_SESSION['link'], "SET NAMES utf8");
    // echo "OK";
} else {
    echo '無法連線'.mysqli_connect_error();
}
?>