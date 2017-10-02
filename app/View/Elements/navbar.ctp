<style>
    .dropdown-menu {
        background-color: #f5f5f5;
    }
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
        margin-left: -1px;
        -webkit-border-radius: 0 6px 6px 6px;
        -moz-border-radius: 0 6px 6px;
        border-radius: 0 6px 6px 6px;
    }

    .dropdown-submenu:hover>.dropdown-menu {
        display: block;
    }

    .dropdown-submenu>a:after {
        display: block;
        content: " ";
        float: right;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
        border-width: 5px 0 5px 5px;
        border-left-color: #ccc;
        margin-top: 5px;
        margin-right: -10px;
    }

    .dropdown-submenu:hover>a:after {
        border-left-color: #fff;
    }

    .dropdown-submenu.pull-left {
        float: none;
    }

    .dropdown-submenu.pull-left>.dropdown-menu {
        left: -100%;
        margin-left: 10px;
        -webkit-border-radius: 6px 0 6px 6px;
        -moz-border-radius: 6px 0 6px 6px;
        border-radius: 6px 0 6px 6px;
    }
</style>
<header>
    <nav class="navbar navbar-default" style="height: 60px;">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php echo $this->Html->link('<h1>Job Portal</h1>', array('controller' => 'homes', 'action' => 'home'),
                    array('class' => 'navbar-brand', 'escape' => false)); ?>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right clearfix">
                    <li>
                        <a href="https://cse.google.com/cse/home?cx=008650345519931166596:ni_z2d9ca00#gsc.tab=0&gsc.sort=&gsc.ref=more%3Alinkedin"
                           target="_blank">Search Resume</a>
                    </li>
                    <li class="dropdown">
                        <?php echo $this->Html->link('Staffing <span class="caret"></span>', array('controller' => 'jobs', 'action' => 'home'), array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-expanded' => "false", 'escape' => false)); ?>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruiter</a>
                                <ul class="dropdown-menu">
                                    <li><?php echo $this->Html->link('Post Jobs', array('controller' =>'admins', 'action' =>'login', 'plugin' =>'admin')); ?></li>
                                    <li><a href="https://cse.google.com/cse/home?cx=008650345519931166596:ni_z2d9ca00#gsc.tab=0&gsc.sort=&gsc.ref=more%3Alinkedin" target="_blank">Search Resume</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sale Executive</a>
                                <ul class="dropdown-menu">
                                    <li><?php echo $this->Html->link('Post HotList', array('controller' =>'admins', 'action' =>'login', 'plugin' =>'admin')); ?></li>
                                    <li><a href="https://cse.google.com/cse/home?cx=008650345519931166596:ni_z2d9ca00#gsc.tab=0&gsc.sort=&gsc.ref=more%3Alinkedin" target="_blank">Search Resume</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <?php echo $this->Html->link('Entertainment', array('controller' => 'medias', 'action' => 'home')) ?>
                    </li>
<!--                    <li class="dropdown">-->
<!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jobs <span class="caret"></span></a>-->
<!--                        <ul class="dropdown-menu">-->
<!--                            <li><a href="#">Job </a></li>-->
<!--                            <li><a href="#">Another action</a></li>-->
<!--                        </ul>-->
<!--                    </li-->
                    <li>
                        <?php echo $this->Html->link('Blog', '#', array()); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('Your Ads', array('controller' => 'advertisements', 'action' => 'home'), array()); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('Contact US', array('controller' => 'homes', 'action' => 'contact_us')) ?>
                    </li>
                    <?php $name = $this->Session->read('name');
                    if (isset($name) && !empty($name)) {
                        ?>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false"><?php echo $name; ?> <span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><?php echo $this->Html->link('Profile', array('controller' => 'users', 'action' => 'profile')); ?></li>
                                <li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></li>
                            </ul>
                        </li>

                    <?php }
                    ?>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<script>
    $('.dropdown').hover(function () {
        $(this).css("color", "red");
        $('.dropdown-toggle', this).trigger('click');
    });
</script>