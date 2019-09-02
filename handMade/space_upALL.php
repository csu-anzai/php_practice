<?php
// require __DIR__ .'/_admin_required.php';
require __DIR__ . '/space__connect_db.php';
print_r($_POST);
$sid = $_POST['space_sid'];
$str = implode("','", $sid );
$sql = "UPDATE `space_list` SET `space_status`=1  WHERE `space_sid` in ('{$str}') ";
//刪除語法　    in　                                     (1,2,3)
$pdo->query($sql);
header('Location:'.$_SERVER['HTTP_REFERER']);
// $arr = array('Hello','World!','I','love','Shanghai!');
// echo implode(" ",$arr);

