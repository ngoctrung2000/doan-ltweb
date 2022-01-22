<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item sidebar-category">
            <p>Navigation</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../../index.php">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Dashboard</span>
                <div class="badge badge-info badge-pill">2</div>
            </a>
        </li>
        <li class="nav-item sidebar-category">
            <p>Components</p>
            <span></span>
        </li>

        <!-- <li class="nav-item">
            <a class="nav-link" href="../../dangnhap/login.php">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Login</span>
            </a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" href="index.php?controller=dangkycontroller&action=index">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Register</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?controller=usercontroller&action=index">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Manager User</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?controller=filmcontroller&action=index">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Manager Film</span>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="../tables/basic-table.php">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Tables</span>
            </a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item">
                        <a id="changeUserHome" class="nav-link" href="../../../user/index.php">
                            User Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="changeUserHome" class="nav-link" href="../../../user/blog.php">
                            Our blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="changeUserHome" class="nav-link" href="../../../user/categories.php">
                            category
                        </a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/spica/template/">
                <button class="btn bg-danger btn-sm menu-title">Upgrade to pro</button>
            </a>
        </li>
    </ul>
</nav>