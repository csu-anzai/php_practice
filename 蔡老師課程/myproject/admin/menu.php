<?php
basename($_SERVER['PHP_SELF'], ".php");
$current_file = $_SERVER['PHP_SELF'];
// $current_file = basename($current_file , ".php");
// echo $current_file;
switch (basename($_SERVER['PHP_SELF'], ".php")) {
    case 'article_list':
    case 'article_edit':
    case 'article_add':
        $index = 1;
        break;
    case 'work_list':
    case 'work_edit':
    case 'work_add':
        $index = 2;
        break;
    case 'member_list':
    case 'member_edit':
    case 'member_add':
        $index = 3;
        break;
    default:
        $page_index = 0;
        break;
}
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
                                <li class="nav-item" >
                                    <a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item <?php echo ($index == 0) ? 'active' : ''; ?>">
                                    <a class="nav-link" href="./">BACKHOME <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item <?php echo ($index == 1) ? 'active' : ''; ?>">
                                    <a class="nav-link" href="article.php">ARTICLE</a>
                                </li> 
                                <li class="nav-item <?php echo ($index == 2) ? 'active' : ''; ?>">
                                    <a class="nav-link" href="work.php">WORK</a>
                                </li>
                                <li class="nav-item <?php echo ($index == 3) ? 'active' : ''; ?>">
                                    <a class="nav-link" href="members.php">MEMBERS</a>
                                </li>
                                <li class="nav-item <?php echo ($index == 4) ? 'active' : ''; ?>">
                                    <a class="nav-link" href="../php/logout.php">logout</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>