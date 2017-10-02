<style>
    .dropbtn {
        background-color: #f5f5f5;
        color: black;
        padding: 6px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown_list {
        position: relative !important;
        display: inline-block !important;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        background-color: #f5f5f5;
        min-width: 300px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        transform: translateY(-2em);
        transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #f5f5f5; color: #09c;}

    .dropdown_list:hover .dropdown-content {
        display: block;
        transform: translateY(0%);
        transition-delay: 0s, 0s, 0.3s !important;
    }

    .dropdown_list:hover .dropbtn {
        background-color: #f5f5f5;
        transition-delay: 0s, 0s, 0.3s !important;
    }
</style>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Job Portal</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                    	<?php echo $this->Html->link('Home', array('controller' =>'homes', 'action' =>'home'));?>
                    </li>
                    <li>
                    	<a href="https://cse.google.com/cse/home?cx=008650345519931166596:ni_z2d9ca00#gsc.tab=0&gsc.sort=&gsc.ref=more%3Alinkedin" target="_blank">Search Resume</a>
                    </li>
                    <li><a href="#">Events</a></li>
                    <li>
                    	<?php echo $this->Html->link('Entertainment', array('controller'=>'medias', 'action' =>'home'))?>
                    </li>
                    <li class="dropdown_list">
                    	<a href="#" class="dropbtn">Job</a>
                    		<div class="dropdown-content" style="left:0;">
	                    		<div class="col-md-6">
					    <a href="#">Link 1</a>
					    <a href="#">Link 2</a>
					    <a href="#">Link 3</a>
					</div>
					<div class="col-md-6">
					    <a href="#">Link 4</a>
					    <a href="#">Link 5</a>
					    <a href="#">Link 6</a>
					</div>
					<div class="clearfix"></div>
				</div>
                    	
                    </li>
                    <li>
                    	<?php echo $this->Html->link('Blog', '#', array());?>
                    </li>
                    <li>
                    <?php echo $this->Html->link('Your Blog', '#', array());?>
                    </li>
                    <li>
                    <?php echo $this->Html->link('Contact US', array('controller'=>'homes', 'action' =>'contact_us'))?>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>