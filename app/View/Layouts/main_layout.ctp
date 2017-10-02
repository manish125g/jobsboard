<!DOCTYPE html>
<html lang="en">
<head>
    <title>Story Board</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $this->Html->css('bootstrap.min.css'); ?>
    <?php echo $this->Html->css('jquery-ui.css'); ?>
    <?php echo $this->Html->css('style'); ?>
    <?php echo $this->Html->css('/plugin/slippry/slippry.css'); ?>
    <?php echo $this->Html->css('/fileupload/css/fileinput.css'); ?>
    <?php echo $this->Html->css('/fileupload/themes/explorer/theme.css'); ?>
    <?php echo $this->Html->css('/plugin/font-awesome/css/font-awesome.min.css'); ?>
    <?php echo $this->Html->script('jquery.min.js'); ?>
    <?php echo $this->Html->script('bootstrap.min.js'); ?>
    <?php echo $this->Html->script('/plugin/slippry/slippry.min.js');?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <?php echo $this->Html->script('jquery-ui.js');?>
    <?php echo $this->Html->script('/fileupload/themes/explorer/theme.js');?>
    <?php echo $this->Html->script('/fileupload/js/plugins/sortable.js');?>
    <?php echo $this->Html->script('/fileupload/js/fileinput.js');?>
</head>


<body>
<?php echo $this->Element('navbar'); ?>
<div class="sb-page">
    <?php echo $this->Flash->render(); ?>
    <?php echo $this->fetch('content'); ?>
</div>

</body>
<?php include('register.ctp');?>
<?php include('login.ctp');?>
</html>
