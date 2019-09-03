    
<?php
require_once __DIR__ . '/space__connect_db.php';
?>
<?php include __DIR__ . '/space__html_head.php'; ?>
<?php include __DIR__ . '/space__side.php'; ?>

<style>
    #preview img {
        margin: 10px;
        width: 300px;
        height: 300px;
        object-fit: cover;
    }
</style>
<nav class="navbar navbar-expand-lg">
    <h3 style="color:#FFC107; padding: 0 50px 0 0;">新增商品頁面</h3>
    <ul class="navbar-nav">
        <li class="nav-item <?= $page_name == 'space_inert_page' ? 'active' : '' ?> ">
            <a class="nav-link" href="space_list.php"><button type="button" class="btn btn-outline-warning" style="width:200px;">返回商品列表</button></a>
        </li>
    </ul>
</nav>
<div class="container">
    <form onsubmit="return checkForm()" name="form1" enctype="multipart/form-data" style="margin:15% 0 0 0;">
        <div class="row">
            <div class="col">
                <div class="alert alert-success" role="alert" id="info-bar" style="display: none"></div>
            </div>
        </div>
        <div>
            <div class="card  text-white bg-dark flex-wrap  " style="box-shadow: 0px 0px 80px #000000;">
                <div class="card-body">
                    <div class="d-flex  flex-wrap" id="preview"></div>
                    <div class="form-group d-flex">
                        <label class="btn btn-outline-warning" for="images_path">選擇上傳的圖檔</label>
                        <input type="file" class="form-control" style="display:none;" id="images_path" name="space_image_path[]" aria-describedby="emailHelp" placeholder="Enter birthday" onchange="previewFiles()" multiple>
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                    <div class="form-group">
                        <label class="btn btn-outline-warning" for="logo_path">LOGO上傳</label>
                        <img id="logo_img" src="" height="200" alt="Image preview...">
                        <input type="file" class="form-control" style="display:none;" id="logo_path" name="space_logo_path" aria-describedby="emailHelp" placeholder="Enter email" onchange="previewFile()">
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group d-flex align-items-baseline" style="width:50%">
                            <label for="space_name" style="width:115px;">空間名稱</label>
                            <input type="text" class="form-control" id="space_name" name="space_name" placeholder="請輸入名稱">
                            <small id="emailHelp" class="form-text"></small>
                        </div>
                        <div class="form-group d-flex align-items-baseline" style="width:48% ">
                            <label for="title_description" style="width:120px;">標題內容</label>
                            <input type="text" class="form-control" id="title_description" name="space_title_description" aria-describedby="emailHelp" placeholder="請輸入標題">
                            <small id="emailHelp" class="form-text"></small>
                        </div>

                    </div>

                    <div class="form-group d-flex align-items-baseline">
                        <label for="space_description" style='width:100px;'>詳細介紹</label>
                        <input type="text" class="form-control" id="space_description" name="space_description" aria-describedby="emailHelp" placeholder="請輸入詳細介紹">
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
                        // $fruit_a = empty($_POST['space_service']) ? [] : $_POST['space_service'];
                        // $fruit_b = empty($_POST['space_service']) ? [] : $_POST['space_service'];
                        // $fruit_c = empty($_POST['space_service']) ? [] : $_POST['space_service'];
                        // $fruit_d = empty($_POST['space_service']) ? [] : $_POST['space_service'];
                        foreach ($data1 as $k => $v) : ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="<?= $k ?>" name="space_service[]">
                                <label class="form-check-label" for="<?= $k ?>"><?= $v ?></label>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="d-flex justify-content-between">
                        <div class="form-group d-flex align-items-baseline" style="width:30%;">
                            <label for="space_time" style='width:130px;'>提供時間</label>
                            <input type="date" class="form-control" id="space_time" name="space_time" aria-describedby="emailHelp" placeholder="請選擇">
                            <small id="emailHelp" class="form-text"></small>
                        </div>
                        <div class="form-group d-flex align-items-baseline" style="width:30%;">
                            <label for="max_people" style='width:130px;'>最大人數</label>
                            <input type="number" class="form-control" id="max_people" name="space_max_people" aria-describedby="emailHelp" placeholder="請輸入人數">
                            <small id="emailHelp" class="form-text"></small>
                        </div>
                        <div class="form-group d-flex align-items-baseline" style="width:30%;">
                            <label for="tel" style='width:70px;'>電話</label>
                            <input type="tel" class="form-control" id="tel" name="space_tel" aria-describedby="emailHelp" placeholder="請輸入電話">
                            <small id="emailHelp" class="form-text"></small>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <div class="form-group d-flex align-items-baseline" style="width:30%;">
                            <label for="address" style='width:130px;'>地區</label>
                            <?php $sql  = sprintf("SELECT * FROM `taiwan_area_number` WHERE 1");
                            $stmt = $pdo->query($sql); ?>
                            <select class="custom-select" name="space_area">
                                <?php while ($r = $stmt->fetch()) : ?>
                                    <option value="<?= $r['area_sid'] ?>"><?= $r['taiwan_city'] ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="form-group d-flex align-items-baseline" style="width:65%;">
                            <label for="address" style='width:100px;'>地址</label>
                            <input type="text" class="form-control" id="address" name="space_address" aria-describedby="emailHelp" placeholder="請輸入地址">
                            <small id="emailHelp" class="form-text"></small>
                        </div>
                    </div>


                    <div class="d-flex justify-content-between">
                        <div class="form-group d-flex align-items-baseline" style="width:30%;">
                            <label for="status" style='width:130px;'>直接上架</label>
                            <!-- <input type="text" class="form-control" id="status" name="space_status" aria-describedby="emailHelp" placeholder="Enter address" value="1"> -->
                            <select class="custom-select" name="space_status">
                                <option value="1">上架</option>
                                <option value="0">下架</option>
                            </select>
                            <small id="emailHelp" class="form-text"></small>
                        </div>
                        <div class="form-group d-flex align-items-baseline" style="width:65%;">
                            <label for="price" style='width:100px;'>包場價格</label>
                            <input type="text" class="form-control" id="price" name="space_price" aria-describedby="emailHelp" placeholder="請輸入價格">
                            <small id="emailHelp" class="form-text"></small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-warning  w-100">新增</button>

                </div>
            </div>
        </div>
    </form>
</div>
<script>
    let info_bar = document.querySelector('#info-bar');
    let space_name = document.querySelector('#space_name');
    // let i, s, item;
    // 
    function checkForm() {
        if (space_name.value.length < 1) {
            alert('欄位不正確');
            space_name.style.border = '1px solid red';
            // space_name.closest('.form-group').querySelector('small').innerText = '錯誤';
        }
        let fd = new FormData(document.form1); //要傳的資料
        fetch('space_insert_api.php', {
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
                if (json.success) { //這裡的success是後端result json再轉換成物件
                    info_bar.className = 'alert alert-success';
                    setTimeout(function() {
                        location.href = '/php_practice/handMade/space_list.php';
                    }, 1000);
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
    //單圖
    function previewFile() {
        var preview = document.querySelector('#logo_img');
        var file = document.querySelector('#logo_path').files[0];
        var reader = new FileReader();
        reader.addEventListener("load", function() {
            preview.src = reader.result;
        }, false);
        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
<?php include __DIR__ . '/space__footer.php'; ?>