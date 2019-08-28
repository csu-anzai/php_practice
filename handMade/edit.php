<?php
// require __DIR__. '/_admin_required.php';
require_once __DIR__ . '/php/__connect_db.php';
?>
<?php
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
if (empty($sid)) {
    header('Location:data_list.php');
    exit;
}
$sql = " SELECT * FROM `space_list` WHERE `sid`=$sid ";
$row = $pdo->query($sql)->fetch();


?>
<?php include __DIR__ . '/__html_head.php'; ?>
<?php include __DIR__ . '/__navbar.php'; ?>
<div class="page-content-wrapper">
    <!--  -->
    <div class="container-fluid" id='wert'>
        <div class="container   mt-3">
            <div class="row">
                <div class="col">
                    <div class="alert alert-primary" role="alert" id="info-bar" style="display: none"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">編輯功能</h5>
                            <form onsubmit="return checkForm()" name="form1">
                                <input type="hidden" name="sid" value="<?= $row['sid'] ?>">
                                <!-- 隱藏流水 -->
                                <div class="form-group">
                                    <label for="space_name">空間名稱</label>
                                    <input type="text" class="form-control" id="space_name" name="space_name" placeholder="Password" value="<?= htmlentities($row['space_name']) ?>">
                                    <small id="emailHelp" class="form-text"></small>
                                </div>
                                <div class="form-group">
                                    <label for="logo_path">LOGO上傳</label>
                                    <input type="text" class="form-control" id="logo_path" name="logo_path" aria-describedby="emailHelp" placeholder="Enter email"  value="<?= htmlentities($row['logo_path']) ?>">
                                    <small id="emailHelp" class="form-text"></small>
                                </div>
                                <div class="form-group">
                                    <label for="space_description">環境介紹</label>
                                    <input type="text" class="form-control" id="space_description" name="space_description" aria-describedby="emailHelp" placeholder="Enter mobile"  value="<?= htmlentities($row['space_description']) ?>">
                                    <small id="emailHelp" class="form-text"></small>
                                </div>
                                <div class="form-group">
                                    <label for="image_path">圖片上傳</label>
                                    <input type="text" class="form-control" id="image_path" name="image_path" aria-describedby="emailHelp" placeholder="Enter birthday"  value="<?= htmlentities($row['image_path']) ?>">
                                    <small id="emailHelp" class="form-text"></small>
                                </div>
                                <div class="form-group">
                                    <label for="space_time">提供時間</label>
                                    <input type="text" class="form-control" id="space_time" name="space_time" aria-describedby="emailHelp" placeholder="Enter address"  value="<?= htmlentities($row['space_time']) ?>-03-02">
                                    <small id="emailHelp" class="form-text"></small>
                                </div>
                                <div class="form-group">
                                    <label for="max_people">人數</label>
                                    <input type="number" class="form-control" id="max_people" name="max_people" aria-describedby="emailHelp" placeholder="Enter address"  value="<?= htmlentities($row['max_people']) ?>">
                                    <small id="emailHelp" class="form-text"></small>
                                </div>
                                <div class="form-group">
                                    <label for="tel">電話</label>
                                    <input type="tel" class="form-control" id="tel" name="tel" aria-describedby="emailHelp" placeholder="Enter address"  value="<?= htmlentities($row['tel']) ?>">
                                    <small id="emailHelp" class="form-text"></small>
                                </div>
                                <div class="form-group">
                                    <label for="area">地區</label>
                                    <input type="text" class="form-control" id="area" name="area" aria-describedby="emailHelp" placeholder="Enter address"  value="<?= htmlentities($row['area']) ?>">
                                    <small id="emailHelp" class="form-text"></small>
                                </div>
                                <div class="form-group">
                                    <label for="service">service</label>
                                    <input type="text" class="form-control" id="service" name="service" aria-describedby="emailHelp" placeholder="Enter address"  value="<?= htmlentities($row['service']) ?>">
                                    <small id="emailHelp" class="form-text"></small>
                                </div>
                                <div class="form-group">
                                    <label for="address">地址</label>
                                    <input type="text" class="form-control" id="address" name="address" aria-describedby="emailHelp" placeholder="Enter address"  value="<?= htmlentities($row['address']) ?>">
                                    <small id="emailHelp" class="form-text"></small>
                                </div>
                                <div class="form-group">
                                    <label for="status">status</label>
                                    <input type="text" class="form-control" id="status" name="status" aria-describedby="emailHelp" placeholder="Enter address"  value="<?= htmlentities($row['status']) ?>">
                                    <small id="emailHelp" class="form-text"></small>
                                </div>
                                <div class="form-group">
                                    <label for="price">price</label>
                                    <input type="text" class="form-control" id="price" name="price" aria-describedby="emailHelp" placeholder="Enter address"  value="<?= htmlentities($row['price']) ?>">
                                    <small id="emailHelp" class="form-text"></small>
                                </div>
                                <div class="form-group">
                                    <label for="title_description">title_description</label>
                                    <input type="text" class="form-control" id="title_description" name="title_description" aria-describedby="emailHelp" placeholder="Enter address" value="<?= htmlentities($row['title_description']) ?>">
                                    <small id="emailHelp" class="form-text"></small>
                                </div>

                                <!-- <div class="form-group">
                                    <label for=user_id>user_id</label>
                                    <input type="text" class="form-control" id=user_id name=user_id aria-describedby="emailHelp" placeholder="Enter address" value="<?= htmlentities($row['address']) ?>">
                                    <small id="emailHelp" class="form-text"></small>
                                </div> -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                let info_bar = document.querySelector('#info-bar');
                let space_name = document.querySelector('#space_name');
                // let i, s, item;

                function checkForm() {

                    if (space_name.value.length < 2) {
                        space_name.style.border = '1px solid red';
                        space_name.closest('.form-group').querySelector('small').innerText = '請填寫正確姓名';

                    }


                    let fd = new FormData(document.form1); //要傳的資料

                    fetch('php/edit_api.php', {
                            method: 'POST',
                            body: fd, //要傳的資料
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

                    return false;
                }
            </script>
        </div>
    </div>
    <!--  -->
</div>
<script>
</script>
<?php include __DIR__ . '/__footer.php'; ?>