<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>註冊表單</title>

  </head>
  <body>
    <!-- 當要傳檔案時，必須加上 enctype="multipart/form-data" -->
    <form action="reviewData.php" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend>登入資訊</legend>
        帳號： <input type="text" name="username" placeholder="請填帳號"><br>
        密碼： <input type="password" name="password" placeholder="請填密碼">
        確認密碼： <input type="password" name="checkPassword" placeholder="請在填一次密碼">
      </fieldset>

      <fieldset>
        <legend>個人資訊</legend>
        姓名：<input type="text" name="name" placeholder="您的全名"><br>
        性別：<label><input type="radio" name="gender" value="女" checked>女</label> <label><input type="radio" name="gender" value="男">男</label><br>
        電話：<input type="text" name="phone" placeholder="您的手機"><br>
        住址：<input type="text" name="address" placeholder="您的通訊地址"><br>
        信箱：<input type="email" name="email" placeholder="您的E-mail信箱"><br>
        簡介：<br><textarea name="aboutMe" rows="8" cols="80"></textarea><br>
        照片：<input type="file" name="photo">
      </fieldset>

      <button type="submit">送出</button>
    </form>

  </body>
</html>
