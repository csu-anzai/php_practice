<?php

require_once __DIR__ . '/space__connect_db.php';
$page_name = 'space_list';
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$t_sql = "SELECT COUNT(1) FROM `space_list`";
$t_stmt = $pdo->query($t_sql);
$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0];
$per_page = 4;
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
$sql  =  sprintf("SELECT * FROM `space_list` JOIN `taiwan_area_number`  ON `space_list`.`space_area` = `taiwan_area_number`.`area_sid`  WHERE  `space_list`.`space_status`=1   ORDER BY `space_sid` ASC LIMIT %s,%s", ($page - 1) * $per_page, $per_page);
$stmt = $pdo->query($sql);
// $rows = $stmt->fetch();
// print_r($rows);
?>
<?php include __DIR__ . '/space__html_head.php'; ?>

<?php include __DIR__ . '/space__side.php'; ?>
<?php include __DIR__ . '/space_nav.php'; ?>
<style>
    .displayFlex {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top: 10px;
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
        font-size: 8px;
        color: #CF8D3C;
    }

    .textcenter {
        text-align: center;
    }

    .cardshadows {
        box-shadow: 0px 0px 80px #000000;
        transition: 0.5s
    }

    .cardshadows:hover {
        transform: scale(1.1);
        z-index: 1;
    }

    .textshadows {
        text-shadow: 0px 0px 5px #461922;

    }

    .positionbottom {
        position: absolute;
        bottom: 0;
        left: 25%;

    }

    #logoImg {
        border-radius: 50%;
        width: 80px !important;
        height: 80px;
        position: absolute;
        left: 88%;
        top: 68%;
        transform: translate(-50%);
        object-fit: cover;
        z-index: 2;
        box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.7);
    }
</style>
<div>
    <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse justify-content-between align-items-center" id="navbarSupportedContent">
            <nav>
                <ul class="navbar-nav">
                    <li class="nav-item <?= $page_name == '' ? 'active' : '' ?> " style="margin:10px;">
                        <button id='delAll' type="submit" class="btn btn-outline-warning" style="width:100px;" onclick="return confirm('確定刪除嗎？')">批量刪除</button>
                    </li>
                    <li class="nav-item <?= $page_name == '' ? 'active' : '' ?> " style="margin:10px;">
                        <button id='upAll' type="submit" form="my-form" class="btn btn-outline-warning" style="width:100px;" onclick="return confirm('確定上架嗎？')">批量上架</button>
                    </li>
                    <li class="nav-item <?= $page_name == '' ? 'active' : '' ?> " style="margin:10px 0 10px 10px; ">
                        <button id='downAll' type="submit" form="my-form" class="btn btn-outline-warning" style="width:100px;" onclick="return confirm('確定下架嗎？')">批量下架</button>
                    </li>
                </ul>
            </nav>

            <div class="row">
                <div class="col">
                    <ul class="pagination  mt-3 justify-content-center">
                        <li class="page-item">
                            <a class="page-link" style="color: #15141A;"  href="<?= "?page=" . ($page - 1) ?> aria-label="Previous">
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
                            <li class="page-item   <?= $i == $page ? 'active' : '' ?>"><a class="page-link "  style="color: #15141A;" href="<?= "?page={$i}" ?>"><?= "{$i}" ?></a></li>
                        <?php endfor; ?>

                        <li class="page-item">
                            <a class="page-link"  style="color: #15141A;"  href="<?= "?page=" . ($page + 1) ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="請輸入商品編號" aria-label="Search">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

</div>

