<?php
require_once 'php/db.php';
require_once 'php/functions.php';
$work = get_work($_GET['i']);
$site_title = strip_tags($work['intro']);
$site_title = mb_substr($site_title, 0, 12, "UTF-8") . "...";
?>
<?php include_once 'head.php'; ?>

<body>
    <?php include_once 'menu.php'; ?>
    <div class="main">
        <div class="container">
            <div class="row ">
                <div class="col-12  justify-content-center ">
                    <?php if ($work['image_path']) : ?>
                    <img src="<?= $work['image_path']; ?>" width="100%" alt="">
                    <?php else : ?>
                    <video src="<?= $work['video_path']; ?>" class="card-img-top" alt="..." controls></video>
                    <?php endif; ?>
                    <div class="card-body d-flex  justify-content-around" style="flex-direction: column;">
                        <h5 class="card-title"><?= $work['intro']; ?></h5>
                        <p class="card-text"></p>
                        <a href="work.php" class="btn btn-primary">返回</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'footer.php' ?>
</body>

</html>