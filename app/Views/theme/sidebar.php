<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="img/profile_small.jpg" />
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">David Williams</span>
                        <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="active">
                <a href="<?= site_url('Apps') ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li>
                <a href="<?= site_url('Apps/report') ?>"><i class="fa fa-window-restore"></i> <span class="nav-label">Report</span></a>
            </li>
            <li>
                <a href="<?= site_url('Apps/settings') ?>"><i class="fa fa-cogs"></i> <span class="nav-label">Settings</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?= site_url('Apps/users') ?>">Users</a></li>
                    <li><a href="<?= site_url('Apps/privilage') ?>">Privilage</a></li>
                    <li><a href="<?= site_url('Apps/units') ?>">Units</a></li>
                    <li><a href="<?= site_url('Apps/penjamin') ?>">Penjamin</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>