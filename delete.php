<?php
require __DIR__ . '/__contect.php';


$sid = isset($_GET['sid'])? intval($_GET['sid']):0;

if(! empty ($sid)){
    $sql = "DELETE FROM `address_book` WHERE `sid`=$sid";
    $pdo->query($sql);
}

header('Location:'.$_SERVER['HTTP_REFERER']);