<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin  Panel</title>
    <!-- Tell the browser to be responsive to screen width hbkbkkkj-->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <?php echo $this->Html->css('/admin_theme/bootstrap/css/bootstrap.min.css'); ?>

    <!-- Font Awesome -->
    <?php echo $this->Html->css('/admin_theme/dist/css/font-awesome.min.css', array('rel' => 'stylesheet')); ?>

    <!-- Ionicons -->
    <?php echo $this->Html->css('/admin_theme/dist/css/ionicons.min.css', array('rel' => 'stylesheet')); ?>
    <?php echo $this->Html->css('/admin_theme/plugins/datatables/dataTables.bootstrap.css', array('rel' => 'stylesheet')); ?>

    <!-- Theme style -->
    <?php echo $this->Html->css('/admin_theme/dist/css/AdminLTE.min.css', array('rel' => 'stylesheet')); ?>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <?php echo $this->Html->css('/admin_theme/dist/css/skins/_all-skins.min.css', array('rel' => 'stylesheet')); ?>
    <!-- iCheck -->
    <?php echo $this->Html->css('/admin_theme/plugins/iCheck/flat/blue.css', array('rel' => 'stylesheet')); ?>
    <!-- Morris chart -->
    <?php echo $this->Html->css('/admin_theme/plugins/morris/morris.css', array('rel' => 'stylesheet')); ?>

    <!-- jvectormap -->
    <?php echo $this->Html->css('/admin_theme/plugins/jvectormap/jquery-jvectormap-1.2.2.css', array('rel' => 'stylesheet')); ?>

    <!-- Date Picker -->
    <?php echo $this->Html->css('/admin_theme/plugins/datepicker/datepicker3.css', array('rel' => 'stylesheet')); ?>

    <!-- Daterange picker -->
    <?php echo $this->Html->css('/admin_theme/plugins/daterangepicker/daterangepicker-bs3.css', array('rel' => 'stylesheet')); ?>
    <!-- bootstrap wysihtml5 - text editor -->
    <?php echo $this->Html->css('/admin_theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css', array('rel' => 'stylesheet')); ?>
    <?php echo $this->Html->css('/admin_theme/style.css', array('rel' => 'stylesheet')); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <?php echo $this->Html->script('/admin_theme/dist/js/html5shiv.min.js'); ?>
    <?php echo $this->Html->script('/admin_theme/dist/js/respond.min.js'); ?>
    <!--[endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php echo $this->Element('AdminElements/top_header'); ?>
        <?php echo $this->Element('AdminElements/leftbar'); ?>
        <?php echo $this->Flash->render(); ?>
        <?php echo $this->fetch('content'); ?>
    </div>
    <?php echo $this->Html->script('/admin_theme/plugins/jQuery/jQuery-2.1.4.min.js'); ?>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <?php echo $this->Html->script('/admin_theme/bootstrap/js/bootstrap.min.js'); ?>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <?php echo $this->Html->script('/admin_theme/plugins/morris/morris.min.js'); ?>
    <!-- Sparkline -->
    <?php echo $this->Html->script('/admin_theme/plugins/sparkline/jquery.sparkline.min.js'); ?>
    <!-- jvectormap -->
    <?php echo $this->Html->script('/admin_theme/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>
    <?php echo $this->Html->script('/admin_theme/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>
    <!-- jQuery Knob Chart -->
    <?php echo $this->Html->script('/admin_theme/plugins/knob/jquery.knob.js'); ?>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <?php echo $this->Html->script('/admin_theme/plugins/daterangepicker/daterangepicker.js'); ?>
    <!-- datepicker -->
    <?php echo $this->Html->script('/admin_theme/plugins/datepicker/bootstrap-datepicker.js'); ?>
    <!-- Bootstrap WYSIHTML5 -->
    <?php echo $this->Html->script('/admin_theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>
    <!-- Slimscroll -->
    <?php echo $this->Html->script('/admin_theme/plugins/slimScroll/jquery.slimscroll.min.js'); ?>
    <!-- FastClick -->
    <?php echo $this->Html->script('/admin_theme/plugins/fastclick/fastclick.min.js'); ?>
    <!-- AdminLTE App -->
    <?php echo $this->Html->script('/admin_theme/dist/js/app.min.js'); ?>
    <!-- DataTables -->
    <?php echo $this->Html->script('/admin_theme/plugins/datatables/jquery.dataTables.min.js'); ?>
    <?php echo $this->Html->script('/admin_theme/plugins/datatables/dataTables.bootstrap.min.js'); ?>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <?php echo $this->Html->script('/admin_theme/dist/js/pages/dashboard.js'); ?>
    <!-- AdminLTE for demo purposes -->
    <?php echo $this->Html->script('/admin_theme/dist/js/demo.js'); ?>

    <script type="text/javascript">
        /*jQuery('#media_type').change(function() {
            var item = jQuery(this);
            if(item.val() =='image'){
                jQuery('#file').attr('accept','image/!*');
            }else{
                jQuery('#file').attr('accept','video/!*');
            }
        });
        jQuery('#input_type').change(function(){
            var item = jQuery(this);
            $('#input_type option').filter(function() {
                    return !this.value || $.trim(this.value).length == 0;
            }).remove();
            jQuery('#file').attr('disabled',true);
            jQuery('#url').attr('disabled',true);
            if(item.val() =='file'){
                jQuery('#file').attr('disabled',false);
                jQuery('#url').attr('disabled',true);
            }else{
                jQuery('#file').attr('disabled',true);
                jQuery('#url').attr('disabled',false);
            }
        });*/
    </script>
</body>
</html>
