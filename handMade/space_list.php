<?php

require_once __DIR__ . '/php/space__connect_db.php';
$page_name = 'space_list';
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$t_sql = "SELECT COUNT(1) FROM `space_list`";
$t_stmt = $pdo->query($t_sql);
$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0];
$per_page = 2;
$totalPages = ceil($totalRows / $per_page) ? ceil($totalRows / $per_page) : 1;
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
<style>
    .displayFlex {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top:10px;
        position: relative;
    }

    .card-margin {
        margin: 5px;
    }

    .marginAuto {
        text-align: center;
    }

    .fontsize {
        font-size: 8px;
        color: sandybrown;
    }

    .fontsize1 {
        font-size: 12px;
        color: #CF8D3C;
    }

    .textcenter {
        text-align: center;
    }

    .cardshadows {
        box-shadow: 0px 0px 80px #000000;
        transition: 0.5s
    }
    .cardshadows:hover{
        transform: scale(1.1);
        z-index: 1;
    }

    .textshadows {
        text-shadow: 0px 0px 5px #461922;
       
    }
    .positionbottom{
        position: absolute;
        bottom: 0;
        left: 25%;
        
    }
</style>
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
                        <li class="nav-item <?= $page_name == 'data_list_page' ? 'active' : '' ?> ">
                            <a class="nav-link" href="data_list_page.php"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </nav>
</div>

<div class="row">
    <div class="col d-flex flex-wrap     justify-content-center ">
        <?php while ($r = $stmt->fetch()) : ?>
            <?php $v = json_decode($r['space_image_path']);
                $i = 0;
                ?>
            <div class="card m-5  cardshadows" style="width: 28rem; background:#1B1B27;">
                <div class="card-body">
                    <div style="height:250px; overflow:hidden;">
                        <h3 style="color:#C2301F;">LOGO</h3>
                        <div   style="position: relative;">
                            <img  id="logoImg" src="php/uploads/<?= htmlentities($r['space_logo_path']); ?>" class="d-block w-100" alt="..." max-height="800px">
                        </div>
                    </div>
                    <h3  style="color:#C2301F;">環境圖片</h3>

                    <div class="m-3" style="height:200px; overflow:hidden;">
                        <img src=" php/uploads/<?= $v[0] ?>" class="d-block w-100" max-height="800px">
                    </div>


                    <div>
                        <h5 class="card-title fontsize"  style="color:#C2301F;">空間名稱</h5>
                        <p class="card-text"><?= htmlentities($r['space_name']); ?></p>
                        <p>當日價格：<?= htmlentities($r['space_price']) ?>$</p>
                    </div>
                    <li class="list-group-item"> <span class="fontsize">提供日期 :</span><?= htmlentities($r['space_time']) ?></li>
                    <li class="list-group-item">最大人數 : <?= htmlentities($r['space_max_people']) ?></li>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">電話 : <?= htmlentities($r['space_tel']) ?></li>
                    <li class="list-group-item">地區 : <?= htmlentities($r['taiwan_city']) ?></li>
                    <li class="list-group-item text-truncate" id="space_description">詳細介紹 : <?= htmlentities($r['space_description']) ?></li>

                    <?php
                        $space_service = json_decode($r['space_service']);?>
                    <li class="list-group-item text-truncate" id="space_service">環境風格 : <?php  foreach( $space_service  as $a ){
                        switch($a){
                            case 1:
                            $a = '溫馨 ';
                            break;
                            case 2:
                            $a = '高雅 ';
                            break;
                            case 3:
                            $a = '古典 ';
                            break;
                            case 4:
                            $a = '時尚 ';
                            break;
                        }
                        echo $a;
                        }  ?></li>
                    <li class="list-group-item">上架狀態 : <?php $status = $r['space_status'];
                                                            echo $status == 1 ? "上架中" : "下架中"; ?></li>
                    <li class="list-group-item">上架時間 : <?= htmlentities($r['space_creat_time']) ?></li>
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
<div class="row">
    <div class="col">
        <ul class="pagination  mt-3 justify-content-center">
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