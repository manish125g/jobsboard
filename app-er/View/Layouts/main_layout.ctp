<!DOCTYPE html>
<html lang="en">
<head>
    <title>Story Board</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $this->Html->css('bootstrap.min.css'); ?>
    <?php echo $this->Html->css('style'); ?>
    <?php echo $this->Html->css('/plugin/slippry/slippry.css'); ?>
    <?php echo $this->Html->script('jquery.min.js'); ?>
    <?php echo $this->Html->script('bootstrap.min.js'); ?>
    <?php echo $this->Html->script('/plugin/slippry/slippry.min.js'); ?>
</head>
<body>
<div class="container sb-page">
    <?php echo $this->Element('navbar'); ?>
    <?php echo $this->Flash->render(); ?>
    <?php echo $this->fetch('content'); ?>
</div>
</body>
</html>
