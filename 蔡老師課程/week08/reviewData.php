<?php
//取得傳過來的檔案
$photo = '';
if(isset($_FILES['photo']))
{
  //print_r($_FILES);
  /**
   * //檔案的陣列有以下索引值
   * $_FILES['設定的name鍵值']['name'] 原本的檔名
   * $_FILES['設定的name鍵值']['tmp_name'] 暫存在server上面的檔名，會被重新命名過
   * $_FILES['設定的name鍵值']['type'] 檔案型態
   * $_FILES['設定的name鍵值']['size'] 檔案大小
   * $_FILES['設定的name鍵值']['error'] 錯問代碼
   */
  //如果有傳 photo 索引值的檔案來
  //檢查上傳到server的暫存檔案是否存在
  if(file_exists($_FILES['photo']['tmp_name']))
  {
    // move_uploaded_file 這個方法可以將上傳的檔案，移動到你目標的資料夾。
    $targetFolder = "files/";
    move_uploaded_file($_FILES['photo']['tmp_name'], $targetFolder . $_FILES['photo']['name']);

    //將目標資料夾與檔案名稱組再一起，就是在server上的檔案位置了。
    $photo = $targetFolder.$_FILES['photo']['name'];
    //echo "檔案存在，可以搬移";
  }
  else
  {
    echo "上傳檔案失敗，暫存檔不在，請確認資料夾寫入權限。或php.ini上傳檔案容量限制是否太小。";
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>確認會員資料</title>

  </head>
  <body>
    <h3>您的註冊資訊</h3>

    <p>登入資訊</p>
    帳號： <?php echo $_POST['username'];?><br>
    密碼： <?php echo $_POST['password'];?>

    <p>個人資訊</p>
    姓名：<?php echo $_POST['name'];?><br>
    性別：<?php echo $_POST['gender'];?><br>
    電話：<?php echo $_POST['phone'];?><br>
    住址：<?php echo $_POST['address'];?><br>
    信箱：<?php echo $_POST['email'];?><br>
    簡介：<br><?php echo nl2br($_POST['aboutMe']); // nl2br 可以把文字方塊的enter斷行轉成<br> ?><br>
    照片：<?php
          if($photo != ''){
            echo "<img src='{$photo}'>";
          }
         ?>


  </body>
</html>
