<?php
// require __DIR__. '/__admin_required.php';
require_once __DIR__ . '/__connect_db.php';

$result = [
    'success' => false,
    'code' => 400,
    'info' => '沒有輸入姓名',
    'post' => $_POST,
];


# 如果沒有輸入必要欄位, 就離開
if (empty($_POST['space_name'])) {
    echo json_encode($result, JSON_UNESCAPED_UNICODE); //編碼成JS字串decode字串轉換回陣列(結果,不要跳脫中文字)
    exit;
}


$sql = "INSERT INTO `space_list`(
 `space_name`,
--   `logo_path`,
--    `space_description`,
--     `image_path`, `space_time`,
--      `max_people`,
--       `tel`,
--        `area`,
--         `address`,
--          `status`, 
--          `user_id`
         ) VALUES (?)";


$stmt = $pdo->prepare($sql);

$stmt->execute([
    $_POST['space_name'],
    // $_POST['logo_path'],
    // $_POST['space_description'],
    // $_POST['image_path'],
    // $_POST['space_time'],
    // $_POST['max_people'],
    // $_POST['tel'],
    // $_POST['area'],
    // $_POST['address'],
    // $_POST['status'],
]);

if ($stmt->rowCount() == 1) {
    $result['success'] = true;
    $result['code'] = 200;
    $result['info'] = '新增成功';
} else {
    $result['code'] = 420;
    $result['info'] = '新增失敗';
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);
