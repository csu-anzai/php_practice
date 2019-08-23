<?php include_once 'head.php'; ?>

<body>
    <?php include_once 'menu.php'; ?>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 offset-md-3 ">
                    <form class="register" id="registerForm" method="post" action="php/add_member.php">
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
                            <input type="text" class="form-control" id="name" name="name " placeholder="請輸入暱稱" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary w-100">確認註冊</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        //當文件準備好時，
        $(document).on("ready", function() {
            //當表單 sumbit 出去的時候
            $("#registerForm").on("submit", function() {
                //    alert('請稍等');
                if ($("#password").val() != $("#confirm-password").val()) {
                    $("#password").addClass('error');
                    $("#password").siblings().addClass('error');
                    $("#confirm-password").addClass('error');
                    $("#confirm-password").siblings().addClass('error');
                    alert("密碼錯誤");
                }

                return false;
            });
        });
    </script>
    <!-- 頁底 -->
    <?php
    include_once 'footer.php';
    ?>
</body>