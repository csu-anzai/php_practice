<?php
$file_path = $_SERVER['PHP_SELF'];
echo basename($file_path,".php");
?>

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
                                <li class="nav-item">
                                    <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
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