<?php
session_start();
require __DIR__ . '/__contect.php';
$page_name = 'data_insert';
$page_title = '新資料夾';
$_SESSION['myName'] = 'Hey!!!!'
?>
<?php include __DIR__ . '/__0819header.php'; ?>
<?php include __DIR__ . '/__0819nav.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <form class="needs-invalied" action="0821insert_api.php" method="post">
                        <div class="form-group">
                            <label for="name">姓名</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value=<?php
                               if (isset($_GET['wrong'])) {
                                   echo $_GET['wrong'];
                               }
                               ?>>
                            <small id="nameHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">電子郵件</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="mobile">手機</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile">
                            <small id="mobileHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="birthday">生日</label>
                            <input type="birthday" class="form-control" id="birthday" name="birthday" placeholder="Enter birthday">
                            <small id="birthdayHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="address">地址</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                            <small id="addressHelp" class="form-text text-muted"></small>
                        </div>
                        <button type="submit" class="btn btn-primary">新增</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/__0819footer.php'; ?>