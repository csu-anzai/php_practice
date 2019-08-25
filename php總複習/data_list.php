<?php
require_once __DIR__ . '/php/__connect_db.php';

$page_name = 'data_list';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$t_sql = "SELECT COUNT(1) FROM `address_book`";

$t_stmt = $pdo->query($t_sql);

$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0];

$per_page = 10;

$totalPages = ceil($totalRows / $per_page);


// $sql = ""
$sql  =  sprintf("SELECT*FROM`address_book` ORDER BY `sid` ASC LIMIT %s,%s", ($page-1)*$per_page,$per_page);
$stmt = $pdo->query($sql);



// $rows = $stmt->fetch();

// print_r($rows);
?>
<?php include_once __DIR__ . '/__html_head.php' ?>
<?php include_once __DIR__ . '/__navbar.php' ?>
<div class="container">
    <div style="margin-top: 2rem;">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">姓名</th>
                    <th scope="col">電子郵箱</th>
                    <th scope="col">手機</th>
                    <th scope="col">生日</th>
                    <th scope="col">地址</th>
                </tr>
            </thead>
            <tbody>

                <?php while ($r = $stmt->fetch()) : ?>
                <tr>
                    <td><?= $r['sid'] ?></td>
                    <td><?= $r['name'] ?></td>
                    <td><?= $r['email'] ?></td>
                    <td><?= $r['mobile'] ?></td>
                    <td><?= $r['birthday'] ?></td>
                    <td><?= $r['address'] ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

</div> <?php include_once __DIR__ . '/__footer.php' ?>