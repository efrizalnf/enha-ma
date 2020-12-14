<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ENHAS Web Admin Login</title>
    <link rel="icon" href="<?php echo base_url()?>assets/landing/img/favicon.ico">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>/landing/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/login/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="<?php echo base_url();?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
    <link href="<?php echo base_url();?>assets/login/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-dark">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9 mt-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block m-auto text-center">
                                <img src="<?php echo base_url();?>assets/landing/img/<?= $profile->logo_sekolah?>"
                                    style="width: 200px; height: 200px;">
                                <p class="title font-weight-bold h3 mt-2"><?= $profile->nama_madrasah?></p>
                                <p class="h6 pl-3 pr-3"><?= $profile->visi_motto?></p>
                            </div>

                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">ENHAS <br> Web Admin Panel Login</h1>
                                    </div>
                                    <form class="user" method="post" action="<?php echo base_url('adminpanel');?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username"
                                                id="username" placeholder="Username"
                                                value="<?php set_value('username')?>">
                                            <?php form_error('username')?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" id="password" placeholder="Password"
                                                value="<?php set_value('password')?>">
                                            <?php form_error('password')?>
                                            <?php echo $this->session->flashdata('message');?>
                                            <form class="user" method="post"
                                                action="<?php echo base_url('login/index');?>">

                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user"
                                                        name="username" id="username" placeholder="Username"
                                                        value="<?php echo set_value('username');?>">
                                                    <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>')?>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-user"
                                                        name="password" id="password" placeholder="Password">
                                                    <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>')?>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox small">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck">
                                                        <label class="custom-control-label" for="customCheck">Ingatkan
                                                            Password</label>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-success btn-user btn-block"
                                                    onclick="Swal('Halla', 'asdasd', 'success')">

                                                    <button type="submit" class="btn btn-dark btn-user btn-block">

                                                        Login
                                                    </button>
                                            </form>
                                            <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> -->
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url();?>assets/login/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/login/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url();?>assets/login/vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->

        <script src="<?php echo base_url();?>assets/admin/js/sb-admin-2.min.js"></script>
        <!-- sweet alert -->
        <script src="<?php echo base_url();?>assets/swal/sweetalert2.all.min.js"></script>"></script>


</body>

</html>