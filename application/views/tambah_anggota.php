<!-- application/views/anggota/tambah.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tambah Anggota - KAS HIMAIF UMUSLIM</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
</head>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('index.php/dashboard'); ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-money-bill-alt"></i>
            </div>
            <div class="sidebar-brand-text mx-3">CELENG <br> HIMAIF</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('index.php/dashboard'); ?>">
                <i class="fas fa-fw fa-home"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Manajemen Anggota
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-user-circle"></i>
                <span>Manajemen Anggota</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?php echo base_url('index.php/anggota/tambah'); ?>">Tambah Anggota</a>
                    <a class="collapse-item" href="<?php echo base_url('index.php/anggota/daftar'); ?>">Daftar Anggota</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Manajemen Keuangan
        </div>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-folder"></i>
                <span>Manajemen Keuangan</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?php echo base_url('index.php/kas/setor'); ?>">Setor Kas</a>
                    <a class="collapse-item" href="<?php echo base_url('index.php/kas/daftar'); ?>">Daftar Kas</a>
                    <a class="collapse-item" href="<?php echo base_url('index.php/kas/nunda'); ?>">Nunda Kas</a>
                    <a class="collapse-item" href="<?php echo base_url('index.php/kas/catat_out'); ?>">Catat Pengeluaran</a>
                    <a class="collapse-item" href="<?php echo base_url('index.php/kas/daftar_out'); ?>">Daftar Pengeluaran</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <?php
                    $pass = $this->session->userdata('password');
                    $sss = $this->db->get_where('admin', array('password' => $pass));
                    $rrr = $sss->row_array();
                    if ($sss->num_rows() > 0) {
                    ?>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $rrr['nama']; ?></span>
                            <img class="img-profile rounded-circle" src="<?php echo base_url('img/') . $rrr['foto']; ?>" alt="profile">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?php echo base_url('index.php/profile'); ?>">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Riwayat
                            </a>
                            <a class="dropdown-item" href="<?php echo base_url('index.php/pengaturan/') . $rrr['id']; ?>">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Pengaturan
                            </a>
                            <a class="dropdown-item" href="<?php echo base_url('index.php/change/') . $rrr['id']; ?>">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Ganti Password
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                    <?php } ?>
                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Tambah Anggota</h1>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Card Body -->
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Anggota</h6>
                            </div>
                            <div class="card-body">
                                <?php if (isset($message)) { ?>
                                    <div class="alert alert-primary" role="alert">
                                        <p><center><?php echo $message; ?></center></p>
                                    </div>
                                <?php } ?>

                                <form action="<?php echo base_url('index.php/anggota/tambah'); ?>" method="post">
                                    <div class="form-group">
                                        <label>Nama Anggota:</label>
                                        <input class="form-control" type="text" placeholder="Nama Anggota..." name="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat:</label>
                                        <input class="form-control" type="text" placeholder="Alamat..." name="alamat" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir:</label>
                                        <input class="form-control" type="date" name="date" required>
                                    </div>
                                    <button type="submit" name="kirim" value="Kirim" class="btn btn-primary">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="text-center">
                    <a href="<?php echo base_url('index.php/kas/about'); ?>">Kas</a> &middot;
                    <a href="<?php echo base_url('index.php/kas/contact'); ?>">Ganti Password</a>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo base_url('index.php/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/js/sb-admin-2.min.js'); ?>"></script>

</body>
</html>
