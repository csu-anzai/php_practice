<?php
require_once __DIR__ . '/space__connect_db.php';
?>
<?php include __DIR__ . '/space__html_head.php'; ?>
<?php include __DIR__ . '/space__side.php'; ?>
<style>
    #preview img {
        margin: 10px 0 10px 0;
    }
</style>
<div class="row">
    <div class="col">
        <div class="alert alert-primary" role="alert" id="info-bar" style="display: none"></div>
    </div>
</div>
<h5>新增資料</h5>
<form class="" 　onsubmit="return checkForm()" name="form1" enctype="multipart/form-data" autocomplete="on">

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="space_name">空間名稱</label>
                        <input type="text" class="form-control" id="space_name" name="space_name" placeholder="Password">
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                    <!-- <input id="browse" type="file" onchange="previewFiles()" multiple> -->
                    <div class="form-group">
                        <label for="image_path">圖片上傳</label>
                        <input type="file" class="form-control" id="browse" name="space_image_path[]" aria-describedby="emailHelp" placeholder="Enter birthday" onchange="previewFiles()" multiple>
                        <small id="emailHelp" class="form-text"></small>
                        <div id="preview" style="width:100px;"></div>
                    </div>
                    <div class="form-group">
                        <label for="logo_path">LOGO上傳</label>
                        <img id='logo_img' src="" height="200">
                        <input type="file" class="form-control" id="logo_path" name="space_logo_path" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text"></small>
                    </div>

                    <div class="form-group">
                        <label for="space_description">環境介紹</label>
                        <textarea class="form-control" 　 cols="50" rows="5" id="space_description" name="space_description" aria-describedby="emailHelp" value="尚未輸入">
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="space_time">提供時間</label>
                        <input type="date" class="form-control" id="space_time" name="space_time" aria-describedby="emailHelp" placeholder="Enter address" value="2019-03-02">
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                    <div class="form-group">
                        <label for="max_people">人數</label>
                        <input type="number" class="form-control" id="max_people" name="space_max_people" aria-describedby="emailHelp" placeholder="Enter address" value="50">
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                    <div class="form-group">
                        <label for="tel">電話</label>
                        <input type="tel" class="form-control" id="tel" name="space_tel" aria-describedby="emailHelp" placeholder="Enter address" value="0976562513">
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <!-- <div class="form-group">
                                <label for="area">地區</label>
                                <input type="text" class="form-control" id="area" name="space_area" aria-describedby="emailHelp" placeholder="Enter address" value="aa">
                                <small id="emailHelp" class="form-text"></small>
                            </div> -->
                    <?php
                    $sql  = sprintf("SELECT * FROM `taiwan_area_number` WHERE 1");
                    $stmt = $pdo->query($sql); ?>
                    <label for="space_area">地區</label>
                    <select class="custom-select" name="space_area" id="space_area">
                        <option selected value="1">基隆市</option>
                        <?php while ($r = $stmt->fetch()) : ?>
                            <option value="<?= $r['area_sid'] ?>"><?= $r['taiwan_city'] ?></option>
                        <?php endwhile; ?>

                    </select>
                    <div class="form-group">
                        <label for="service">環境氣氛</label>
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
                    <div class="form-group">
                        <label for="address">地址</label>
                        <input type="text" class="form-control" id="address" name="space_address" aria-describedby="emailHelp" placeholder="Enter address" value="aa">
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                    <div class="form-group">
                        <label for="status">直接上架</label>
                        <!-- <input type="text" class="form-control" id="status" name="space_status" aria-describedby="emailHelp" placeholder="Enter address" value="1"> -->
                        <select class="custom-select" name="space_status">
                            <option value="1">上架</option>
                            <option value="0">下架</option>
                        </select>
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                    <div class="form-group">
                        <label for="price">價格</label>
                        <input type="text" class="form-control" id="price" name="space_price" aria-describedby="emailHelp" placeholder="Enter address" value="500">
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                    <div class="form-group">
                        <label for="title_description">詳細內容</label>
                        <input type="text" class="form-control" id="title_description" name="space_title_description" aria-describedby="emailHelp" placeholder="Enter address">
                        <small id="emailHelp" class="form-text"></small>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5 w-100">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    let info_bar = document.querySelector('#info-bar');
    let space_name = document.querySelector('#space_name');
    // let i, s, item;




    // 
    function checkForm() {

        if (space_name.value.length < 2) {
            space_name.style.border = '1px solid red';
            space_name.closest('.form-group').querySelector('small').innerText = '請填寫正確姓名';

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