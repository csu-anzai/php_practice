<?php
require __DIR__ . '/__contect.php';

$page_name = 'data_list';

$per_page = 5;

$page =  isset($_GET['page']) ? intval($_GET['page']) : 1;


if ($page < 1) {
    header('Location:0820data_list.php');
    exit;
}


$_sql = sprintf(
    "SELECT * FROM `address_book` ORDER BY `sid` DESC LIMIT %s, %s",
    ($page - 1) * $per_page,
    $per_page
);

$stmt = $pdo->query($_sql); //取得TABLE ASC小到大 DESC大到小

//$stmt2 = $pdo->query("SELECT * FROM `address_book` ORDER BY `sid` ASC"); //取得TABLE第二次

$rows = $stmt->fetch(); //取得TABLE的一個陣列

//$rows2 = $stmt2->fetchAll(); //取得TABLE的所有陣列

//var_dump($rows);

// echo $per_page;

$t_sql = " SELECT COUNT(1) FROM `address_book` WHERE 1";

$stmt3 =  $pdo->query($t_sql);

$totalRows =  $stmt3->fetch(PDO::FETCH_NUM)[0];

$total = ceil($totalRows / $per_page);
if ($page > $total) {
    header('Location:0820data_list.php?page=' . $total);
    exit;
}
// echo $totalRows;

// echo $total;

// $page_name = 'data_list';

?>

<?php include __DIR__ . '/__0819header.php'; ?>
<?php include __DIR__ . '/__0819nav.php'; ?>
<div class="container m-5">
    <nav aria-label="Page navigation example ">
        <ul class="pagination  justify-content-center">
            <li class="page-item"><a class="page-link" href="?page=<?= $page - 1 ?>"><i class="fas fa-arrow-left"></i></a></li>
            <?php
            $p_start = $page - 5;
            $p_end = $page + 5;
            
            for ($i = $p_start; $i < $p_end; $i++) {
                if ($i < 1 or $i > $total) {
                    continue;
                }};
                ?>
            <li class="page-item <?= $i == $page ? 'active'  : '' ?> "><a class="page-link" href="0820data_list.php?page=<?php echo $i ?>"><?= $i ?></a></li>
            <?php } ?>
            <li class="page-item"><a class="page-link" href="?page=<?= $page + 1 ?>"><i class="fas fa-arrow-right"></i></a></li>

        </ul>
    </nav>
</div>
<div class="container">
    <table class="table">
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
            <?php while ($rows = $stmt->fetch()) { ?>
            <tr>
                <td><?= $rows['sid'] ?></td>
                <td><?= $rows['name'] ?></td>
                <td><?= $rows['email'] ?></td>
                <td><?= $rows['mobile'] ?></td>
                <td><?= $rows['birthday'] ?></td>
                <td><?= $rows['address'] ?></td>
            </tr>
            <?php } ?>

            <?php /*
            <?php foreach ($rows2  as $k => $v) : ?>
            <tr>
                <td><?= $k . $v['sid'] ?></td>
                <td><?= $k . $v['name'] ?></td>
                <td><?= $k . $v['email'] ?></td>
                <td><?= $k . $v['mobile'] ?></td>
                <td><?= $k . $v['birthday'] ?></td>
                <td><?= $k . $v['address'] ?></td>
            </tr>
            <?php endforeach; ?>
                */ ?>
        </tbody>
    </table>
</div>

<?php include __DIR__ . '/__0819footer.php'; ?>