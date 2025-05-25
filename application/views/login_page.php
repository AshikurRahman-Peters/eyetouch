<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login | Newlooks</title>

    <!-- Bootstrap core CSS-->
    <link href="<?= base_url()?>assets/backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url()?>assets/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?= base_url()?>assets/backend/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>

        <div class="card-body">

            <?php if(isset($error_login)): ?>
                <div class="alert alert-danger"><?= $error_login; ?></div>
            <?php endif;?>

            <form class="login-form" action="<?php echo base_url() ?>login_data_check" method="post">
                <div class="login-wrap">
                    <p class="login-img"><i class="icon_lock_alt"></i></p>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_profile"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo set_value('username') ?>" autofocus>
                    </div>
                    <?php echo form_error('username', '<p style="color: red">', '</p>') ?>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                    </div>
                    <?php echo form_error('pass', '<p style="color: red">', '</p>') ?>
                    <br>
                    <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Login</button>
            </form>

        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url()?>assets/backend/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url()?>assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url()?>assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