<form method="post" id="my-form" enctype="application/x-www-form-urlencoded">
    <div class="row">
        <div class="col d-flex flex-wrap     justify-content-center ">
            <?php while ($r = $stmt->fetch()) : ?>
                <?php $v = json_decode($r['space_image_path']);
                    $i = 0;
                    ?>
                <div class="card m-5  cardshadows" style="width: 28rem; background:#1B1B27;">
                    <div class="d-flex justify-content-between " style="padding:20px;  box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.7);">
                        <label class="card-text fontsize" style="color:#FFF">產品編號:<?= htmlentities($r['space_sid']); ?></label>
                        <div style="margin-top:-5px;">
                            <label class="fontsize" style="" 　for="space_sid">批量勾選</label>
                            <input style="height:10px;" type="checkbox" name="space_sid[]" id="space_sid" value="<?= $r['space_sid'] ?>">
                        </div>
                    </div>
                    <div class="card-body">
                        <div style="position:relative;">
                            <div class="m-3" style="height:200px; overflow:hidden;;">
                                <img src="space_uploads/<?= $v[0] ?>" class="d-block w-100" max-height="800px">
                            </div>
                            <img id="logoImg" src="space_uploads/<?= htmlentities($r['space_logo_path']); ?>" class="d-block w-100" alt="..." max-height="50px">
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="card" style="background:#1B1B27; box-shadow: 0px 0px 30px #000000">
                                <div class="card-header" id="headingOne" style="padding:0px;text-align: center;">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" style="color:#ccc;" type="button" data-toggle="collapse" data-target="#collapse<?= $r['space_sid'] ?>" aria-expanded="false" aria-controls="collapse<?= $r['space_sid'] ?>">
                                        <?= htmlentities($r['space_name']); ?>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse<?= $r['space_sid'] ?>" class="collapse show" aria-labelledby="heading<?= $r['space_sid'] ?>" data-parent="#accordionExample">
                                    <div class="card-body" style="background:#1B1B27;box-shadow: 0px 0px 20px #000000;">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <span class="marginAuto" style="color:#fff;font-size:12px;">標題</span>
                                                <p class="card-text  fontsize1"><?= htmlentities($r['space_title_description']) ?></p>
                                            </div>
                                            <div class="col-lg-6 ">
                                                <span class="marginAuto" style="color:#fff;font-size:12px;">提供日期</span>
                                                <p class="card-text  fontsize1"><?= htmlentities($r['space_time']) ?></p>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6">
                                                <span class="marginAuto" style="color:#fff;font-size:12px;">最大人數</span>
                                                <p class="card-text  fontsize "><?= htmlentities($r['space_max_people']) ?></p>
                                            </div>
                                            <div class="col-lg-6 ">
                                                <span class="marginAuto" style="color:#fff;font-size:12px;">電話</span>
                                                <p class="card-text  fontsize"> <?= htmlentities($r['space_tel']) ?></p>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <span style="color:#fff;font-size:12px;">地區</span>
                                                <p class="card-text  fontsize1"> <?= htmlentities($r['taiwan_city']) ?></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <?php $space_service = json_decode($r['space_service']); ?>
                                                <span style="color:#fff;font-size:12px;">環境風格</span>
                                                <p class="card-text  fontsize1"><?php foreach ($space_service  as $a) {
                                                                                        switch ($a) {
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
                                                                                    }  ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <span class="marginAuto" style="color:#fff;font-size:12px;">上架狀態</span>
                                                <p class="card-text  fontsize "><?php $status = $r['space_status'];
                                                                                    echo $status == 1 ? "上架中" : "下架中"; ?></p>
                                            </div>
                                            <div class="col-lg-6 ">
                                                <span class="marginAuto" style="color:#fff;font-size:12px;">更新時間</span>
                                                <p class="card-text  fontsize"> <?= htmlentities($r['space_creat_time']) ?></p>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span class="marginAuto" style="color:#fff;font-size:12px;">詳細介紹</span>
                                                <p class="card-text  fontsize"> <?= htmlentities($r['space_description']) ?></p>



                                            </div>
                                        </div>
                                        <div class="card-body d-flex justify-content-around ">
                                            <a class="btn btn-warning fontsize1" href="javascript:delete_one(<?= $r['space_sid'] ?>)">
                                                刪除 <i class="fas fa-trash-alt fontsize1"></i>
                                            </a>
                                            <a class="btn btn-warning fontsize1" href="space_edit.php?space_sid=<?= $r['space_sid'] ?>">
                                                編輯 <i class="fas fa-edit fontsize1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endwhile; ?>
        </div>
    </div>
</form>
<script>
    function delete_one(sid) {
        if (confirm(`要刪除第${sid}筆資料嗎？`)) {
            location.href = 'space_delete.php?space_sid=' + sid;
        }
    }

    var form_submit = document.getElementById('my-form');
    var go = document.getElementById('delAll');
    go.addEventListener('click', () => {
        form_submit.action = 'space_deleteALL.php';
        form_submit.submit();
    })
    var goUp = document.getElementById('upAll');
    goUp.addEventListener('click', () => {
        form_submit.action = 'space_upALL.php';
        form_submit.submit();
    })
    var godown = document.getElementById('downAll');
    godown.addEventListener('click', () => {
        form_submit.action = 'space_downALL.php';
        form_submit.submit();
    })
</script>
<?php include __DIR__ . '/space__footer.php'; ?>