<?php
require_once 'php/db.php';
require_once 'php/functions.php';
$article = get_article($_GET['i']);
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <meta name="description" content="瀚文的部落格">
    <meta name="author" content="劉瀚文">
    <title><?php echo $article['title']; ?></title>
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
                <div class="col-12  justify-content-center ">
                    <h1><?= $article['title']; ?></h1>
                    <hr>
                    <p><?= $article['content']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php  include_once 'footer.php'?>
</body>

</html>