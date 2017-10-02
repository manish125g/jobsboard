<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $this->fetch('title');?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <?php echo $this->Html->css('/admin_theme/bootstrap/css/bootstrap.min.css');?>
    <!-- Font Awesome -->
    <?php echo $this->Html->css('/admin_theme/dist/css/font-awesome.min.css', array('rel' =>'stylesheet'));?>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
    <!-- Ionicons -->
    <?php echo $this->Html->css('/admin_theme/dist/css/ionicons.min.css', array('rel' =>'stylesheet'));?>
    <!--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
    <!-- Theme style -->
    <?php echo $this->Html->css('/admin_theme/dist/css/AdminLTE.min.css');?>
    <!-- iCheck -->
    <?php echo $this->Html->css('/admin_theme/plugins/iCheck/square/blue.css');?>
    <!--[if lt IE 9]-->
    <?php echo $this->Html->script('/admin_theme/dist/js/html5shiv.min.js');?>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <?php echo $this->Html->script('/admin_theme/dist/js/respond.min.js');?>
    <!--[endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Job Portal</b>PDP</a>
    </div>
    <?php echo $this->fetch('content');?>
</div>
<!-- jQuery 2.1.4 -->
<?php echo $this->Html->script('/admin_theme/plugins/jQuery/jQuery-2.1.4.min.js');?>
<?php echo $this->Html->script('/admin_theme/bootstrap/js/bootstrap.min.js');?>
<?php echo $this->Html->script('/admin_theme/plugins/iCheck/icheck.min.js');?>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%'
        });
    });
</script>
</body>
</html>
