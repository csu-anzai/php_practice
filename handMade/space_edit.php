<?php
// require __DIR__. '/_admin_required.php';
require_once __DIR__ . '/php/space__connect_db.php';
?>
<?php
$sid = isset($_GET['space_sid']) ? intval($_GET['space_sid']) : 0;
if (empty($sid)) {
    header('Location:space_list.php');
    exit;
}
$sql = " SELECT * FROM `space_list` WHERE `space_sid`=$sid ";
$row = $pdo->query($sql)->fetch();
$sql2  =  sprintf("SELECT * FROM `space_list` JOIN `taiwan_area_number` ON `space_list`.`space_area` = `taiwan_area_number`.`area_sid` WHERE `space_sid`=$sid");
$row2 = $pdo->query($sql2)->fetch();
?>
<?php include __DIR__ . '/space__html_head.php'; ?>
<?php include __DIR__ . '/space__side.php'; ?>
<style>
    #preview img {
        margin: 10px;
        width: 150px;
    }
</style>
<nav class="navbar navbar-expand-lg">
    <h3 style="color:#FFC107; padding: 0 50px 0 0;">修改商品頁面</h3>
    <ul class="navbar-nav">
        <li class="nav-item <?= $page_name == 'space_inert_page' ? 'active' : '' ?> ">
            <a class="nav-link" href="space_list.php"><button type="button" class="btn btn-outline-warning" style="width:200px;">返回商品列表</button></a>
        </li>
    </ul>
