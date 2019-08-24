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
    <?php include_once 'menu.php'; ?>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 offset-md-3 ">
                    <form class="register" id="registerForm">
                        <div class="form-group">
                            <label class="" for="username ">帳號:</label>
                            <input type="text" class="form-control" id="username" name="username " aria-describedby="usernameHelp" placeholder="請輸入帳號" required>
                        </div>
                        <div class="form-group ">
                            <label for="password">密碼:</label>
                            <input type="password" class="form-control" id="password" name="password " placeholder="請輸入密碼" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm-password error">確認密碼:</label>
                            <input type="password" class="form-control" id="confirm-password" name="confirm-password " placeholder="請確認密碼" required>
                        </div>
                        <div class="form-group ">
                            <label for="name">暱稱:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="請輸入暱稱" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">確認註冊</button>
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
            $("#username").on("keyup", function() {
                if ($(this).val() != '') {
                    // console.log($(this).val());
                    $.ajax({
                        type: "POST", //表單傳送的方式 同 form 的 method 屬性
                        url: "php/check_username.php", //目標給哪個檔案 同 form 的 action 屬性
                        data: { //為要傳過去的資料，使用物件方式呈現，因為變數key值為英文的關係，所以用物件方式送。ex: {name : "輸入的名字", password : "輸入的密碼"}
                            'n': $(this).val() //代表要傳一個 n 變數值為，username 文字方塊裡的值
                        },
                        dataType: 'html' //設定該網頁回應的會是 html 格式
                    }).done(function(data) {
                        // console.log(data);
                        if (data == true) {
                            $("#username").removeClass('agreens').removeClass('agreensBorder');
                            $("#username").siblings().removeClass('agreens');
                            $("#username").addClass('errorBorder');
                            $("#username").siblings().addClass('error');
                            alert('帳號重複')
                            // $("#registerForm button").addClass('disabled');   
                            $("#registerForm button").attr('disabled', true);

                        } else {
                            $("#username").removeClass('error').removeClass('errorBorder');
                            $("#username").siblings().removeClass('error');
                            $("#username").addClass('agreensBorder');
                            $("#username").siblings().addClass('agreens');
                            // $("#registerForm button").removeClass('disabled'); 
                            $("#registerForm button").attr('disabled', false);
                        }
                    }).fail(function(jqXHR, textStatus, errorThrown) {
                        //失敗的時候
                        alert("有錯誤產生，請看 console log");
                        console.log(jqXHR.responseText);
                    });
                } else {
                    $("#username").removeClass('error').removeClass('errorBorder');
                    $("#username").removeClass('agreens').removeClass('agreensBorder');
                    $("#username").siblings().removeClass('error');
                    $("#username").siblings().removeClass('agreens');
                    $("#registerForm button").attr('disabled', false);
                }
            })




            //當表單 sumbit 出去的時候
            $("#registerForm").submit(function() {
                //    alert('請稍等');
                //     不正確
                // let right_username = /.../;
                // if ($("#username").val() !== right_username) {
                //     alert('帳號請輸入英文字母與數字');
                //     $("#username").removeClass('agreensBorder').addClass('error').addClass('errorBorder');
                //     $("#username").siblings().removeClass('agreens').addClass('error');
                // } else
                 if ($("#password").val() != $("#confirm-password").val()) {
                    $("#password").addClass('error');
                    $("#password").siblings().addClass('error');
                    $("#confirm-password").addClass('error');
                    $("#confirm-password").siblings().addClass('error');
                    alert("密碼錯誤");

                } else {
                    $.ajax({
                        type: "POST", //表單傳送的方式 同 form 的 method 屬性
                        url: "php/add_user.php", //目標給哪個檔案 同 form 的 action 屬性
                        data: { //為要傳過去的資料，使用物件方式呈現，因為變數key值為英文的關係，所以用物件方式送。ex: {name : "輸入的名字", password : "輸入的密碼"}
                            'username': $("#username").val(), //代表要傳一個 n 變數值為，username 文字方塊裡的值
                            'password': $("#password").val(),
                            'nzz': $("#name").val(),
                        },
                        dataType: 'html' //設定該網頁回應的會是 html 格式
                    }).done(function(data) {
                        // console.log(data);
                        if (data = true) {
                            alert('註冊成功請跳轉');
                            window.location.href = "admin/backIndex.php";
                        } else {
                            alert('註冊失敗');
                        }
                    }).fail(function(jqXHR, textStatus, errorThrown) {
                        //失敗的時候
                        alert("有錯誤產生，請看 console log");
                        console.log(jqXHR.responseText);
                    });
                }
                return false;
            });
        });
    </script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>