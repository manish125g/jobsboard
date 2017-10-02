<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php echo $this->Html->link('<h1>Job Portal</h1>', array('controller' =>'homes', 'action' =>'home'),
                array('class' =>'navbar-brand', 'escape' => false));?>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right clearfix">
                <li>
                    <a href="https://cse.google.com/cse/home?cx=008650345519931166596:ni_z2d9ca00#gsc.tab=0&gsc.sort=&gsc.ref=more%3Alinkedin" target="_blank">Search Resume</a>
                </li>
                <li><a href="#">Events</a></li>
                <li>
                    <?php echo $this->Html->link('Entertainment', array('controller'=>'medias', 'action' =>'home'))?>
                </li>
                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jobs <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Job </a></li>
                        <li><a href="#">Another action</a></li>
                    </ul>
                </li-->
                <li>
                    <?php echo $this->Html->link('Blog', '#', array());?>
                </li>
                <li>
                    <?php echo $this->Html->link('Your Blog', '#', array());?>
                </li>
                <li>
                    <?php echo $this->Html->link('Contact US', array('controller'=>'homes', 'action' =>'contact_us'))?>
                </li>
                <?php $name = $this->Session->read('name');
                if(isset($name) && !empty($name)){?>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $name;?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><?php echo $this->Html->link('Profile', array('controller' =>'users', 'action' =>'profile'));?></li>
                            <li><?php echo $this->Html->link('Logout', array('controller' =>'users', 'action' =>'logout'));?></li>
                        </ul>
                    </li>

                <?php }
                ?>
            </ul>

        </div>
        <div class="clearfix"> </div>
    </div>
</nav>
