<?php
$page_title = '新增料夾';
session_start();
require __DIR__ . '/__contect.php';
$result = [
    'success' => false,
    'code' => 404,
    'info' => '欄位不足',
    'post' => $_POST,
];

if (empty($_POST['email']) or empty($_POST['password'])) {
    // header('location:0821insert.php?wrong="輸入錯誤"');
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}
$sql = "SELECT `id`,`email`,`nickname` FROM `members` WHERE `email`=? AND `password`=SHA(?)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $_POST['email'],
    $_POST['password'],
]);
$row =  $stmt->fetch();
if (! empty($row)) {
    $_SESSION['loginUser'] = $row;

    $result['success'] = true;
    $result['code'] = 200;
    $result['info'] = '成功';
} else {
    $result['code'] = 420;
    $result['info'] = '失敗';
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);