<style>
    li.active {
        background-color: yellow;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= $page_name == 'data_list' ? 'active' : '' ?>">
                    <a class="nav-link" href="0820data_list.php">清單列表</a>
                </li>
                <li class="nav-item <?= $page_name == 'data_insert' ? 'active' : '' ?>">
                    <a class="nav-link" href="0821insert.php">新增資料</a>
                </li>
                <li class="nav-item <?= $page_name == 'PAGE2' ? 'active' : '' ?>">
                    <a class="nav-link" href="0819testPage2.php">PAGE2</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav">
                <?php if (isset($_SESSION['loginUser'])) : ?>
                <li class="nav-item <?= $page_name == 'login' ? 'active' : '' ?>">
                    <a class="nav-link"><?= $_SESSION['loginUser']['nickname'] ?></a>
                </li>
                <li class="nav-item <?= $page_name == 'login' ? 'active' : '' ?>">
                    <a class="nav-link" href="logout.php">登出</a>
                </li>

                <?php else : ?>
                <li class="nav-item <?= $page_name == 'login' ? 'active' : '' ?>">
                    <a class="nav-link" href="0821login.php">登入</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>

    </div>
</nav>