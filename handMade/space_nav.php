<nav class="navbar navbar-expand-lg">
    <h3>空間管理介面</h3>
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">

                <li class="nav-item <?= $page_name == 'appliance_list_page' ? 'active' : '' ?> ">
                    <a class="nav-link" href="space_list.php">全部商品</a>
                </li>

                <li class="nav-item <?= $page_name == 'data_list_fetchAll' ? 'active' : '' ?> ">
                    <a class="nav-link" href=".php">上架中</a>
                </li>

                <li class="nav-item <?= $page_name == 'data_list_page' ? 'active' : '' ?> ">
                    <a class="nav-link" href="data_list_page.php">下架中</a>
                </li>
            </ul>
        </div>
    </div>
</nav>