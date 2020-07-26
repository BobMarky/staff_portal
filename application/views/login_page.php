<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Staff Portal</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url('AdminLTE-2.4.5/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('AdminLTE-2.4.5/') ?>bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('AdminLTE-2.4.5/') ?>bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('AdminLTE-2.4.5/') ?>dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url('AdminLTE-2.4.5/') ?>plugins/iCheck/square/blue.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>STAFF PORTAL</b>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">LOGIN</p>

            <form action="<?php echo base_url('Login/cek_login') ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <p><?php echo form_error('email'); ?></p>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <p><?php echo form_error('password'); ?></p>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <p><?php echo $this->session->flashdata('pesan') ?></p>
                </div>
            </form>
        </div>
    </div>

    <script src="<?php echo base_url('AdminLTE-2.4.5/') ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url('AdminLTE-2.4.5/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('AdminLTE-2.4.5/') ?>plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%'
            });
        });
    </script>
</body>

</html>