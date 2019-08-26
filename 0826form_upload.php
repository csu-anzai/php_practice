<?php include __DIR__ . '/__0819header.php' ?>

<?php
$upload_dir = __DIR__ . '/uploads/';

$allowed_types = [
    'image/png',
    'image/jpeg',
];


$exts = [
    'image/png' => '.png',
    'image/jpeg' => '.jpg',
];
if (!empty($_FILES['my_file'])) {
    if (in_array($_FILES['my_file']['type'], $allowed_types)) {
        $new_filename = sha1(uniqid() . $_FILES['my_file']['name']);
        $new_ext = $exts[$_FILES['my_file']['type']];
        move_uploaded_file($_FILES['my_file']['tmp_name'], $upload_dir . $new_filename . $new_ext);
    }
}

// if(!empty($_FILES['my_file'])){ // 有沒有上傳
//     if(in_array($_FILES['my_file']['type'], $allowed_types)) { // 檔案類型是否允許

//         $new_filename = sha1(uniqid(). $_FILES['my_file']['name']);
//         $new_ext = $exts[$_FILES['my_file']['type']];


//         move_uploaded_file($_FILES['my_file']['tmp_name'], $upload_dir. $new_filename. $new_ext);
//     }
// }

// if (!empty($_FILES['my_file'])) { // 有沒有上傳
//     if (in_array($_FILES['my_file']['type'], $allowed_types)) { // 檔案類型是否允許
//         move_uploaded_file($_FILES['my_file']['tmp_name'], $upload_dir . $_FILES['my_file']['name']);
//     }
// }
?>
<div class="container">
    <div>
        <pre>
            <?php
            if (!empty($_FILES))
                print_r($_FILES);
            var_dump($_FILES);
            ?>
        </pre>
    </div>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="my_file">選擇上傳的檔案</label>
            <input type="file" class="form-control-file" id="my_file" name="my_file">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<?php include __DIR__ . '/__0819footer.php' ?>