<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫
//require_once 'php/db.php';
?>
<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <title>作品網站-會員註冊</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 給行動裝置或平板顯示用，根據裝置寬度而定，初始放大比例 1 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 載入 bootstrap 的 css 方便我們快速設計網站-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="shortcut icon" href="images/favicon.ico">
  </head>

  <body>
    <!-- 頁首 -->
    <?php
      include_once 'menu.php';
    ?>
    <!-- 網站內容 -->
    <div class="content">
      <div class="container">
        <!-- 建立第一個 row 空間，裡面準備放格線系統 -->
        <div class="row">
          <!-- 在 xs 尺寸，佔12格，可參考 http://getbootstrap.com/css/#grid 說明-->
          <div class="col-xs-12 col-sm-4 col-sm-offset-4">
            <form class="register" method="post" action="php/add_member.php">
              <?php
              //有訊息
              if (isset($_SESSION['msg']))
              {
                //就印出
                echo "<p class='danger'>{$_SESSION['msg']}</p>";
              }
              ?>
              <div class="form-group">
                <label for="username">帳號</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="請輸入帳號" required>
              </div>
              <div class="form-group">
                <label for="password">密碼</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="請輸入密碼" required>
              </div>
              <div class="form-group">
                <label for="confirm_password">確認密碼</label>
                <input type="password" class="form-control" id="confirm_password" name="password" placeholder="請再次輸入密碼" required>
              </div>
              <div class="form-group">
                <label for="name">暱稱</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="請輸入您的暱稱" required>
              </div>
              <button type="submit" class="btn btn-default">
                註冊
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- 在表單送出前，檢查確認密碼是否輸入一樣 -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
      //當文件準備好時，
      $(document).on("ready", function() {
				//當表單 sumbit 出去的時候
				$("form").on("submit", function(){
					if ($("#password").val() != $("#confirm_password").val()) {
						//把 input 的父標籤 加入 has-error，讓人知道哪個地方有錯誤，作為提醒
						//為何要在父類別加has-error，請看 http://getbootstrap.com/css/#forms-control-validation
						$("#password").parent().addClass("has-error"); 
						$("#confirm_password").parent().addClass("has-error"); 
						
	        	//若密碼都不一樣就警告。
	          alert("兩次密碼輸入不一樣，請確認");
	          //回傳 false 為了要阻止 from 繼續把資料送出去。
	          return false;
	        }
				});
      });
    </script>
    <!-- 頁底 -->
    <?php
      include_once 'footer.php';
    ?>
  </body>
</html>
