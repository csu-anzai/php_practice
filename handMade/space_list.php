<?php

require_once __DIR__ . '/php/space__connect_db.php';
$page_name = 'space_list';
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$t_sql = "SELECT COUNT(1) FROM `space_list`";
$t_stmt = $pdo->query($t_sql);
$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0];
$per_page = 3;
$totalPages = ceil($totalRows / $per_page) ? $totalRows / $per_page : 1;
if ($page < 1) {
    header('Location:space_list.php');
    exit;
}

if ($page > $totalPages) {
    header('Location:space_list.php?page=' . $totalPages);
    exit;
}
// $sql = ""
$sql  =  sprintf("SELECT * FROM `space_list` JOIN `taiwan_area_number` ON `space_list`.`space_area` = `taiwan_area_number`.`area_sid` ORDER BY `space_sid` ASC LIMIT %s,%s", ($page - 1) * $per_page, $per_page);
$stmt = $pdo->query($sql);
// $rows = $stmt->fetch();
// print_r($rows);
?>
<?php include __DIR__ . '/space__html_head.php'; ?>
<?php include __DIR__ . '/space__side.php'; ?>
<div>
    <nav aria-label="Page navigation example">
        <nav class="navbar navbar-expand-lg">
            <h3>空間管理介面</h3>
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item <?= $page_name == 'appliance_list_page' ? 'active' : '' ?> ">
                            <a class="nav-link" href="space_list.php">全部商品</a>
                        </li>

                        <li class="nav-item <?= $page_name == 'data_list_fetchAll' ? 'active' : '' ?> ">
                            <a class="nav-link" href=".php">上架中</a>
                        </li>

                        <li class="nav-item <?= $page_name == 'data_list_page' ? 'active' : '' ?> ">
                            <a class="nav-link" href="data_list_page.php">下架中</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
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
</div>

<div class="row">
    <div class="col d-flex flex-wrap     justify-content-center">
        <?php while ($r = $stmt->fetch()) : ?>
            <?php $v = json_decode($r['space_image_path']);
                $i = 0;
                ?>
            <div class="card m-5" style="width: 20rem;">
                <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php $i = 0; ?>
                        <?php foreach ($v as $a) : ?>
                            <div class="carousel-item <?= $i == 0 ? "active" : " "; ?>  " data-interval="3000">
                                <img src="php/uploads/<?= $a; ?>" class="d-block w-100" alt="..." max-height="600px">
                            </div>
                            <?php $i = $i + 1; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">空間名稱</h5>
                    <p class="card-text"><?= htmlentities($r['space_name']); ?></p>
                    <li class="list-group-item">提供時間 :<?= htmlentities($r['space_time']) ?></li>
                    <li class="list-group-item">人數 : <?= htmlentities($r['space_max_people']) ?></li>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">電話 : <?= htmlentities($r['space_tel']) ?></li>
                    <li class="list-group-item">地區 : <?= htmlentities($r['taiwan_city']) ?></li>
                    <li class="list-group-item">環境描述 : <?= htmlentities($r['space_description']) ?></li>
                    <li class="list-group-item">上架狀態 : <?php $status = $r['space_status'];
                                                            echo $status == 1 ? "上架中" : "下架中"; ?></li>
                </ul>
                <div class="card-body d-flex justify-content-around">

                    <a href="javascript:delete_one(<?= $r['space_sid'] ?>)">
                        刪除 <i class="fas fa-trash-alt"></i>
                    </a>
                    <a href="space_edit.php?space_sid=<?= $r['space_sid'] ?>">
                        編輯 <i class="fas fa-edit"></i>
                    </a>
                </div>
            </div>
            <?php $i++; ?>
        <?php endwhile; ?>
    </div>
</div>
<script>
    function delete_one(sid) {
        if (confirm(`要刪除第${sid}筆資料嗎？`)) {
            location.href = 'php/space_delete.php?space_sid=' + sid;
        }
    }
</script>
<?php include __DIR__ . '/space__footer.php'; ?>
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
                    <td><?php $status = $r['space_status'];
                            echo $status == 1 ? "上架中" : "下架中"; ?></td>
                    <td>
                        <a href="space_edit.php?space_sid=<?= $r['space_sid'] ?>">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>