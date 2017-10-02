<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo $users;?></h3>
                        <p>Total Users</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <!--<a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>-->
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php echo $news;?></h3>
                        <p>News Listed</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-newspaper-o"></i>
                    </div>
                    <?php echo $this->Html->link('More info <i class="fa fa-arrow-circle-right"></i>',
                        array('controller' =>'news', 'action' =>'admin', 'plugin' =>'admin'),
                        array('class' => 'small-box-footer', 'escape' => false));?>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php echo $jobs;?></h3>
                        <p>Job Listed</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-joomla"></i>
                    </div>
                    <?php echo $this->Html->link('More info <i class="fa fa-arrow-circle-right"></i>',
                        array('controller' =>'jobs', 'action' =>'admin', 'plugin' =>'admin'),
                        array('class' => 'small-box-footer', 'escape' => false));?>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?php echo $ads;?></h3>
                        <p>Total Ads</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-long-arrow-down"></i>
                    </div>
                    <?php echo $this->Html->link('More info <i class="fa fa-arrow-circle-right"></i>',
                        array('controller' =>'advertisements', 'action' =>'admin', 'plugin' =>'admin'),
                        array('class' => 'small-box-footer', 'escape' => false));?>
                </div>
            </div><!-- ./col -->
        </div><!-- /.row -->
    </section>
</div>