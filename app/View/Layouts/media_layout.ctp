<!DOCTYPE HTML>
<html>
<head>
    <title>My Play a Entertainment Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap -->
    <?php echo $this->Html->css('/media/css/bootstrap.min.css', array('rel' =>'stylesheet', 'type' =>'text/css', 'media'=>'all'));?>
    <!-- //bootstrap -->
    <?php echo $this->Html->css('/media/css/dashboard.css', array('rel' =>'stylesheet'));?>
    <!-- Custom Theme files -->
    <?php echo $this->Html->css('/media/css/style.css', array('rel' =>'stylesheet', 'type' =>'text/css', 'media'=>'all'));?>
    <?php echo $this->Html->script('/media/js/jquery-1.11.1.min.js');?>
    <!--start-smoth-scrolling-->
    <!-- fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href="http://vjs.zencdn.net/5.8.8/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 -->
    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

    <!-- //fonts -->
</head>
<body>
<?php echo $this->element('media/header-navbar');?>

<div class="col-sm-3 col-md-2 sidebar">
<?php echo $this->element('media/sidebar');?>
</div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php echo $this->fetch('content');?>
<?php echo $this->element('media/footer');?>
</div>

<div class="clearfix"></div>
<div class="drop-menu">
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
        <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
    </ul>
</div>
<?php echo $this->Html->script('/media/js/bootstrap.min.js');?>
<script src="http://vjs.zencdn.net/5.8.8/video.js"></script>
</body>
</html>
<script>
    videojs("video", {}, function(){
        // Player (this) is initialized and ready.
    });
</script>