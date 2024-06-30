<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/logohimaif.png'); ?>" type="image/gif" sizes="16x16">
  <title>Admin Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-2"></div>
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang Admin Celeng</h1>
                  </div>
                  <form action="<?php echo site_url('login/authenticate'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <button class="btn btn-primary btn-user btn-block" name="pesan">Login</button>
                    <hr>
                  </form>

                  <?php if($this->session->flashdata('error')): ?>
                    <?php $pesan = $this->session->flashdata('error'); ?>
                    <?php if($pesan == "gagal"): ?>
                      <div class="col-md-10 col-sm-12 col-xs-12 ml-5">
                        <div class="alert alert-danger mt-4 ml-5" role="alert">
                          <p><center>Gagal Masuk Sebagai Admin</center></p>
                        </div>
                      </div>
                    <?php elseif($pesan == "password"): ?>
                      <div class="col-md-10 col-sm-12 col-xs-12 ml-5">
                        <div class="alert alert-primary mt-4 ml-5" role="alert">
                          <p><center>Sukses Mengganti Password</center></p>
                        </div>
                      </div>
                    <?php endif; ?>
                  <?php endif; ?>

                </div>
              </div>
              <div class="col-lg-2"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <footer class="sticky-footer bg-blue">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>
          <p class="mb-1">Copyright &copy; <a href="#" style="text-decoration: none;"><b>AL MUZZAMMIL</b></a> II <a href="#" style="text-decoration: none;"><b>HIMAIF UMUSLIM</b></a></p>
        </span><br>
      </div>
    </div>
  </footer>
  
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/js/sb-admin-2.min.js'); ?>"></script>
</body>

</html>
