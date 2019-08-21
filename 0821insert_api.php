<?php
$page_title = '新增料夾';
session_start();
require __DIR__ . '/__contect.php';
if (empty($_POST['name'])) {
    header('location:0821insert.php?wrong="輸入錯誤"');
}
$sql = "INSERT INTO `address_book`( `name`, `email`, `mobile`, `birthday`, `address`, `created_at`) 
VALUES ( ?,? ,?,?,?,now())";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $_POST['name'],
    $_POST['email'],
    $_POST['mobile'],
    $_POST['birthday'],
    $_POST['address'],
]);
?>
<?php include __DIR__ . '/__0819header.php'; ?>
<?php include __DIR__ . '/__0819nav.php'; ?>
<div class="container">
    <?= "恭喜新增" . $stmt->rowCount(); ?>
</div>
<?php include __DIR__ . '/__0819footer.php'; ?>