    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <span class="brand-text font-weight-light">AVMS</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="../images/avatar.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">
                        <?php echo $admin_row["name"]; ?><br><br>
                        <?php echo $admin_row["role"]; ?>
                    </a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="../dashboard/" class="nav-link bg-secondary">
                            <i class="nav-icon fas fa-tachometer-alt"></i>&nbsp;
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a href="../candidate/" class="nav-link bg-primary">
                            <i class="nav-icon fas fa-users"></i>&nbsp;
                            <p>Candidates</p>
                        </a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a href="../election/" class="nav-link bg-info">
                        <i class="fas fa-poll"></i>&nbsp;
                            <p>Elections</p>
                        </a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a href="../voters/" class="nav-link bg-warning">
                        <i class="nav-icon fas fa-users"></i>&nbsp;
                            <p>Voters</p>
                        </a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a href="../result/" class="nav-link bg-success">
                        <i class="fas fa-table"></i>&nbsp;
                            <p>Election Results</p>
                        </a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a href="../admin/" class="nav-link bg-maroon">
                            <i class="nav-icon fas fa-users"></i>&nbsp;
                            <p>Administrators</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>