</nav>
<div class="container">
    <form onsubmit="return checkForm()" name="form1" enctype="multipart/form-data" style="margin:15% 0 0 0;">
        <input type="hidden" name="space_sid" value="<?= $row['space_sid'] ?>">
        <div class="row">
            <div class="col">
                <div class="alert alert-primary" role="alert" id="info-bar" style="display: none"></div>
            </div>
        </div>
        <div class="card  text-white bg-dark flex-wrap  " style="box-shadow: 0px 0px 80px #000000;">
            <div class="card-body">
                <div class="d-flex  flex-wrap" id="preview"></div>
                <div class="form-group">
                    <label class="btn btn-outline-warning" for="images_path">選擇上傳的圖檔</label>
                    <input type="file" class="form-control" style="display:none;" id="images_path" name="space_image_path[]" aria-describedby="emailHelp" placeholder="Enter birthday" onchange="previewFiles()" multiple value="<?= $row2['space_image_path'] ?>">
                    <small id="emailHelp" class="form-text"></small>
                </div>
                <div class="form-group">
                    <label class="btn btn-outline-warning" for="logo_path">LOGO上傳</label>
                    <img id='logo_img' src="" height="200">
                    <input type="file" class="form-control" style="display:none;" id="logo_path" name="space_logo_path" aria-describedby="emailHelp" placeholder="Enter email" value="<?= $row2['space_logo_path'] ?>">
                    <small id="emailHelp" class="form-text"></small>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="form-group d-flex align-items-baseline" style="width:45%">
                        <label for="space_name" style="width:115px;">空間名稱</label>
                        <input type="text" class="form-control" id="space_name" name="space_name" placeholder="Password" value="<?= $row2['space_name'] ?>">
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                    <div class="form-group d-flex align-items-baseline" style="width:48% ">
                        <label for="title_description" style="width:120px;">標題內容</label>
                        <input type="text" class="form-control" id="title_description" name="space_title_description" aria-describedby="emailHelp" placeholder="Enter address" value="<?= $row2['space_title_description'] ?>">
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                </div>
                <div class="form-group d-flex align-items-baseline">
                    <label for="space_description" style='width:100px;'>詳細介紹</label>
                    <input type="text" class="form-control" id="space_description" name="space_description" aria-describedby="emailHelp" placeholder="Enter mobile" value="<?= $row2['space_description'] ?>">
                    <small id="emailHelp" class="form-text"></small>
                </div>
                <div class="form-group">
                    <label for="service" style='width:100px;'>環境氣氛</label>
                    <!-- <input type="text" class="form-control" id="service" name="space_service" aria-describedby="emailHelp" placeholder="Enter address" value="aa">
                                <small id="emailHelp" class="form-text"></small> -->
                    <?php
                    $data1 = [
                        '1' => '溫馨',
                        '2' => '高雅',
                        '3' => '古典',
                        '4' => '時尚',
                    ];

                    foreach ($data1 as $k => $v) : ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="<?= $k ?>" name="space_service[]" <?php
                                                                                                                            foreach (json_decode($row2['space_service']) as $a) {
                                                                                                                                echo $k == $a ? 'checked' : '';
                                                                                                                            }
                                                                                                                            ?>>
                            <label class="form-check-label" for="<?= $k ?>"><?= $v ?></label>
                        </div>
                    <?php endforeach;  ?>
                    <?php


                    ?>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="form-group d-flex align-items-baseline" style="width:30%;">
                        <label for="space_time" style='width:130px;'>提供時間</label>
                        <input type="date" class="form-control" id="space_time" name="space_time" aria-describedby="emailHelp" placeholder="Enter address" value="<?= $row2['space_time'] ?>">
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                    <div class="form-group d-flex align-items-baseline" style="width:30%;">
                        <label for="max_people" style='width:130px;'>最大人數</label>
                        <input type="number" class="form-control" id="max_people" name="space_max_people" aria-describedby="emailHelp" placeholder="Enter address" value="<?= $row2['space_max_people'] ?>">
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                    <div class="form-group d-flex align-items-baseline" style="width:30%;">
                        <label for="tel" style='width:70px;'>電話</label>
                        <input type="tel" class="form-control" id="tel" name="space_tel" aria-describedby="emailHelp" placeholder="Enter address" value="<?= $row2['space_tel'] ?>">
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                </div>



                <div class="d-flex justify-content-between">
                    <div class="form-group d-flex align-items-baseline" style="width:30%;">
                        <label for="address" style='width:130px;'>地區</label>
                        <?php
                        $sql3  = sprintf("SELECT * FROM `taiwan_area_number` WHERE 1");
                        $stmt3 = $pdo->query($sql3);
                        ?>
                        <select class="custom-select" name="space_area" id="space_area">
                            <?php while ($r = $stmt3->fetch()) : ?>
                                <option value="<?= $r['area_sid'] ?>" <?=
                                                                                $r['area_sid'] == $row2['space_area'] ? 'selected' : ' ';
                                                                            ?>>
                                    <?= $r['taiwan_city'] ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group d-flex align-items-baseline" style="width:65%;">
                        <label for="address" style='width:100px;'>地址</label>
                        <input type="text" class="form-control" id="address" name="space_address" aria-describedby="emailHelp" placeholder="Enter address" value="<?= $row2['space_address'] ?>">
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                </div>


                <div class="d-flex justify-content-between">
                    <div class="form-group d-flex align-items-baseline" style="width:30%;">
                        <label for="status" style='width:130px;'>直接上架</label>
                        <!-- <input type="text" class="form-control" id="status" name="space_status" aria-describedby="emailHelp" placeholder="Enter address" value="1"> -->
                        <select class="custom-select" name="space_status">
                            <option value="1" <?php
                                                $selected = $row2['space_status'];
                                                echo  $selected == 1 ? "selected" : " ";
                                                ?>>上架</option>
                            <option value="0" <?php
                                                $selected = $row2['space_status'];
                                                echo $selected == 0 ?  "selected" : " ";
                                                ?>>下架</option>
                        </select>
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                    <div class="form-group d-flex align-items-baseline" style="width:62.8%;">
                        <span for="price" style='width:70px;'>價格</span>
                        <input type="text" class="form-control" id="price" name="space_price" aria-describedby="emailHelp" placeholder="Enter address" value="<?= $row['space_price'] ?>">
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-warning  w-100">修改</button>

            </div>
        </div>
    </form>
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

        fetch('php/space_edit_api.php', {
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

    //多圖
    function previewFiles() {

        var preview = document.querySelector('#preview');
        var files = document.querySelector('input[type=file]').files;

        function readAndPreview(file) {

            // Make sure `file.name` matches our extensions criteria
            if (/\.(jpe?g|png|gif)$/i.test(file.name)) {
                var reader = new FileReader();

                reader.addEventListener("load", function() {
                    var image = new Image();
                    image.height = 100;
                    image.title = file.name;
                    image.src = this.result;
                    preview.appendChild(image);
                }, false);

                reader.readAsDataURL(file);
            }

        }

        if (files) {
            [].forEach.call(files, readAndPreview);
        }

    }
</script>
<?php include __DIR__ . '/space__footer.php'; ?>