<?php

use PhpOffice\PhpSpreadsheet\Reader\Xls\MD5;

@session_start();
function get_publish_article()
{
  $data = array();

  $sql = "SELECT * FROM `article` WHERE `publish` = 1";

  $query = mysqli_query($_SESSION['link'], $sql);
  if ($query) {
    if (mysqli_num_rows($query) > 0) {
      while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
      }
    }
  } else {
    echo "wrong" . mysqli_error($_SESSION['link']);
  }
  return $data;
}

function get_article($id)
{
  $result = null;

  $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `id` = {$id}";

  $query = mysqli_query($_SESSION['link'], $sql);
  if ($query) {
    if (mysqli_num_rows($query) == 1) {
      $result = mysqli_fetch_assoc($query);
    }
  } else {
    echo "wrong" . mysqli_error($_SESSION['link']);
  }
  return  $result;
}
function get_publish_work()
{
  $data = array();

  $sql = "SELECT * FROM `works` WHERE `publish` = 1";

  $query = mysqli_query($_SESSION['link'], $sql);

  if ($query) {
    if (mysqli_num_rows($query) > 0) {
      while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
      }
    } else {
      echo "wrong" . mysqli_error($_SESSION['link']);
    }
  }
  return $data;
}

function get_work($id)
{
  $result = null;

  $sql = "SELECT * FROM `works` WHERE `publish` = 1 AND `id` = {$id}";

  $query = mysqli_query($_SESSION['link'], $sql);
  if ($query) {
    if (mysqli_num_rows($query) == 1) {
      $result = mysqli_fetch_assoc($query);
    }
  } else {
    echo "wrong" . mysqli_error($_SESSION['link']);
  }
  return  $result;
}


function check_has_username($username)
{
  //宣告要回傳的結果
  $result = null;

  //將查詢語法當成字串，記錄在$sql變數中
  $sql = "SELECT * FROM `user` WHERE `username` = '{$username}';";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否有一筆資料
    if (mysqli_num_rows($query) >= 1) {
      //取得的量大於0代表有資料
      //回傳的 $result 就給 true 代表有該帳號，不可以被新增
      $result = true;
    }

    //釋放資料庫查詢到的記憶體
    mysqli_free_result($query);
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}

function add_user($username, $password, $n)
{
  //宣告要回傳的結果
  $result = null;
  //先把密碼用md5加密
  $password = md5($password);
  //將查詢語法當成字串，記錄在$sql變數中
  $sql = "INSERT INTO `user` (`username`, `password`, `namek`) VALUE ('{$username}', '{$password}', '{$n}');";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
    if (mysqli_affected_rows($_SESSION['link']) == 1) {
      //取得的量大於0代表有資料
      //回傳的 $result 就給 true 代表有該帳號，不可以被新增
      $result = true;
    }
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}

function verify_user($username, $password)
{
  //宣告要回傳的結果
  $result = null;
  //先把密碼用md5加密
  $password = md5($password);
  //將查詢語法當成字串，記錄在$sql變數中
  $sql = "SELECT * FROM `user` WHERE `username` = '{$username}' AND `password` = '{$password}'";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query)
  {
    //使用 mysqli_num_rows 回傳 $query 請求的結果數量有幾筆，為一筆代表找到會員且密碼正確。
    if(mysqli_num_rows($query) == 1)
    {
      //取得使用者資料
      $user = mysqli_fetch_assoc($query);

      //在session李設定 is_login 並給 true 值，代表已經登入
      $_SESSION['is_login'] = TRUE;
      //紀錄登入者的id，之後若要隨時取得使用者資料時，可以透過 $_SESSION['login_user_id'] 取用
      $_SESSION['login_user_id'] = $user['id'];

      //回傳的 $result 就給 true 代表驗證成功
      $result = true;
    }
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}