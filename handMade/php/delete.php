<?php

session_start();

// require __DIR__ .'/_admin_required.php';

require __DIR__ . '/__connect_db.php';

$sid = isset($_GET['space_sid'])? intval($_GET['space_sid']):0;

if(! empty ($sid)){
    $sql = "DELETE FROM `space_list` WHERE `space_sid`=$sid";
    $pdo->query($sql);
}

header('Location:'.$_SERVER['HTTP_REFERER']);
