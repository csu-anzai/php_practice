<?php
require_once 'php/db.php';
require_once 'php/functions.php';

$workData = get_publish_work();
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
                <?php if (!empty($workData)) : ?>
                <?php foreach ($workData  as  $v): ?>
                <div class="col-sm-4  justify-content-center ">
                    <div class="card" style="width: 18rem;">
                        <video src="<?= $v['video_path']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
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