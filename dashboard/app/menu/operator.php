<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <?php
        $current_page = isset($_GET['page']) ? $_GET['page'] : '';

        $pages = array('dashboard', 'data-pegawai', 'data-galeri', 'data-contact', 'data-berita');

        function isActivePage($currentPage, $page)
        {
            return $currentPage === $page ? 'active' : '';
        }
        ?>

        <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link <?= isActivePage($current_page, 'dashboard'); ?>">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Dasboard
                    <span class="right badge badge-danger">New</span>
                </p>
            </a>
        </li>
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Data
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="index.php?page=data-pegawai" class="nav-link <?= isActivePage($current_page, 'data-pegawai'); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Pegawai</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data-galeri" class="nav-link <?= isActivePage($current_page, 'data-galeri'); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Galeri</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data-berita" class="nav-link <?= isActivePage($current_page, 'data-berita'); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Berita</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data-contact" class="nav-link <?= isActivePage($current_page, 'data-contact'); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Contact Us</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="logout.php" class="nav-link text-red">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>
    </ul>
</nav>