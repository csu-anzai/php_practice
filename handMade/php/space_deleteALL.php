<?php

session_start();

// require __DIR__ .'/_admin_required.php';

require __DIR__ . '/space__connect_db.php';

$sid = isset($_GET['space_sid'])? intval($_GET['space_sid']):0;

if(! empty ($sid)){
    $sql = "DELETE FROM space_list WHERE space_sid IN (' . $sid . );";
    $pdo->query($sql);
}
// $stmt=$pdo->query($sql);
// if($stmt->rowCount()<=0){
//     $result['success'] = true;
//     $result['code'] = 200;
//     $result['info'] = '修改成功';
// } else {
//     $result['code'] = 420;
//     $result['info'] = '資料沒有修改';
// }
header('Location:'.$_SERVER['HTTP_REFERER']);
