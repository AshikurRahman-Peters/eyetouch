<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Eye Touch - Dashboard</title>

        <!-- Bootstrap core CSS  -->
        <link href="<?= base_url() ?>assets/backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template  -->
        <link href="<?= base_url() ?>assets/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
            type="text/css">

        <!-- Page level plugin CSS  -->
        <link href="<?= base_url() ?>assets/backend/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

        <!-- Custom styles for this template  -->
        <link href="<?= base_url() ?>assets/backend/css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url() ?>assets/backend/sweet/sweetalert2.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/backend/toastr/toastr.min.css">
        <link href="<?= base_url() ?>assets/backend/css/style.css" rel="stylesheet">


        <script src="<?= base_url() ?>assets/backend/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/backend/ckeditor/ckeditor.js"></script>

        <!-- Page level plugin JavaScript  -->
        <script src="<?= base_url() ?>assets/backend/vendor/datatables/jquery.dataTables.js"></script>
        <script src="<?= base_url() ?>assets/backend/vendor/datatables/dataTables.bootstrap4.js"></script>

        <script src="<?= base_url() ?>assets/backend/sweet/sweetalert2.min.js"></script>
        <script src="<?= base_url() ?>assets/backend/toastr/toastr.min.js"></script>
        <script src="<?= base_url() ?>assets/backend/timeago/time-ago-in-words.min.js"></script>

    </head>

    <body id="page-top">
        <div class="nc_preloader" style="display: none">
            <div class="loader_overlay">
                <div class="loader_image">
                    <img src="<?= base_url() ?>assets/frontend/images/spinner.gif" alt="loader">
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

            <a class="navbar-brand mr-1" target="_blank" href="<?= base_url() ?>">Eye Touch</a>

            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                <i class="fas fa-bars"></i>
            </button>


            <!-- Navbar   -->
            <ul class="navbar-nav form-inline ml-auto mr-0 mr-md-0 my-2 my-md-0">

                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="<?= base_url('Dashboard') ?>" id="messagesDropdown"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    </a>
                </li>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span>
                            <?php
                        echo $this->session->userdata('user_name');
                        ?>
                        </span>
                        <i class="fas fa-user-circle fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">Logout</a>
                    </div>
                </li>
            </ul>

        </nav>

        <div id="wrapper">

            <!-- Sidebar   -->
            <ul class="sidebar navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('dashboard') ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('add_slider') ?>">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Slider</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('add_comonpart') ?>">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>News & Event</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('edit_About/1') ?>">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>About Us</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('add_product') ?>">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Product</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('add_category') ?>">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Category</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('add_district') ?>">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>District</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('add_brand') ?>">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Brands</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('add_team') ?>">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Team</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('add_featured') ?>">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Featured &amp; Offer</span></a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ?>edit_contact/1">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Contact</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ?>admin/orders_manage">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Orders</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Messages</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="<?php echo base_url('message') ?>">Message</a>
                        <!-- <a class="dropdown-item" href=" <?php //echo base_url('Dashboard/PostMessage/Secretary') ?> ">Secretary Message</a> -->
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('add_admin') ?>">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>User</span></a>
                </li>

            </ul>


            <?php
        if (isset($content)) :
            $this->load->view("backend/" . $content, TRUE);
        endif;
        ?>

            <!-- /.container-fluid   -->

            <!-- Sticky Footer   -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Eye Touch <?= date('Y') ?></span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper   -->

        </div>
        <!-- /#wrapper   -->

        <!-- Scroll to Top Button  -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal  -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= base_url('Logout'); ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript  -->

        <script src=" <?= base_url() ?>assets/backend/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript  -->

        <script src="<?= base_url() ?>assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Page level plugin JavaScript  -->

        <script src="<?= base_url() ?>assets/backend/vendor/datatables/jquery.dataTables.js"></script>
        <script src="<?= base_url() ?>assets/backend/vendor/datatables/dataTables.bootstrap4.js"></script>

        <!-- Custom scripts for all pages  -->
        <script src="<?= base_url() ?>assets/backend/js/sb-admin.min.js"></script>

        <!-- Demo scripts for this page  -->
        <script src="<?= base_url() ?>assets/backend/js/demo/datatables-demo.js"></script>


        <script>
        //ajax call loader
        $(document).ready(function() {
            $(document).ajaxStart(function() {
                $(".nc_preloader").show();
            });
            $(document).ajaxComplete(function() {
                $(".nc_preloader").hide();
            });
        });
        </script>


    </body>

</html>