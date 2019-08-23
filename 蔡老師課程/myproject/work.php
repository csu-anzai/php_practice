<?php
require_once 'php/db.php';
require_once 'php/functions.php';
$workData = get_publish_work();
?>
<?php include_once 'head.php'; ?>

<body>
    <?php include_once 'menu.php'; ?>
    <div class="main">
        <div class="container">
            <div class="row ">
                <?php if (!empty($workData)) : ?>
                <?php foreach ($workData  as  $v) : ?>
                <div class="col-md-4  col-sm-12 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <?php if ($v['image_path']) : ?>
                        <img src="<?= $v['image_path']; ?>" width="100%" alt="">
                        <?php else : ?>
                        <video src="<?= $v['video_path']; ?>" class="card-img-top" alt="..." controls></video>
                        <?php endif; ?>
                        <div class="card-body d-flex  justify-content-between" style="flex-direction: column;">
                            <h5 class="card-title"><?= $v['intro']; ?></h5>
                            <p class="card-text"></p>
                            <a href="workContent.php?i=<?php echo $v['id']; ?>" class="btn btn-primary">看更多</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php else : ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php include_once 'footer.php' ?>
</body>

</html>