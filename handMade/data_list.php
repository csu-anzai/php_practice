<?php

require_once __DIR__ . '/php/__connect_db.php';
$page_name = 'data_list';
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$t_sql = "SELECT COUNT(1) FROM `space_list`";
$t_stmt = $pdo->query($t_sql);
$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0];
$per_page = 5;
$totalPages = ceil($totalRows / $per_page) ? ceil($totalRows / $per_page) : 1;
if ($page < 1) {
    header('Location:data_list.php');
    exit;
} 

if ($page > $totalPages) {
    header('Location:data_list.php?page='.$totalPages);
    exit;
}
// $sql = ""
$sql  =  sprintf("SELECT*FROM`space_list` ORDER BY `space_sid` ASC LIMIT %s,%s", ($page - 1) * $per_page, $per_page);
$stmt = $pdo->query($sql);
// $rows = $stmt->fetch();
// print_r($rows);
?>

<?php include __DIR__ . '/__html_head.php'; ?>
<?php include __DIR__ . '/__navbar.php'; ?>
<div class="page-content-wrapper">
    <!--  -->
    <div class="container-fluid">
        <nav aria-label="Page navigation example">
            <ul class="pagination  mt-3">

                <li class="page-item">
                    <a class="page-link" href="<?= "?page=" . ($page - 1) ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <?php
                if ($totalPages < 5) {
                    $p_start = 1;
                    $p_end = $totalPages;
                } else if ($page - 2 < 1) {
                    $p_start = 1;
                    $p_end = 5;
                } else if ($page + 2 > $totalPages) {
                    $p_start = $totalPages - 4;
                    $p_end = $totalPages;
                } else {
                    $p_start = $page - 2;
                    $p_end = $page + 2;
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
                        <th scope="col"><i class="fas fa-trash-alt"></i></th>
                        <th scope="col">#</th>
                        <th scope="col">空間名稱</th>
                        <th scope="col">LOGO路徑</th>
                        <th scope="col">環境介紹</th>
                        <th scope="col">圖片路徑</th>
                        <th scope="col">提供時間</th>
                        <th scope="col">人數</th>
                        <th scope="col">電話</th>
                        <th scope="col">地區</th>
                        <th scope="col">地址</th>
                        <!-- <th scope="col">上架狀態</th> -->
                        <th scope="col"><i class="fas fa-edit"></i></th>
                    </tr>
                </thead>
                <tbody>

                    <?php while ($r = $stmt->fetch()) : ?>
                        <tr>
                            <td>
                                <a href="javascript:delete_one(<?= $r['space_sid'] ?>)">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                            <td><?= htmlentities($r['space_sid']) ?></td>
                            <td><?= htmlentities($r['space_name']) ?></td>
                            <td><?= htmlentities($r['space_logo_path']) ?></td>
                            <td><?= htmlentities($r['space_description']) ?></td>
                            <td><?= htmlentities($r['space_image_path']) ?></td>
                            <td><?= htmlentities($r['space_time']) ?></td>
                            <td><?= htmlentities($r['space_max_people']) ?></td>
                            <td><?= htmlentities($r['space_tel']) ?></td>
                            <td><?= htmlentities($r['space_area']) ?></td>
                            <td><?= htmlentities($r['space_address']) ?></td>
                            <!-- <td><?php $status = $r['space_status'];
                                            echo $status == 1 ? "上架中" : "下架中"; ?></td> -->
                            <td>
                                <a href="edit.php?space_sid=<?= $r['space_sid'] ?>">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--  -->
</div>
<script>
    function delete_one(sid) {
        if (confirm(`要刪除第${sid}筆資料嗎？`)) {
            location.href = 'php/delete.php?space_sid=' + sid;
        }
    }
</script>
<?php include __DIR__ . '/__footer.php'; ?>