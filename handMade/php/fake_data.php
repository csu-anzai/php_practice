<?php
exit;
die('__');//結束前顯示字串

require __DIR__ . '/__connect_db.php';

for ($i = 0; $i <= 100; $i++) {
    $pdo->query("INSERT INTO `my_db` (`name`, `email`, `mobile`, `birthday`, `address`, `creat_at`) 
    VALUES('小明{$i}','z27089433@gmail.com','0953241983','1991-02-02','台北','2019-08-20 12:00:00')");
}
