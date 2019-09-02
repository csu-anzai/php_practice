<?php
// require __DIR__ . '/__admin_required.php';
require __DIR__ . '/__connect_db.php';
$page_name = 'data_list';
$page_title = '資料列表';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$per_page = 8;

$t_sql = "SELECT COUNT(1) FROM `vendor` ";

$t_stmt = $pdo->query($t_sql);
$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0];

$totalPages = ceil($totalRows / $per_page);

if ($page < 1) {
    header('Location: data_list.php');
    exit;
}
if ($page > $totalPages) {
    header('Location: data_list.php?page=' . $totalPages);
    exit;
}

$sql = sprintf(
    "SELECT * FROM `vendor` ORDER BY `sid` DESC LIMIT %s, %s",
    ($page - 1) * $per_page,
    $per_page
);
$stmt = $pdo->query($sql);

//$rows = $stmt->fetchAll();

?>






<?php
include __DIR__ . '/__html_head_in.php';
include __DIR__ . '/__navbar_in.php';
?>
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



<div class="container">


    <div class="container  displayFlex">
       
            <div class="card card-margin cardshadows" style="width: 14rem;height:25rem;background:#1B1B27;">
                <img src="img/cake2.jpg" class="card-img-top" alt="...">
                <div class="card-body ">
                    <h5 class="card-title marginAuto textshadows" style="color:#C2301F;"><?= htmlentities($r['principal']) ?></h5>

                    <p class="card-text marginAuto fontsize" style="color:#603F5C">編號 <?= $r['sid'] ?></p>




                    <div class="row">
                        <div class="col-lg-6">
                            <p class="card-text marginAuto fontsize1">連絡電話<?= htmlentities($r['contact_phone']) ?></p>
                        </div>
                        <div class="col-lg-6 ">
                            <p class="card-text marginAuto fontsize1">公司名稱<?= htmlentities($r['company']) ?></p>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-lg-12 displayFlex">

                            <p class="card-text marginAuto fontsize">地址<br><?= htmlentities($r['address']) ?></p>
                            <p class="card-text marginAuto fontsize">EMAIL<br><?= htmlentities($r['email']) ?></p>
                            <p class="card-text marginAuto fontsize">銀行戶頭<br><?= htmlentities($r['account_number']) ?></p>


                        </div>
                    </div>





                    <div class="row">
                        <div class="col-lg-6">
                            <p class="card-text marginAuto fontsize1">LINE_ID<br><?= htmlentities($r['line_id']) ?></p>
                        </div>
                        <div class="col-lg-6">
                            <p class="card-text marginAuto fontsize1">註冊日期<br><?= htmlentities($r['created_at']) ?></p>
                        </div>
                    </div>




                    <div class="row positionbottom">
                        <div class="col-lg-6 textcenter">
                            <a href="javascript:delete_one(<?= $r['sid'] ?>)" class="btn btn-warning"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="col-lg-6 textcenter">
                            <!-- <a href="data_edit.php?sid=<?= $r['sid'] ?>" role="button" class="btn btn-primary" > -->
                            <a href="data_edit.php?sid=<?= $r['sid'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div style="margin-top: 2rem; ">
        <nav aria-label="Page navigation example " style="margin:auto">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="?page=<?= $page - 1 ?>">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </li>
                <?php
                $p_start = $page - 5;
                $p_end = $page + 5;
                for ($i = $p_start; $i <= $p_end; $i++) :
                    if ($i < 1 or $i > $totalPages) continue;
                    ?>
                    <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?= $page + 1 ?>">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
            </ul>
        </nav>





















        <!-- 

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col"><i class="fas fa-trash-alt"></i></th>
                    <th scope="col">#</th>
                    <th scope="col">負責人</th>
                    <th scope="col">連絡電話</th>
                    <th scope="col">公司名稱</th>
                    <th scope="col">註冊日期</th>
                    <th scope="col">地址</th>
                    <th scope="col">LINE_ID</th>
                    <th scope="col">戶頭ID</th>
                    <th scope="col">密碼</th>
                    <th scope="col">信箱</th>
                    <th scope="col"><i class="fas fa-edit"></i></th>
                </tr>
            </thead>
            <tbody>
               
                    <tr>
                        <td>
                            <a href="javascript:delete_one(<?= $r['sid'] ?>)"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?= htmlentities($r['password']) ?></td>
                        <td></td>

                        <td>
                        </td>
                    </tr>
                
                   

            </tbody>
        </table>
    </div> -->








        <script>
            function delete_one(sid) {
                if (confirm(`確定要刪除編號為 ${sid} 的資料嗎?`)) {
                    location.href = 'data_delete.php?sid=' + sid;
                }
            }
        </script>
    </div>



    <?php
    include __DIR__ . '/__footer_in.php';
    ?>