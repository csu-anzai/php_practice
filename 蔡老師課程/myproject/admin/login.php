<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫，因為此檔案放在 admin 裡，要找到 db.php 就要回上一層 ../php 裡面才能找到
require_once '../php/db.php';

//如過有 $_SESSION['is_login'] 這個值，以及 $_SESSION['is_login'] 為 true 都代表已登入
if(isset($_SESSION['is_login']) && $_SESSION['is_login'])
{
  //直接轉跳到 index.php 後端首頁
  header("Location: backIndex.php");
}
?>
<?php include_once 'head.php'; ?>

<style>
    .error {
        color: red !important;
    }

    .errorBorder {
        border: red 1px solid;
    }

    .agreens {
        color: green !important;
    }

    .agreensBorder {
        border: green 1px solid;
    }
</style>
<body>
   
    <div class="main">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 offset-md-3 ">
                    <h1>會員登入</h1>
                    <form class="register" id="loginForm" method="post">
                        <div class="form-group">
                            <label class="" for="username ">帳號:</label>
                            <input type="text" class="form-control" id="username" name="username " aria-describedby="usernameHelp" placeholder="請輸入帳號" required>
                        </div>
                        <div class="form-group ">
                            <label for="password">密碼:</label>
                            <input type="password" class="form-control" id="password" name="password " placeholder="請輸入密碼" required>
                        </div>                    
                        <button type="submit" class="btn btn-primary w-100">登入</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- 頁底 -->
    <?php include_once 'footer.php'; ?>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script> -->
    <script>
        $(document).on("ready", function() {
            //當文件準備好時，
            //當表單 sumbit 出去的時候
            $("#loginForm").submit(function() {
                //    alert('請稍等');
                //     不正確
                // let right_username = /.../;
                // if ($("#username").val() !== right_username) {
                //     alert('帳號請輸入英文字母與數字');
                //     $("#username").removeClass('agreensBorder').addClass('error').addClass('errorBorder');
                //     $("#username").siblings().removeClass('agreens').addClass('error');
                // } else
                    $.ajax({
                        type: "POST", //表單傳送的方式 同 form 的 method 屬性
                        url: "../php/verify_username.php", //目標給哪個檔案 同 form 的 action 屬性
                        data: { //為要傳過去的資料，使用物件方式呈現，因為變數key值為英文的關係，所以用物件方式送。ex: {name : "輸入的名字", password : "輸入的密碼"}
                            'username': $("#username").val(), //代表要傳一個 n 變數值為，username 文字方塊裡的值
                            'password': $("#password").val()
                        },
                        dataType: 'html' //設定該網頁回應的會是 html 格式
                    }).done(function(data) {
                        // console.log(data);
                        if (data == "yes") {
                            alert('跳轉');
                            window.location.href = "backIndex.php"; 
                        } else {
                            alert('請確認帳號密碼');
                        }
                    }).fail(function(jqXHR, textStatus, errorThrown) {
                        //失敗的時候
                        alert("有錯誤產生，請看 console log");
                        console.log(jqXHR.responseText);
                    });
                return false;
            });
        });
    </script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>