<?php

// require __DIR__. '/_admin_required.php';
require __DIR__ . '/space__connect_db.php';
// 照片處理
$upload_dir = __DIR__ . '/space_uploads/';

$allowed_types = [
    'image/png',
    'image/jpeg',
];


$exts = [
    'image/png' => '.png',
    'image/jpeg' => '.jpg',
];
// $pic_array=[];
// $new_filename_space = sha1(uniqid() . $_FILES['space_image_path']['name']);
// $new_ext_space = $exts[$_FILES['space_image_path']['type']];
// move_uploaded_file($_FILES['space_image_path']['tmp_name'], $upload_dir . $new_filename_space . $new_ext_space);
if (!empty($_FILES['space_logo_path']) && !empty($_FILES['space_image_path'])) {
    $new_filename = sha1(uniqid() . $_FILES['space_logo_path']['name']);
    $new_ext = $exts[$_FILES['space_logo_path']['type']];
    move_uploaded_file($_FILES['space_logo_path']['tmp_name'], $upload_dir . $new_filename . $new_ext);

    foreach ($_FILES['space_image_path']['name'] as $k => $v) {
        $new_filename_space = sha1(uniqid().$_FILES['space_image_path']['name'][$k]);
        $new_ext_space = $exts[$_FILES['space_image_path']['type'][$k]];
        move_uploaded_file($_FILES['space_image_path']['tmp_name'][$k], $upload_dir . $new_filename_space . $new_ext_space);
        $pic_array[] = $new_filename_space . $new_ext_space;
    }
        // foreach ($_FILES['space_image_path']['name'] as $k => $v) {
        //     $new_filename_space = sha1(uniqid() . $v);
        //     $new_ext_space = $exts[$_FILES['space_image_path']['type'][$k]];
        //     move_uploaded_file($_FILES['space_image_path']['tmp_name'][$k], $upload_dir . $new_filename_space . $new_ext_space);
        //     $pic_array[] = $new_filename_space . $new_ext_space;
        // }
        
}
$array_pic = json_encode($pic_array, JSON_UNESCAPED_UNICODE);

// 
$result = [
    'success' => false,
    'code' => 400,
    'info' => '資料欄位不足',
    'post' => $_POST,
    'a' => $_FILES['space_image_path'],
];


# 如果沒有輸入必要欄位
if (empty($_POST['space_name']) or empty($_POST['space_sid'])) {
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}
// TODO: 檢查必填欄位, 欄位值的格式
// \[value\-\d\]
//$sql = "INSERT INTO `space_list`(`sid`,`space_name`,`logo_path`,`space_description`,`image_path`,`space_time`,`max_people`,`tel`,`service`,`area`,`address`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

$server = !empty($_POST['space_service']) ? json_encode($_POST['space_service'], JSON_UNESCAPED_UNICODE) : "[]";
//場地CHECKBOX用

$sql = "UPDATE `space_list` SET 
`space_name`=?,
`space_logo_path`=?,
`space_description`=?,
`space_image_path`=?,
`space_time`=?,
`space_max_people`=?,
`space_tel`=?,
`space_service`=?,
`space_area`=?,
`space_address`=?,
`space_status`=?,
`space_price`=?,
`space_title_description`=?,
`space_creat_time`= NOW()
-- `user_id`=?
WHERE `space_sid`=?";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $_POST['space_name'],
    $new_filename . $new_ext,
    $_POST['space_description'],
    $array_pic,
    $_POST['space_time'],
    $_POST['space_max_people'],
    $_POST['space_tel'],
    $server,
    $_POST['space_area'],
    $_POST['space_address'],
    $_POST['space_status'],
    $_POST['space_price'],
    $_POST['space_title_description'],
    $_POST['space_sid'],
]);
// print_R($stmt);

if ($stmt->rowCount() == 1) {
    $result['success'] = true;
    $result['code'] = 200;
    $result['info'] = '修改成功';
    $result['check'] = $stmt;
} else {
    $result['code'] = 420;
    $result['info'] = '資料沒有修改';
    $result['error'] = $stmt;
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);
