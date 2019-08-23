<?php
require_once 'php/db.php';
require_once 'php/functions.php';
$article = get_article($_GET['i']);
?>
<?php include_once 'head.php'; ?>

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
    <?php include_once 'footer.php' ?>
</body>

</html>