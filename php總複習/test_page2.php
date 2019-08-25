<?php include_once __DIR__ . '/__html_head.php' ?>
<?php include_once __DIR__ . '/__navbar.php' ?>

<div class="container">
    <?php

    require_once __DIR__ . '/php/__connect_db.php';

    $stmt = $pdo->query("SELECT*FROM `address_book`");

    // while (
    //     $row = $stmt->fetch()
    // ) { 
    //     echo "{$row['name']}"."<br>";
    // }
    $row = $stmt->fetchALL();

    foreach ($row as  $key => $v) {
        echo $key . $v['name'];
    }
    //PDO::FETCH_NUM;拿索引式陣列
    ?>
</div>


<?php include_once __DIR__ . '/__footer.php' ?>