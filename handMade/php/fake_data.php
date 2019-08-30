<?php
die;

require __DIR__ . '/space__connect_db.php';

for ($i = 0; $i <= 500; $i++) {
    $pdo->query("INSERT INTO `space_list`(
        `space_name`,
        `space_logo_path`,
        `space_description`,
        `space_image_path`, 
        `space_time`,
        `space_max_people`,
        `space_tel`,
        `space_service`,
        `space_area`,
        `space_address`,
        `space_status`,
        `space_price`,
        `space_title_description`,
        `space_creat_time`)
        VALUES('安安','DDDDD','TRE','IMG','2019-07-08','50','0976562513','1','台北市','大安區通化街','1','500','ASDSAD',NOW())");
}
