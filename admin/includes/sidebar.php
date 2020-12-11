    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../dashboard/" class="brand-link">
      <img src="../images/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ebuVote</span>
    </a>


        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="../images/avatar1.png" class="img-circle elevation-2">
                </div>
                <div class="info">
                    <a href="#" class="d-block">
                        <?php echo $admin_row["name"]; ?>
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