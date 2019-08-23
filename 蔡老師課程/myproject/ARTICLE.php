<?php
require_once 'php/db.php';
require_once 'php/functions.php';
$articleData = get_publish_article();
// print_r($articleData) ;
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <meta name="description" content="瀚文的部落格">
    <meta name="author" content="劉瀚文">
    <title>所有文章</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
</style>

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
                    <div class="card m-3 " style="width: 18rem;">
                        <div class="card-body ">
                            <h5 class="card-title font-weight-bold ">文章標題:<?= $value['title'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-danger font-weight-bold">日期:<?= $value['create_date'] ?></h6>
                            <p class="card-text">分類:<?= $value['category'] ?></p>
                            <p><?= $abstract ?></p>
                            <a href="articleContent.php<?= "?i=" . $value['id'] ?>" class="card-link">讀內容</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php  include_once 'footer.php'?>
</body>

</html>