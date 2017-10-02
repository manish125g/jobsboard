<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">

    <title>Go Tabbing</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <?php echo $this->Html->css("/assets/css/bootstrap.min.css"); ?>

    <?php echo $this->Html->css('jquery-ui.css'); ?>
    <?php echo $this->Html->css("/assets/css/jasny-bootstrap.min.css"); ?>
    <!-- Material CSS -->
    <?php echo $this->Html->css("/assets/css/material-kit.css"); ?>
    <!-- Font Awesome CSS -->
    <?php echo $this->Html->css("/assets/fonts/font-awesome.min.css"); ?>
    <?php echo $this->Html->css("/assets/fonts/themify-icons.css"); ?>
    <!-- Color Switcher -->
    <?php echo $this->Html->css("/assets/css/color-switcher.css"); ?>
    <!-- Animate CSS -->
    <?php echo $this->Html->css("/assets/extras/animate.css"); ?>
    <!-- Owl Carousel -->
    <?php echo $this->Html->css("/assets/extras/owl.carousel.css"); ?>
    <?php echo $this->Html->css("/assets/extras/owl.theme.css"); ?>
    <!-- Rev Slider CSS -->
    <?php echo $this->Html->css("/assets/extras/settings.css"); ?>
    <!-- Slicknav js -->
    <?php echo $this->Html->css("/assets/css/slicknav.css"); ?>
    <!-- Main Styles -->
    <?php echo $this->Html->css("/assets/css/main.css"); ?>
    <!-- Responsive CSS Styles -->
    <?php echo $this->Html->css("/assets/css/responsive.css"); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"/>
    <style>
        @font-face {
            font-family: "Trebuchet MS";
            url('fonts/Trebuchet MS.ttf');
        }
        html, body, a, p, h1, h2, h3, h4, h5, h6, input{
            font-family: "Trebuchet MS" !important;
        }
    </style>
    <style>
        .datepicker{z-index:9999 !important;}
    </style>

    <?php echo $this->Html->script("/assets/js/jquery-min.js"); ?>
    <?php echo $this->Html->script("/assets/js/bootstrap.min.js"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <?php echo $this->Html->script('jquery-ui.js');?>
</head>

<body>
<?= $this->Element('new-header'); ?>
<?= $this->Flash->render(); ?>
<?= $this->fetch('content'); ?>
<?= $this->Element('footer'); ?>

<!-- Main JS  -->
<?php echo $this->Html->script("/assets/js/material.min.js"); ?>
<?php echo $this->Html->script("/assets/js/material-kit.js"); ?>
<?php echo $this->Html->script("/assets/js/jquery.parallax.js"); ?>
<?php echo $this->Html->script("/assets/js/owl.carousel.min.js"); ?>
<?php echo $this->Html->script("/assets/js/jquery.slicknav.js"); ?>
<?php echo $this->Html->script("/assets/js/main.js"); ?>
<?php echo $this->Html->script("/assets/js/jquery.counterup.min.js"); ?>
<?php echo $this->Html->script("/assets/js/waypoints.min.js"); ?>
<?php echo $this->Html->script("/assets/js/jasny-bootstrap.min.js"); ?>
<?php echo $this->Html->script("/assets/js/bootstrap-select.min.js"); ?>
<?php echo $this->Html->script("/assets/js/form-validator.min.js"); ?>
<?php echo $this->Html->script("/assets/js/contact-form-script.js"); ?>
<?php echo $this->Html->script("/assets/js/jquery.themepunch.revolution.min.js"); ?>
<?php echo $this->Html->script("/assets/js/jquery.themepunch.tools.min.js"); ?>
<?php include('register.ctp');?>
<?php include('login.ctp');?>


</body>
</html>