<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>基本表單</title>

  </head>
  <body>
    <div class="printPost">
      <?php
        // 如果 $_POST 陣列內容數量有的話，代表有值，就 print_r 出來
        if(count($_POST)) print_r($_POST);
      ?>
    </div>

    <form action="base.php" method="post">
      <input type="text" name="myName" value="" placeholder="請填名字">
      <button type="submit">送出</button>
    </form>

  </body>
</html>
