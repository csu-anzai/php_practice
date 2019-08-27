<?php

// require __DIR__. '/_admin_required.php';
require __DIR__. '/__connect_db.php';

$result = [
    'success' => false,
    'code' => 400,
    'info' => '資料欄位不足',
    'post' => $_POST,
];


# 如果沒有輸入必要欄位
if(empty($_POST['space_name']) or empty($_POST['sid'])){
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}

// TODO: 檢查必填欄位, 欄位值的格式
// \[value\-\d\]
//$sql = "INSERT INTO `space_list`(`sid`,`space_name`,`logo_path`,`space_description`,`image_path`,`space_time`,`max_people`,`tel`,`service`,`area`,`address`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";


$sql = "UPDATE `space_list` SET 
`space_name`=?,
`logo_path`=?,
`space_description`=?,
`image_path`=?,
`space_time`=?,
`max_people`=?,
`tel`=?,
`service`=?,
`area`=?,
`address`=?,
`user_id`=?
WHERE `sid`=?";   

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $_POST['space_name'],
    $_POST['logo_path'],
    $_POST['space_description'],
    $_POST['image_path'],
    $_POST['space_time'],
    $_POST['max_people'],
    $_POST['tel'],
    $_POST['service'],
    $_POST['area'],
    $_POST['address'],
    $_POST['user_id'],
    $_POST['sid'],
]);
// print_R($stmt);

if($stmt->rowCount()==1){
    $result['success'] = true;
    $result['code'] = 200;
    $result['info'] = '修改成功';
} else {
    $result['code'] = 420;
    $result['info'] = '資料沒有修改';
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);
