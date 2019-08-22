<?php
session_start();

require __DIR__ . '/__contect.php';

$page_name = 'data_edit';

$page_title = '編輯資料';

$_SESSION['myName'] = 'Hey!!!!';

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0 ;

$sql = " SELECT * FROM `address_book` WHERE `sid`=$sid ";

$row = $pdo->query($sql)->fetch();

if(empty($sid)){
    header('Location:0820data_list.php');
    exit;
}
?>
<?php include __DIR__ . '/__0819header.php'; ?>
<?php include __DIR__ . '/__0819nav.php'; ?>
<style>
    small.red {
        color: red !important;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="alert alert-primary" role="alert" id="info-bar" style="display: none"></div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">編輯資料</h5>
                    <form class="needs-invalied" name="form1" onsubmit="return checkForm()">
                        <div class="form-group">
                            <label for="name">姓名</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?= $row['name'] ?>" >
                            <small id="nameHelp" class="form-text text-muted red"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">電子郵件</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted red"></small>
                        </div>
                        <div class="form-group">
                            <label for="mobile">手機</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile">
                            <small id="mobileHelp" class="form-text text-muted red"></small>
                        </div>
                        <div class="form-group">
                            <label for="birthday">生日</label>
                            <input type="birthday" class="form-control" id="birthday" name="birthday" placeholder="Enter birthday">
                            <small id="birthdayHelp" class="form-text text-muted red"></small>
                        </div>
                        <div class="form-group">
                            <label for="address">地址</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                            <small id="addressHelp" class="form-text text-muted "></small>
                        </div>
                        <button type="submit" class="btn btn-primary" id="submit_btn">新增</button>
                    </form>
                </div>
            </div>
        </div>



        <script>
            let info_bar = document.querySelector('#info-bar');
            let i, s, item;
            const required_fields = [{
                    id: 'name',
                    pattern: /^\S{2,}/,
                    info: '請填寫正確的姓名'
                },
                {
                    id: 'email',
                    pattern: /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i,
                    info: '請填寫正確的 email 格式'
                },
                {
                    id: 'mobile',
                    pattern: /^09\d{2}\-?\d{3}\-?\d{3}$/,
                    info: '請填寫正確的手機號碼格式'
                },
            ];

            // 拿到對應的 input element (el), 顯示訊息的 small element (infoEl)
            for (s in required_fields) {
                item = required_fields[s];
                item.el = document.querySelector('#' + item.id);
                item.infoEl = document.querySelector('#' + item.id + 'Help');
            }

            //   /[A-Z]{2}\d{8}/i  統一發票

            function checkForm() {
                // 先讓所有欄位外觀回復到原本的狀態
                for (s in required_fields) {
                    item = required_fields[s];
                    item.el.style.border = '1px solid #CCCCCC';
                    item.infoEl.innerHTML = '';
                }
                info_bar.style.border = 'none';
                info_bar.innerHTML = '';

                submit_btn.style.display = 'none';
                // 檢查必填欄位, 欄位值的格式
                let isPass = true;

                for (s in required_fields) {
                    item = required_fields[s];

                    if (!item.pattern.test(item.el.value)) {
                        item.el.style.border = '1px solid red';
                        item.infoEl.innerHTML = item.info;
                        isPass = false;
                    }
                }

                let fd = new FormData(document.form1);

                if (isPass) {
                    fetch('0821insert_api.php', {
                            method: 'POST',
                            body: fd,
                        })
                        .then(response => {
                            return response.json();
                        })
                        .then(json => {
                            console.log(json);
                            info_bar.style.display = 'block';
                            info_bar.innerHTML = json.info;
                            if (json.success) {
                                info_bar.className = 'alert alert-success';
                            } else {
                                info_bar.className = 'alert alert-danger';
                            }
                        });
                } else {
                    submit_btn.style.display = 'block';
                }
                return false; // 表單不出用傳統的 post 方式送出
            }
        </script>
    </div>

    <?php include __DIR__ . '/__0819footer.php'; ?>