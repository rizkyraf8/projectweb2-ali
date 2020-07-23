<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url() ?>assets/dist/img/person-icon.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata( 'nama' )?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN MENU</li>
            <!-- Optionally, you can add icons to the liks -->
            <!-- li class="active"><a href="#"><i class="fa fa-link"></i> <span>Main Menu</span></a></li> -->
            <li class="treeview">
                <a href="#"><i class="fa fa-edit"></i> <span>Form</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url("presensi/form_presensi")?>"><i class="fa fa-circle-o"></i>Presensi</a></li>
                    <li><a href="<?= base_url("cuti/form_cuti")?>"><i class="fa fa-circle-o"></i>Cuti</a></li>
                    <li><a href="<?= base_url("sakit/form_sakit")?>"><i class="fa fa-circle-o"></i>Sakit</a></li>
                </ul>
            </li>
            <li class="treeview"> <!-- Buka Tag -->
                <a href="#"><i class="fa fa-files-o"></i> <span>Report</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url("presensi/view_presensi")?>"><i class="fa fa-circle-o"></i>View Presensi</a></li>
                    <li><a href="<?= base_url("cuti/view_cuti")?>"><i class="fa fa-circle-o"></i>View Cuti</a></li>
                    <li><a href="<?= base_url("sakit/view_sakit")?>"><i class="fa fa-circle-o"></i>View Sakit</a></li>
                </ul>
            </li> <!--- Tutup tag -->
            <?php 
                if($this->session->userdata('level') == "Administrator") { 
            ?>
            <li class="treeview"> <!-- Buka Tag -->
                <a href="<?php echo base_url("user/data_karyawan");  ?>"><i class="fa fa-user"></i> <span>User Menu</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url("user/listuser")?>"><i class="fa fa-circle-o"></i>List Users</a></li>
                </ul>
            </li> <!--- Tutup tag -->
                <?php } ?>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>