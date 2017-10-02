<header class="main-header">
    <!-- Logo -->
    <?php echo $this->Html->link('<span class="logo-mini"><b>A</b>LT</span><span class="logo-lg"><b>JobPortal</b>LTE</span>', array('controller' =>'admins',
                        'action'=>'dashboard', 'plugin' =>'admin'), array('escape' =>false,'class' =>'logo'));?>
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo $this->Html->image('user2-160x160.jpg', array('class' =>'user-image'));?>
                        <span class="hidden-xs"><?php echo $this->Session->read('userName');?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <?php echo $this->Html->image('user2-160x160.jpg', array('class' =>'img-circle'));?>
                            <p>
                                <?php echo $this->Session->read('userName');?>
                                <!--<small>Member since Nov. 1995</small>-->
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <?php echo $this->Html->link('Sign Out', array('controller' =>'admins',
                                    'action' =>'logout', 'plugin' =>'admin'), array('class' =>'btn btn-default btn-flat'))?>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                
            </ul>
        </div>
    </nav>
</header>