<?php
// $page_title = '新增料夾';
// session_start();
// require __DIR__ .'/_admin_required.php';
// require __DIR__ . '/__contect.php';
// $result = [
//     'success' => false,
//     'code' => 404,
//     'info' => '欄位不足',
//     'post' => $_POST,
// ];

// if (empty($_POST['name'])) {
//     // header('location:0821insert.php?wrong="輸入錯誤"');
//     echo json_encode($result, JSON_UNESCAPED_UNICODE);
//     exit;
// }
// $sql = "UPDATE `address_book` SET `name`=?,`email`=?,`mobile`=?,`birthday`=?,`address`=? WHERE `sid`=?";

// $stmt = $pdo->prepare($sql);

// $stmt->execute([
//     $_POST['name'],
//     $_POST['email'],
//     $_POST['mobile'],
//     $_POST['birthday'],
//     $_POST['address'],
//     // $_POST['sid'],
// ]);

// if ($stmt->rowCount() == 1) {
//     $result['success'] = true;
//     $result['code'] = 200;
//     $result['info'] = '成功';
// } else {
//     $result['code'] = 420;
//     $result['info'] = '失敗';
// }

// echo json_encode($result, JSON_UNESCAPED_UNICODE);




require __DIR__. '/_admin_required.php';
require __DIR__. '/__contect.php';

$result = [
    'success' => false,
    'code' => 400,
    'info' => '資料欄位不足',
    'post' => $_POST,
];


# 如果沒有輸入必要欄位
if(empty($_POST['name']) or empty($_POST['sid'])){
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}

// TODO: 檢查必填欄位, 欄位值的格式

# \[value\-\d\]

$sql = "UPDATE `address_book` SET 
            `name`=?,
            `email`=?,
            `mobile`=?,
            `birthday`=?,
            `address`=?
            WHERE `sid`=?";

$stmt = $pdo->prepare($sql);

$stmt->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['mobile'],
        $_POST['birthday'],
        $_POST['address'],
        $_POST['sid'],
]);

if($stmt->rowCount()==1){
    $result['success'] = true;
    $result['code'] = 200;
    $result['info'] = '修改成功';
} else {
    $result['code'] = 420;
    $result['info'] = '資料沒有修改';
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);

?>