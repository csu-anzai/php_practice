<nav class="navbar navbar-expand-lg">
    <h3 style="color:#FFC107; padding: 0 50px 0 0;">器具管理介面</h3>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">

            <li class="nav-item <?= $page_name == 'appliance_list_page' ? 'active' : '' ?> ">
                <a class="nav-link" href="space_list.php"><button type="button" class="btn btn-outline-warning" style="width:100px;">全部商品</button></a>

            </li>

            <li class="nav-item <?= $page_name == 'appliance_list_page_onsale' ? 'active' : '' ?> ">
                <a class="nav-link" href="space_list_status1.php"><button type="button" class="btn btn-outline-warning" style="width:100px;">上架中</button></a>
            </li>

            <li class="nav-item <?= $page_name == 'appliance_list_page_offsale' ? 'active' : '' ?> ">
                <a class="nav-link" href="space_list_status0.php"><button type="button" class="btn btn-outline-warning" style="width:100px;">下架中</button></a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item <?= $page_name == 'appliance_list_insert' ? 'active' : '' ?> ">
                <a class="nav-link" href="space_insert.php"><button type="button" class="btn btn-outline-warning" style="width:100px;">新增商品</button></a>
            </li>
        </ul>
    </div>
</nav>
