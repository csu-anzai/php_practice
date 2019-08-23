<?php
require_once 'php/db.php';
require_once 'php/functions.php';
$articleData = get_publish_article();
// print_r($articleData) ;
?>
<?php include_once 'head.php'; ?>

<body>
    <?php include_once 'menu.php'; ?>
    <div class="main">
        <div class="container">
            <div class="row ">
                <div class="col-12 d-flex flex-wrap justify-content-center ">
                    <?php if (!empty($articleData)) : ?>
                    <?php foreach ($articleData as $key => $value) : ?>
                    <?php
                            $abstract = strip_tags($value['content']);
                            $abstract = mb_substr($abstract, 0, 100, "UTF-8") . "... MORE";
                            ?>
                    <div class="card m-3" style="width: 18rem;">
                        <div class="card-body  justify-content-between d-flex" style="flex-direction: column;">
                            <h5 class="card-title font-weight-bold ">文章標題:<?= $value['title'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-danger font-weight-bold">日期:<?= $value['create_date'] ?></h6>
                            <p class="card-text">分類:<?= $value['category'] ?></p>
                            <p><?= $abstract ?></p>
                            <div>
                                <a href="articleContent.php<?= "?i=" . $value['id'] ?>" class="card-link">讀內容</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'footer.php' ?>
</body>

</html>