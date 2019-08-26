<?php
require_once __DIR__ . '/php/__connect_db.php';

$page_name = 'data_insert';
$page_title = '新增資料'
?>
<?php include_once __DIR__ . '/__html_head.php' ?>
<?php include_once __DIR__ . '/__navbar.php' ?>
<div class="container   mt-3">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">新增資料</h5>
                    <form method="post" action="php/data_insert_api.php">
                        <div class="form-group">
                            <label for="name">姓名</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Password">
                            <small id="emailHelp" class="form-text"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">電子郵件</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text"></small>
                        </div>
                        <div class="form-group">
                            <label for="mobile">手機</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" aria-describedby="emailHelp" placeholder="Enter mobile">
                            <small id="emailHelp" class="form-text"></small>
                        </div>
                        <div class="form-group">
                            <label for="birthday">生日</label>
                            <input type="text" class="form-control" id="birthday" name="birthday" aria-describedby="emailHelp" placeholder="Enter birthday">
                            <small id="emailHelp" class="form-text"></small>
                        </div>
                        <div class="form-group">
                            <label for="address">地址</label>
                            <input type="text" class="form-control" id="address" name="address" aria-describedby="emailHelp" placeholder="Enter address">
                            <small id="emailHelp" class="form-text"></small>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div> <?php include_once __DIR__ . '/__footer.php' ?>