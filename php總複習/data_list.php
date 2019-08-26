<?php
require_once __DIR__ . '/php/__connect_db.php';

$page_name = 'data_list';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$t_sql = "SELECT COUNT(1) FROM `address_book`";

$t_stmt = $pdo->query($t_sql);

$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0];

$per_page = 5;

$totalPages = ceil($totalRows / $per_page);

if ($page < 1) {
    header('Location:data_list.php');
    exit;
}

if ($page > $totalPages) {
    header('Location:data_list.php?page=' . $totalPages);
    exit;
}

// $sql = ""
$sql  =  sprintf("SELECT*FROM`address_book` ORDER BY `sid` ASC LIMIT %s,%s",($page - 1) * $per_page, $per_page);
$stmt = $pdo->query($sql);



// $rows = $stmt->fetch();

// print_r($rows);
?>
<?php include_once __DIR__ . '/__html_head.php' ?>
<?php include_once __DIR__ . '/__navbar.php' ?>
<div class="container">
    <nav aria-label="Page navigation example">
        <ul class="pagination  mt-3">

            <li class="page-item">
                <a class="page-link" href="<?= "?page=" . ($page - 1) ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>

            <?php
            if ($totalPages<5) { 
                $p_start = 1;
                $p_end = $totalPages;
            }else{
                $p_start = $page -2;
                $p_end = $page + 2;
            }
            if($page-2<1){
                $p_start = 1;
                $p_end = 5;
            }elseif($page+2>$totalPages){
                $p_start = $totalPages-3;
                $p_end = $totalPages;
            }
            for ($i = $p_start; $i <= $p_end; $i++) :
                ?>
            <li class="page-item <?= $i == $page ? 'active' : '' ?>"><a class="page-link " href="<?= "?page={$i}" ?>"><?= "{$i}" ?></a></li>
            <?php endfor; ?>

            <li class="page-item">
                <a class="page-link" href="<?= "?page=" . ($page + 1) ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
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