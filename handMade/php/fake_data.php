<?php

exit;
require __DIR__ . '/__connect_db.php';

for ($i = 0; $i <= 100; $i++) {
    $pdo->query("INSERT INTO `space_list`(
        `space_name`,
        `logo_path`,
        `space_description`,
        `image_path`, 
        `space_time`,
        `max_people`,
        `tel`,
        `service`,
        `area`,
        `address`,
        `status`,
        `price`,
        `title_description`,
        `space_creat_time`)
        VALUES('安安','DDDDD','TRE','IMG','2019-07-08','50','0976562513','1','台北市','大安區通化街','1','500','ASDSAD',NOW())");
}
