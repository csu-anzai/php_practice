<?php
require_once 'php/db.php';
require_once 'php/functions.php';
$articleData = get_publish_article();
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
    <div class="indexTop">
        <div class="jumbotron p-3 mb-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="text-center">BLOG</h1>
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse " id="navbarNav">
                                <ul class="navbar-nav w-100 justify-content-between">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="article.php">ARTICLE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="work.php">WORK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.php">ABOUT ME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="register.php">REGISTER</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="container">
            <div class="row ">
                <div class="col-12 d-flex flex-wrap justify-content-center ">
                    <?php if (!empty($articleData)) : ?>
                    <?php foreach ($articleData as $key => $value) : ?>
                        <?php
                            $abstract = strip_tags($value['content']);

                            $abstract = mb_substr($abstract,0,100,"UTF-8")."... MORE";
                        ?>
                    <div class="card m-3 " style="width: 18rem;">
                        <div class="card-body ">
                            <h5 class="card-title font-weight-bold ">文章標題:<?= $value['title'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-danger font-weight-bold">日期:<?= $value['create_date'] ?></h6>
                            <p class="card-text">分類:<?= $value['category'] ?></p>
                            <p><?=  $abstract ?></p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col text-center font-weight-bold">
                    <p> &copy;<?= date("Y"); ?>瀚文版權所有</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>