<?php
//載入資料庫與處理的方法
require_once 'db.php';
require_once 'functions.php';

//執行檢查有無使用者的方法。
$add_result =  add_user($_POST['username'], $_POST['password'], $_POST['nzz']);

if ($add_result) {
   return true;
} else {
    return false ;
}
