<!-- Header Section Start -->
<div class="header">
    <!-- Start intro section -->
    <section id="intro" class="section-intro">
        <div class="logo-menu">
            <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="50">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand logo"
                           href="<?= $this->Html->url('/'); ?>"><?= $this->Html->image('/logo/logo.jpg', array('alt' => 'Go Tabbing', 'style' => 'width: 48px')) ?></a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar">
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav">
                            <li>
                                <a class=""
                                   href="https://cse.google.com/cse/home?cx=008650345519931166596:ni_z2d9ca00#gsc.tab=0&gsc.sort=&gsc.ref=more%3Alinkedin"
                                   target="_blank">
                                    Search Resume
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Staffing <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="#">
                                            Recruiter<i class="fa fa-angle-right"></i>
                                        </a>
                                        <ul class="dropdown">
                                            <?php
                                            if (($this->Session->read('name')) || ($this->Session->read('userName'))) {
                                                ?>
                                                <li><?php echo $this->Html->link('Post Jobs', array('controller' => 'jobs', 'action' => 'add_job', 'plugin' => 'admin')); ?></li>
                                                <?php
                                            } else { ?>
                                                <li>
                                                    <?= $this->Html->link('Post Jobs', '#',
                                                        array('style' => 'text-decoration: none;',
                                                            "data-toggle" => "modal", "data-target" => "#login", 'escape' => false)) ?>
                                                </li>
                                            <?php }
                                            ?>
                                            <li>
                                                <a href="https://cse.google.com/cse/home?cx=008650345519931166596:ni_z2d9ca00#gsc.tab=0&gsc.sort=&gsc.ref=more%3Alinkedin"
                                                   target="_blank">Search Resume</a></li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Sale Executive<i class="fa fa-angle-right"></i>
                                        </a>
                                        <ul class="dropdown">
                                            <?php
                                            if (($this->Session->read('name')) || ($this->Session->read('userName'))) {
                                                ?>
                                                <li><?php echo $this->Html->link('Post HotList', array('controller' => 'jobs', 'action' => 'add_job', 'plugin' => 'admin')); ?></li>
                                                <?php
                                            } else { ?>
                                                <li>
                                                    <?= $this->Html->link('Post HotList', '#',
                                                        array('style' => 'text-decoration: none;',
                                                            "data-toggle" => "modal", "data-target" => "#login", 'escape' => false)) ?>
                                                </li>
                                            <?php }
                                            ?>
                                            <li>
                                                <a href="https://cse.google.com/cse/home?cx=008650345519931166596:ni_z2d9ca00#gsc.tab=0&gsc.sort=&gsc.ref=more%3Alinkedin"
                                                   target="_blank">Search Resume</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><?php echo $this->Html->link('Entertainment', array('controller' => 'medias', 'action' => 'home')) ?></li>
                            <li><?php echo $this->Html->link('Blog', '#', array()); ?></li>
                            <li><?php echo $this->Html->link('Your Ads', array('controller' => 'advertisements', 'action' => 'home'), array()); ?></li>
                            <li><?php echo $this->Html->link('Contact us', array('controller' => 'homes', 'action' => 'contact_us')) ?></li>
                            <?php $name = $this->Session->read('name');
                            if (isset($name) && !empty($name)) {
                            ?>

                            <li>
                                <a href="#"><?php echo $name; ?> <i class="fa fa-angle-down"></i> </a>
                                <ul class="dropdown">
                                    <li><?php echo $this->Html->link('Profile', array('controller' => 'users', 'action' => 'profile')); ?></li>
                                    <li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></li>
                                </ul>
                            </li>
                        </ul>
                        <?php } else {
                                ?>
                                </ul>
                                <ul class="nav navbar-nav navbar-right float-right">
                                    <li class="left">
                                        <?php echo $this->Html->link('<i class="ti-pencil-alt"></i> Post A Job', array('controller' =>'admins', 'action' =>'login', 'plugin' =>'admin'), array('escape'=>false)); ?>
                                    </li>
                                    <li class="right">
                                        <?= $this->Html->link('<i class="ti-lock"></i> &nbsp; Log In', '#',
                                            array('style' => 'text-decoration: none;',
                                                "data-toggle" => "modal", "data-target" => "#login", 'escape' => false)) ?>
                                    </li>
                                </ul>
                            <?php
                            }
                        ?>
                    </div>
                </div>
                <!-- Mobile Menu Start -->
                <ul class="wpb-mobile-menu">
                    <li>
                        <a class=""
                           href="https://cse.google.com/cse/home?cx=008650345519931166596:ni_z2d9ca00#gsc.tab=0&gsc.sort=&gsc.ref=more%3Alinkedin"
                           target="_blank">
                            Search Resume
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Staffing <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown">
                            <li>
                                <a href="#">
                                    Recruiter<i class="fa fa-angle-right"></i>
                                </a>
                                <ul class="dropdown">
                                    <?php
                                    if (($this->Session->read('name')) || ($this->Session->read('userName'))) {
                                        ?>
                                        <li><?php echo $this->Html->link('Post Jobs', array('controller' => 'jobs', 'action' => 'add_job', 'plugin' => 'admin')); ?></li>
                                        <?php
                                    } else { ?>
                                        <li>
                                            <?= $this->Html->link('Post Jobs', '#',
                                                array('style' => 'text-decoration: none;',
                                                    "data-toggle" => "modal", "data-target" => "#login", 'escape' => false)) ?>
                                        </li>
                                    <?php }
                                    ?>
                                    <li>
                                        <a href="https://cse.google.com/cse/home?cx=008650345519931166596:ni_z2d9ca00#gsc.tab=0&gsc.sort=&gsc.ref=more%3Alinkedin"
                                           target="_blank">Search Resume</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    Sale Executive<i class="fa fa-angle-right"></i>
                                </a>
                                <ul class="dropdown">
                                    <?php
                                    if (($this->Session->read('name')) || ($this->Session->read('userName'))) {
                                        ?>
                                        <li><?php echo $this->Html->link('Post HotList', array('controller' => 'jobs', 'action' => 'add_job', 'plugin' => 'admin')); ?></li>
                                        <?php
                                    } else { ?>
                                        <li>
                                            <?= $this->Html->link('Post HotList', '#',
                                                array('style' => 'text-decoration: none;',
                                                    "data-toggle" => "modal", "data-target" => "#login", 'escape' => false)) ?>
                                        </li>
                                    <?php }
                                    ?>
                                    <li>
                                        <a href="https://cse.google.com/cse/home?cx=008650345519931166596:ni_z2d9ca00#gsc.tab=0&gsc.sort=&gsc.ref=more%3Alinkedin"
                                           target="_blank">Search Resume</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><?php echo $this->Html->link('Entertainment', array('controller' => 'medias', 'action' => 'home')) ?></li>
                    <li><?php echo $this->Html->link('Blog', '#', array()); ?></li>
                    <li><?php echo $this->Html->link('Your Ads', array('controller' => 'advertisements', 'action' => 'home'), array()); ?></li>
                    <li><?php echo $this->Html->link('Contact US', array('controller' => 'homes', 'action' => 'contact_us')) ?></li>
                    <?php $name = $this->Session->read('name');
                    if (isset($name) && !empty($name)) {
                        ?>

                        <li>
                            <a href="#"><?php echo $name; ?> <i class="fa fa-angle-down"></i> </a>
                            <ul class="dropdown">
                                <li><?php echo $this->Html->link('Profile', array('controller' => 'users', 'action' => 'profile')); ?></li>
                                <li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></li>
                            </ul>
                        </li>
                    <?php } else {
                        ?>
                        <?php echo $this->Html->link('<i class="ti-pencil-alt"></i> Post A Job', array('controller' => 'admins', 'action' => 'login', 'plugin' => 'admin'), array('escape' => false)); ?>
                        <li class="btn-m">
                            <?= $this->Html->link('<i class="ti-lock"></i> &nbsp; Log In', '#',
                                array('style' => 'text-decoration: none;',
                                    "data-toggle" => "modal", "data-target" => "#login", 'escape' => false)) ?>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <!-- Mobile Menu End -->
            </nav>

            <!-- Off Canvas Navigation -->
        </div>
        <!-- Header Section End -->
    </section>
</div>
