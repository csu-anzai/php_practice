<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>所有常用表單元素</title>
    <style >
      form{
        padding-bottom:300px;
      }
    </style>
  </head>
  <body>
    <div class="printPost">
      <?php
        // 如果 $_POST 陣列內容數量有的話，代表有值，就 print_r 出來
        if(count($_POST)) print_r($_POST);
      ?>
    </div>


    <form action="all.php" method="post">
      <h4>input 單行文字方塊 text</h4>
      <input type="text" name="name" value="" placeholder="單行文字方塊" autofocus>

      <hr>

      <h4>input 單選圈 radio</h4>
      <input type="radio" name="gender" value="1"> 男生
      <label><input type="radio" name="gender" value="0"> 女生</label>
      <input type="radio" id="secret" name="gender" value="2"> <label for="secret">秘密</label>

      <hr>

      <h4>input複選勾 checkbox</h4>
      <label><input type="checkbox" name="like[]" value="xbox"> xbox</label>
      <label><input type="checkbox" name="like[]" value="ps4"> ps4</label>
      <label><input type="checkbox" name="like[]" value="wii"> wii</label>

      <hr>

      <h4>input 隱藏 hidden</h4>
      <input type="hidden" name="user_id" value="143842321387">

      <hr>

      <h4>input 範圍 range</h4>
      <input type="range" name="score" min="0" max="10">

      <hr>

      <h4>input 日期 date</h4>
      <input type="date" name="birthday" placeholder="生日">

      <hr>

      <h4>input 日期與時間 date</h4>
      <input type="datetime-local" name="birthdayTime" placeholder="出生日期與時間">

      <hr>

      <h4>input 信箱 email</h4>
      <input type="email" name="myEmail" placeholder="請填信箱">

      <hr>

      <h4>input 電話 tel</h4>
      <input type="tel" name="myTel" placeholder="請填電話">

      <hr>

      <h4>input 密碼 password</h4>
      <input type="password" name="pw" placeholder="請填密碼">

      <hr>

      <h4>input 檔案 file</h4>
      <input type="file" name="myfile">

      <hr>

      <h4>textarea 多行文字方塊 textarea</h4>
      <textarea name="contact" rows="8" cols="80"></textarea>

      <hr>

      <h4>fieldset 與 legend</h4>
      <fieldset>
        <legend>請輸入帳號密碼</legend>
        帳號： <input type="text" name="username" placeholder="請填帳號"><br>
        密碼： <input type="password" name="password" placeholder="請填密碼">
      </fieldset>

      <hr>

      <h4>select 下拉式選單</h4>
      <select name="myCar">
        <option value="nissan">裕隆</option>
        <option value="toyota">豐田</option>

        <optgroup label="瑞典車">
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
        </optgroup>
        <optgroup label="德國車">
          <option value="mercedes">Mercedes</option>
          <option value="audi">Audi</option>
        </optgroup>
      </select>

      <hr>

      <h4>button 按鈕</h4>
      <button type="button" onclick="alert('我只是一般按鈕');">一般按鈕</button>
      <button type="reset">清除</button>
      <button type="submit">送出</button>
    </form>

  </body>
</html>
